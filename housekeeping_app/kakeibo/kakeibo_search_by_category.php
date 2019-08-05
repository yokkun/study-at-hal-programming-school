<?php
require_once '../DbManager.php';
require_once '../Encode.php';
session_start();
if (!isset($_SESSION['himoku'])) {
    try {
        $db = getDb();
        $sql = "SELECT id, 費目名 FROM 費目";
        $stt = $db->prepare($sql);
        $stt->execute();
        
        $himoku_assoc = [];
        while($row = $stt->fetch(PDO::FETCH_ASSOC)) {
            $himoku_assoc[$row['id']] = $row['費目名'];
        }
        $_SESSION['himoku'] = $himoku_assoc;
    } catch (PDOException $e) {
        die('エラーメッセージ:' . $e->getMessage());
    }
}

if (isset($_GET['himoku']) && $_GET['himoku'] !== '') {
    try {
        $db2 = getDb();
        $sql2 = "SELECT K.日付, H.費目名, K.メモ, K.入金額, K.出金額
				FROM 家計簿 as K
					INNER JOIN 費目 as H ON K.費目id = H.id
				WHERE 費目id = :himoku_id";
        $stt2 = $db2->prepare($sql2);
        $stt2->bindValue(':himoku_id', $_GET['himoku']);
        $stt2->execute();
    } catch (PDOException $e) {
        die('エラーメッセージ:' . $e->getMessage());
    }
}
//
// $db = getDb();
// $sql = 'SELECT id, 日付, 費目id, メモ, 入金額, 出金額 from 家計簿 where';
// $stt = $db->prepare($sql);
// $stt->bindValue();
// $stt->execute();

// if($row = $stt->fetch(PDO::FETCH_ASSOC)){
//     $id = $row['id'];
//     $date = $row['日付'];
//     $himoku_id = $row['費目id'];
//     $memo = $row['メモ'];
//     $income = $row['入金額'];
//     $outcome = $row['出金額'];
// } else {
//     die ('該当するデータがありません');
// }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>家計簿集計画面：年</title>
</head>
<body>
<h3>家計簿集計画面</h3>
<!-- <form method="get" action="kakeibo_search_year_process.php">
	<select>
		<id="year">
	</select>
</form> -->
<form method="GET" action="">
	<div class="container">
		<label for="himoku">費目</label>
		<select id="himoku" name="himoku">
			<option value="">-- 選択 --</option>
			<?php foreach ($_SESSION['himoku'] as $id => $himokumei) { ?>
				<option value="<?=$id ?>"><?=$himokumei ?></option>
			<?php } ?>
		</select>
	</div>
	<input type="submit" value="検索" />
</form>
<?php if (isset($_GET['himoku']) && $_GET['himoku'] !== '') { ?>
<table border="1">
	<tr><th>日付</th><th>費目名</th><th>メモ</th><th>入金額</th><th>出金額</th></tr>
	<?php while ($row2 = $stt2->fetch(PDO::FETCH_ASSOC)) { ?>
		<tr>
			<td><?=$row2['日付'] ?></td>
			<td><?=$row2['費目名'] ?></td>
			<td><?=$row2['メモ'] ?></td>
			<td><?=$row2['入金額'] ?></td>
			<td><?=$row2['出金額'] ?></td>
		</tr>
	<?php } ?>

	</table>
<?php } ?>

</body>
</html>