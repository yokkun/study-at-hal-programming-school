<?php
require_once '../DbManager.php';
require_once '../Encode.php';
session_start();
//if (!isset($_SESSION['date'])) {
	try {
		$db = getDb();
		$sql = "SELECT distinct year(日付) as 年 FROM 家計簿 order by 年 desc"; //distinct year 関数で dateの中の年だけを取得するsql文
		$stt = $db->prepare($sql);
		$stt->execute();

		$date = [];
		while($row = $stt->fetch(PDO::FETCH_ASSOC)) { //fetch_assoc assoc: 
			$date[] = $row['年'];//年を配列の末尾に追加する
		}
		$_SESSION['date'] = $date;
	} catch (PDOException $e) {
		die('エラーメッセージ:' . $e->getMessage());
	}
//}

if (isset($_GET['date']) && $_GET['date'] !== '') {
	try {
		$db2 = getDb();
		$sql2 = "SELECT K.日付, H.費目名, K.メモ, K.入金額, K.出金額
				FROM 家計簿 as K
					INNER JOIN 費目 as H ON K.費目id = H.id
				WHERE year(日付) = :year";
		$stt2 = $db2->prepare($sql2);
		$stt2->bindValue(':year', $_GET['date']);
		$stt2->execute();
	} catch (PDOException $e) {
		die('エラーメッセージ:' . $e->getMessage());
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>家計簿集計画面：年</title>
</head>
<body>
<h3>家計簿集計画面：年</h3>
<!-- <form method="get" action="kakeibo_search_year_process.php">
	<select>
		<id="year">
	</select>
</form> -->
<form method="GET" action="">
	<div class="container">
		<label for="date">年</label>
		<select id="date" name="date">
			<option value="">-- 選択 --</option>
			<?php foreach ($_SESSION['date'] as $year) { ?>
				<option value="<?=$year ?>"><?=$year ?></option>
			<?php } ?>
		</select>
	</div>
	<input type="submit" value="検索" />
</form>
<?php if (isset($_GET['date']) && $_GET['date'] !== '') { ?>
<table border="1">
	<tr><th>日付</th><th>費目名</th><th>メモ</th><th>入金額</th><th>出金額</th><th>更新</th><th>削除</th></tr>
	<?php while ($row2 = $stt2->fetch(PDO::FETCH_ASSOC)) { ?>
		<tr>
			<td><?=$row2['日付'] ?></td>
			<td><?=$row2['費目名'] ?></td>
			<td><?=$row2['メモ'] ?></td>
			<td><?=$row2['入金額'] ?></td>
			<td><?=$row2['出金額'] ?></td>
			<td><a href="kakeibo_update_form.php?id=<?=$row2['id']?>">更新</a></td>
			<td><a href="kakeibo_delete_form.php?id=<?=$row2['id']?>">削除</a></td>
		</tr>
	<?php } ?>

	</table>
<?php } ?>

</body>
</html>