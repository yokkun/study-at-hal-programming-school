<?php
require_once '../DbManager.php';
require_once '../Encode.php';

session_start();

if(!isset($_SESSION['himoku']) || !isset($_SESSION['years'])) {
	try {
		$db = getDb();
		$sql_himoku = 'SELECT id, 費目名 FROM 費目 ORDER BY id';
		$stt_himoku = $db->prepare($sql_himoku);
		$stt_himoku->execute();

		$himokus = [];
		// $himokus = [1 => '食費', 2 => '給料', ... ]
		while ($row_himoku = $stt_himoku->fetch(PDO::FETCH_ASSOC)) {
			$himokus[$row_himoku['id']] = $row_himoku['費目名'];
		}
		$_SESSION['himokus'] = $himokus;

		$sql_year = 'SELECT distinct year(日付) as 年 FROM 家計簿 ORDER BY year(日付) DESC';
		$stt_year = $db->prepare($sql_year);
		$stt_year->execute();
		$years = [];
		while ($row_year = $stt_year->fetch(PDO::FETCH_ASSOC)) {
			$years[] = $row_year['年'];
		}
	} catch (PDOException $e) {
		die('エラーメッセージ:' . $e->getMessage());
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>年・費目指定集計画面</title>
</head>
<body>
	<h2>年・費目指定集計画面</h2>
	<form method="GET" action="">
	<select name="year">
		<option value="">--選択--</option>
<?php foreach($years as $year) { ?>
		<option value="<?=$year ?>"><?=$year ?></option>
<?php } ?>
	</select>
	<select name="himoku">
		<option value="">--選択--</option>
<?php foreach ($_SESSION['himokus'] as $code => $himoku_name) { ?>
		<option value="<?=$code ?>"><?=$himoku_name ?></option>
<?php } ?>
	</select>
	<input type="submit" value="集計" />
	</form>
	<hr>
	<table>
		<tr><?php foreach ($years as $year){ ?>
		    <td><?=$year ?></td>
		<?php } ?></tr>

	</table>
</body>
</html>



<?php // 
// require_once '../Encode.php';
// require_once '../DbManager.php';

// session_start();

// try {
//     $db = getDb();
//     $sql = "SELECT distinct year(日付) as 年 FROM 家計簿 order by 年 asc";
//     $stt = $db -> prepare($sql);
//     $stt->execute();
    
//     $date = [];
//     while($row = $stt->fetch(PDO::FETCH_ASSOC)){
//         $date[] = $row['年'];
//     } 
//     $_SESSION['date'] = $date;
// } catch(PDOException $e) {
//     die ('エラーメッセージ：' . $e->getMessage());
// }

// if (isset($_GET['date']) && $_GET['date'] !==''){
//     try {
//         $db2 = getDb();
//         /*$sql2 = "SELECT k.id, h.費目名, k.日付, k.入金額, k.出金額
//                 FROM 家計簿 as K
//                 INNER JOIN 費目 as H on K.費目id = H.id
//                 WHERE year(日付) = :year";*/
//         $sql3 = "select month(日付), sum(入金額 + 出金額) as 月合計
//         from 家計簿
//         where year(日付) = :year
//         and 費目id = :himoku_id
//         group by month(日付)
//         order by month(日付);";
//         $stt2 = $db2->prepare($sql3);
//         $stt2->bindValue(':year', $_GET['date']);
//         $stt2->bindValue(':himoku_id', $_GET['himoku_id']);
//         $stt2->execute();
        
//     } catch (PDOException $e){
//         die ('エラーメッセージ：' . $e->getMessage());
//     }
// }
// ?>
<!-- <!DOCTYPE html> -->
<!-- <html> -->
<!-- <head> -->
<!-- <meta charset="UTF-8"> -->
<!-- <title>家計簿集計画面：年</title> -->
<!-- </head> -->
<!-- <body> -->
<!-- <h3>家計簿集計画面：年</h3> -->
<!-- <form method="get" action=""> -->
<!-- 	<div class="container"> -->
<!-- 		<label for="date">年</label> -->
<!-- 		<select id="date" name="date"> -->
<!-- 			<option value="">-- 選択 --</option> -->
			<?php //foreach ($_SESSION['date'] as $year) { ?>
<!--  				<option value="<?=$year ?>"><?=$year ?></option> -->
			<?php //} ?>
<!-- 		</select> -->
<!-- 	</div> -->
<!-- </form> -->
<!-- <input type="submit" value="検索" /> -->

<!-- <table border="1"> -->
<!-- 	<tr> -->
<?php // 
// if (isset($_GET['date']) && $_GET['date'] !== ''){
//     while ($row2 = $stt2->fetch(PDO::FETCH_ASSOC)){ ?>
<!--     <tr> -->
<!--      	<td><?=$row2['月合計']?></td> -->
<!--     </tr> -->
<?php // 
//     }
// }?>
	
<!-- </table> -->
<!-- </body> -->
<!-- </html> -->