<?php
require_once '../Encode.php';
require_once '../DbManager.php';

session_start();

try{
    $db = getDb();
    $sql = "SELECT k.id, k.日付, k.費目id, h.費目名, k.メモ, k.入金額, k.出金額
    FROM 家計簿
    as k inner join 費目 as h on k.費目id = h.id
    ORDER BY id";

    $stt = $db->prepare($sql);
    $stt->execute();
} catch (PDOException $e){
    die ("エラーメッセージ：" . $e->getMessage());
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>家計簿一覧</title>
</head>
<body>
		<a href="../index.php">ホームへ戻る</a>
<h3>家計簿一覧</h3>
<p style="color:blue;">
<?php 
if(isset($_SESSION['message'])){
   print($_SESSION['message']);
   unset($_SESSION['message']);
}
?>
</p>
<table border=1>
    <thead>
        <tr><th>id<th>日付</th><th>費目id</th><th>費目名</th><th>メモ</th><th>入金額</th><th>出金額</th></tr>
    </thead>
	<tbody>
        <?php 
        while ($row = $stt->fetch(PDO::FETCH_ASSOC)){
        ?>
        <tr>
            <td><?=$row['id']?></td>
            <td><?=$row['日付']?></td>
            <td><?=$row['費目id']?></td>
            <td><?=$row['費目名']?></td>
            <td><?=$row['メモ']?></td>
            <td><?=$row['入金額']?></td>
            <td><?=$row['出金額']?></td>
        </tr>
        <?php 
        }
        ?>
    </tbody>
    <tfoot>
    </tfoot>
</table>
</body>
</html>