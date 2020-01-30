<?php
require_once '../Encode.php';
require_once '../DbManager.php';

session_start();

if($_SESSION['errors']){
    $id = $_SESSION['id'];
    $himoku_name = $_SESSION['himoku_name'];
    $kubun = $_SESSION['kubun'];
    $memo = $_SESSION['memo'];
} else {
    try {
        $db = getDb();
        $sql = "SELECT id, 費目名, 入出金区分, 備考
                FROM 費目
                WHERE id = :id";
        $stt = $db->prepare($sql);
        // :idとは、プレースホルダー(SQLインジェクションを防ぐ)
        $stt->bindValue(':id', e($_GET['id']));
        $stt->execute();
        
        if($row = $stt->fetch(PDO::FETCH_ASSOC)){ //fetchで一行取り出して連想配列$rowに入れる
            $id = $row['id'];
            $himoku_name = $row['費目名'];
            $kubun = $row['入出金区分'];
            $memo = $row['備考'];
        } else {
            die('該当するデータがありません。');
        }
    } catch (PDOException $e){
        die('エラーメッセージ：' . $e->getMessage());
    }
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>費目編集</title>
	</head>
	<body>
		<a href="../index.php">ホームへ戻る</a>
		<h3>費目削除確認</h3>
		<table border=1>
			<tr><th>ID</th><td><?=$id ?></td></tr>
			<tr><th>費目名</th><td><?=$himoku_name ?></td></tr>
			<tr><th>入出金区分</th><td></td><?=$kubun == 1 ? '入金':'出金'?></tr>
			<tr><th>備考</th><td></td><?=$memo ?></tr>
		</table>
		<ul style='color:red;'>
		<?php 
		if(isset($_SESSION['errors'])){
		    foreach($_SESSION['errors'] as $error){
		?>
		        <li><?=$error ?></li>
		 <?php
		    }
		    unset($_SESSION['errors']);
		}
		?>
		</ul>
		<form method="POST" action="himoku_delete_process.php">
			<input type="hidden" name="id" value="<?=$id?>" />
			<input type="submit" name="ok" value="OK" />
			<input type="submit" name="cancel" value="キャンセル" />
		</form>
		<hr />
		<a href="list_for_update.php">費目更新削除用一覧へ</a>
	</body>
