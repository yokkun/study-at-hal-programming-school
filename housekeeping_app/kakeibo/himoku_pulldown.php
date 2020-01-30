<?php
// require_once '../DbManager.php';
// require_once '../Encode.php';

// session_start();

// if(!isset($_SESSION['himoku'])) {
//     try {
//         $db = getDb();
//         $sql = 'SELECT id, 費目名 FROM 費目 ORDER BY id';
//         $stt = $db->prepare($sql);
//         $stt->execute();
        
//         $himokus = [];
//         // $himokus = [1 => '食費', 2 => '給料', ... ]
//         while ($row = $stt->fetch(PDO::FETCH_ASSOC)) {
//             $himokus[$row['id']] = $row['費目名'];
//         }
//         $_SESSION['himokus'] = $himokus;
        
        
//     } catch (PDOException $e) {
//         die('エラーメッセージ:' . $e->getMessage());
//     }
// }
// ?>
<!--  <!DOCTYPE html> -->
<!-- <html> -->
<!-- <head> -->
<!-- 	<meta charset="UTF-8" /> -->
<!-- 	<title>費目プルダウンメニュー</title> -->
<!-- </head> -->
<!-- <body> -->
<!-- 	<select name="himoku"> -->
<!-- 		<option value="">--選択--</option> -->
<?php // foreach ($_SESSION['himokus'] as $code => $himoku_name) { ?>
<!--		<option value="<?//=$code ?>"><?//=$himoku_name ?></option> -->
<?php // } ?>
<!-- 	</select> -->
<!-- </body> -->
<!-- </html> -->

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
    </table>
</body>
</html>
