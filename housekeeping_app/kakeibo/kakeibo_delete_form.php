<?php
require_once '../Encode.php';
require_once '../DbManager.php';

session_start();

$db = getDb();
$sql = "select id, 日付, 費目id, メモ, 入金額, 出金額 from 家計簿 where id = :id";
$stt = $db->prepare($sql);
$stt->bindValue(':id', e($_GET['id']));
$stt->execute();

if($row = $stt->fetch(PDO::FETCH_ASSOC)){
    $id = $row['id'];
    $date = $row['日付'];
    $himoku_id = $row['費目id'];
    $memo = $row['メモ'];
    $income = $row['入金額'];
    $outcome = $row['出金額'];
} else {
    die('該当するデータがありません。');
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>項目削除確認</title>
</head>
<body>
<h3>項目削除確認</h3>
<a href="../index.php">ホームへ戻る</a>
<table border="1">
<tr><th>ID</th><td><?=$id ?></td></tr>
<tr><th>日付</th><td><?=$date ?></td></tr>
<tr><th>費目id</th><td><?=$himoku_id ?></td></tr>
<tr><th>メモ</th><td><?=$memo ?></td></tr>
<tr><th>入金額</th><td><?=$income ?></td></tr>
<tr><th>出金額</th><td><?=$outcome ?></td></tr>
</table>
<form method="post" action="kakeibo_delete_process.php">
	<input type="hidden" name="id" value="<?=$id?>" />
	<input type="submit" name="ok" value="OK">
	<input type="submit" name="cancel" value="キャンセル">
</form>
<a href="kakeibolist_for_update.php">費目更新削除用一覧へ</a>
</body>
</html>