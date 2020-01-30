<?php
require_once '../Encode.php';
require_once '../DbManager.php';

session_start();

//$_SESSION['id'] = e($_POST['id']);
//$_SESSION['himoku_id'] = e($_POST['himoku_id']);
$_SESSION['year'] = e($_GET['year']);
//$_SESSION['himoku'] = e($_GET['himoku']);

$errors = array();

foreach($_SESSION as $key=>$value){
    if(is_array($value)){
        $value = implode('', $value);
    }
    if(!mb_check_encoding($value)){
        $errors[] = '文字コードに誤りがあります。';
        break;
    }
}

if(trim($_SESSION['year']) === ""){
    $errors[] = '年が選択されていません';
}
// if(trim($_SESSION['himoku']) === ""){
//     $errors[] = '費目が選択されていません';
// }


if (count ($errors) > 0){
    $_SESSION['errors'] = $errors;
    header('Location: http://' . $_SERVER['HTTP_HOST'] .dirname($_SERVER['PHP_SELF']) . '/kakeibo_summary_month_himoku.php');
} else {
    try {
        $db = getDb();
        /*$sql = 'select month(日付) as 月, sum(入金額 + 出金額) as 月合計
        from 家計簿
        where year(日付)=:year
        and 費目id=:himoku_id
        group by month(日付)
        order by month(日付)';
        */
        /*$sql2017 = "select H.費目名, month(K.日付) as 月, sum(K.入金額 + K.出金額) as 合計額
                 from 家計簿 as K inner join 費目 as H
                 on K.費目id = H.id
                 where year(K.日付) = 2017
                 group by  H.費目名, month(K.日付)
                 order by H.費目名, month(K.日付)";*/
//         $sql2 = "select H.費目名, month(K.日付) as 月, sum(K.入金額 + K.出金額) as 合計額
//                  from 家計簿 as K inner join 費目 as H
//                  on K.費目id = H.id
//                  where year(K.日付) = :year
//                  group by  H.費目名, month(K.日付)
//                  order by H.費目名, month(K.日付)";
        
        /*$sql2 = 'SELECT k.id, K.month(日付) as 月, H.費目名, K.メモ, K.入金額, K.出金額, sum(入金額+出金額) as 月合計
				FROM 家計簿 as K
					INNER JOIN 費目 as H ON K.費目id = H.id
				WHERE year(日付) = :year
                and 費目id=:himoku_id
                group by month(日付)
                order by month(日付)';
                */
        /* 
         * 以下のような二次元配列を作るSQL文を作成して表示したい。（for文を入れ子で書く）
         * $xxx =
        [
        ['食費' => [1 => 30000, 2=> 27000, .... 12 => 35000 ]],
        ['水道光熱費' => [1 => 30000, 2=> 27000, .... 12 => 35000 ]],
        
        
        ];
        
        foreach ($xxx as $himoku => $monthly_summary) {
            
            
        } */
//         $stt = $db->prepare($sql2);
        
//         $stt->bindValue(':year', $_SESSION['year']);
        //$stt->bindValue(':himoku_id', $_SESSION['himoku']);
        //$stt->bindValue(':month', $_SESSION['month']);
        //$stt->bindValue(':sum', $_SESSION['sum']);
//         $stt->execute();
        
//         $summary = [];
//         while ($row = $stt->fetch(PDO::FETCH_ASSOC)){
//                $summary[$row['費目名']][$row['月']] = $row['合計'];
//         }
//         $_SESSION['summary'] = $summary;
        
        
//         $months = [];
//         while($row_month = $stt->fetch(PDO::FETCH_ASSOC)){
//             $months[$row_month['月']] = $row_month['月合計']; //連想配列に入れて渡す
//         }
//         $_SESSION['months'] = $months; //連想配列をセッションに埋め込む
        
        $summary = [];
        
        foreach ($_SESSION['himokus'] as $himoku){
            $month = [];
            for ($i=1; $i <= 12; $i++) {
                $month[$i] = 0;//最初に0を配列の中に入れておく
            }
            $summary[$himoku] = $month;
        }
        
        $sql1 = "select H.費目名, month(K.日付) as 月, sum(K.入金額 + K.出金額) as 合計額
                 from 家計簿 as K inner join 費目 as H
                 on K.費目id = H.id
                 where year(K.日付) = :year
                 group by  H.費目名, month(K.日付)
                 order by H.費目名, month(K.日付)";
        
        print('<pre>');
        print_r($summary);
        print('</pre>');
        $stt = $db->prepare($sql1);
        
        $stt->bindValue(':year', $_SESSION['year']);
        $stt->execute();
        
        while ($row = $stt->fetch(PDO::FETCH_ASSOC)){
            $summary[$row['費目名']][$row['月']] = $row['合計額']; //費目の中の月
           
        }
        $_SESSION['summary'] = $summary;
        print('<pre>');
        print_r($_SESSION['summary']);
        print('</pre>');

        //unset ($_SESSION['himoku_id']);
        //unset ($_SESSION['year']);
        //unset ($_SESSION['date']);
        //unset ($_SESSION['himoku']);
        //unset ($_SESSION['month']);
        //unset ($_SESSION['sum']);
        
    } catch (PDOException $e){
        die ('エラーメッセージ' . $e->getMessage());
    }
    header('Location: http://' . $_SERVER['HTTP_HOST'] .dirname($_SERVER['PHP_SELF']) . '/kakeibo_summary_month_himoku.php');
}