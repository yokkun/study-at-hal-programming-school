<?php
require_once '../DbManager.php';
require_once '../Encode.php';

session_start();

if(!isset($_SESSION['himokus']) || !isset($_SESSION['years'])) {
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
        
        $_SESSION['years'] = $years;
        
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
    	<a href="index.php">家計簿メニューへ戻る</a>
    <ul style="color:red;">
    <?php 
    if (isset($_SESSION['errors'])){
        foreach ($_SESSION['errors'] as $error){ ?>
            <li><?=$error?></li>
    <?php 
        }
        unset ($_SESSION['errors']);
    }
    ?>
    </ul>
    <form method="GET" action="year_himoku_pulldown_process.php">
    <select name="year">
         <option value="">--選択--</option>
	<?php foreach($_SESSION['years'] as $year) { ?>
         <option value="<?=$year ?>" <?=($year == $_SESSION['year'] ? 'selected' : '') ?>><?=$year ?></option>
	<?php } ?>
    </select>
    <select name="himoku">
         <option value="">--選択--</option>
	<?php foreach ($_SESSION['himokus'] as $code => $himoku_name) { ?>
         <option value="<?=$code ?>" <?=($code == $_SESSION['himoku'] ? 'selected' : '') ?>><?=$himoku_name ?></option>
	<?php } ?>
    </select>
    <input type="submit" value="集計" />
    </form>
    <hr>
    
    <?php 
    if (isset ($_SESSION['months']) && ($_SESSION['months']) !== ''){

        ?>
        <table border="1">
        <tr>
        <?php 
        for ($i=1; $i <= 12; $i++){
            print ('<th>'. $i . '月</th>');
        }
        print('<th>月合計</th></tr>')
        ?>
        <tr>
        <?php 
        $month_total = 0;
        for($i=1; $i<=12; $i++){
            if(isset($_SESSION['months'][$i])){
                print('<td>'. $_SESSION['months'][$i] . '</td>');
                $month_total += $_SESSION['months'][$i]; //12回分加算して月合計を求める
            } else {
                print('<td>0</td>');
            }
        }
        ?>
                <td><?=$month_total ?></td>
        </tr>
    <?php 
    }
    ?>
    	</tr>    
    		    	
    		    </tr>
    <?php 
    unset ($_SESSION['months']);
    ?>
    </table>
</body>
</html>
