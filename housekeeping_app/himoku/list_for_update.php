<?php 
require_once '../Encode.php';
require_once '../DbManager.php';

session_start();

try {
    $db = getDb();
    $sql = "SELECT id, 費目名, 入出金区分, left(備考,20) as 備考 
    FROM 費目
    ORDER BY id";
    $stt = $db->prepare($sql);
    $stt->execute();
} catch (PDOException $e) {
    die ("エラーメッセージ：" . $e->getMessage());
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>費目更新削除用一覧</title>
</head>
<body>
		<a href="../index.php">ホームへ戻る</a>

<h3>費目更新削除用一覧</h3>
<p style="color:blue;">
<?php 
if (isset($_SESSION['message'])){
    print($_SESSION['message']);
    unset($_SESSION['message']);
}
?>
</p>
<table border=1>
<thead>
<tr><th>費目名</th><th>入出金区分</th><th>備考</th><th colspan="2"></th></tr>
</thead>
<tbody>
<?php 
while($row = $stt->fetch(PDO::FETCH_ASSOC)){
?>
<tr>
	<td><?=$row['費目名']?></td>
	<td><?=$row['入出金区分'] == '1' ? '入金' : '出金' ?></td>
	<td><?=$row['備考']?></td>
	<td><a href="himoku_update_form.php?id=<?=$row['id']?>">編集</a></td>
	<td><a href="himoku_delete_form.php?id=<?=$row['id']?>">削除</td></td>
</tr>
<?php
}
?>

</tbody>
<tfoot></tfoot>
</table>
</body>
</html>