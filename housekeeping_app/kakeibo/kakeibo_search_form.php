<?php
require_once '../Encode.php';
require_once '../DbManager.php';

session_start();

$db = getDb();
$sql = 'SELECT * from 家計簿';
$stt = $db->prepare($sql);
$stt->bindValue();
$stt->execute();

if($row = $stt->fetch(PDO::FETCH_ASSOC)){
    $id = $row['id'];
    $date = $row['日付'];
    $himoku_id = $row['費目id'];
    $memo = $row['メモ'];
    $income = $row['入金額'];
    $outcome = $row['出金額'];
} else {
    die ('該当するデータがありません');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>一覧検索画面</title>
</head>
<body>
<h3>一覧検索画面</h3>
<table border="1">
<tr><th></th><td></td></tr>
<tr><th>ID</th><td><?=$id?></td></tr>
<tr><th>日付</th><td><?=$date?></td></tr>
<tr><th>費目id</th><td><?=$himoku_id?></td></tr>
<tr><th>メモ</th><td><?=$memo?></td></tr>
<tr><th>入金額</th><td><?=$income?></td></tr>
<tr><th>出金額</th><td><?=$outcome?></td></tr>
</table>
</body>
</html>
