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
                WHERE id= :id";
        $stt = $db->prepare($sql);
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
        catch (PDOException $e){
        die('エラーメッセージ：' . $e->getMessage());
    }
}
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>費目編集</title>
</head>
<body>
<a href="../index.php">ホームへ戻る</a>
<h3>費目編集</h3>

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
		<form method="POST" action="himoku_update_process.php">
			<div class="container">
				<label for="name">費目名：</label><br />
				<input type="text" id="name" name="himoku_name" size="30" 
				value="<?=$himoku_name?>" />
			</div>
			<div class="container">
				<label>入出金区分</label><br />
				<?php 
				    $kubuns = ['1'=>'入金','2'=>'出金'];
				    foreach($kubuns as $kubun_code => $kubun_name){
				?>
				<label><input type="radio" name="kubun" value="<?=$kubun_code?>" 
				<?=$kubun_code == $kubun ? 'checked' : ''?> />
				<?=$kubun_name?></label>
				<?php    
				}
				?>
				<!-- 
				<label><input type="radio" name="kubun" value="1">入金</label>
				<label><input type="radio" name="kubun" value="2">出金</label>
				-->
			</div>
			<div class="container">
				<label>備考</label><br />
				<textarea name="memo" rows="5" cols="30"><?=$memo?></textarea>
			</div>
			<input type="hidden" name="id" value="<?=$id?>" />
			<input type="submit" value="更新" />
		</form>
	</body>
</html>