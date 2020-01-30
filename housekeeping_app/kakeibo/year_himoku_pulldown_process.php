<?php
require_once '../Encode.php';
require_once '../DbManager.php';

session_start();

//$_SESSION['id'] = e($_POST['id']);
//$_SESSION['himoku_id'] = e($_POST['himoku_id']);
$_SESSION['year'] = e($_GET['year']);
$_SESSION['himoku'] = e($_GET['himoku']);

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
if(trim($_SESSION['himoku']) === ""){
    $errors[] = '費目が選択されていません';
} 


if (count ($errors) > 0){
    $_SESSION['errors'] = $errors;
    header('Location: http://' . $_SERVER['HTTP_HOST'] .dirname($_SERVER['PHP_SELF']) . '/year_himoku_pulldown.php');
} else { 
    try {
        $db = getDb();
        $sql = 'select month(日付) as 月, sum(入金額 + 出金額) as 月合計
        from 家計簿
        where year(日付)=:year
        and 費目id=:himoku_id
        group by month(日付)
        order by month(日付)';
        
        $stt = $db->prepare($sql);
        
        $stt->bindValue(':year', $_SESSION['year']);
        $stt->bindValue(':himoku_id', $_SESSION['himoku']);
        //$stt->bindValue(':month', $_SESSION['month']);
        //$stt->bindValue(':sum', $_SESSION['sum']);
        $stt->execute();
        
        $months = [];
        while($row_month = $stt->fetch(PDO::FETCH_ASSOC)){
            $months[$row_month['月']] = $row_month['月合計']; //連想配列に入れて渡す
        }
        $_SESSION['months'] = $months; //連想配列をセッションに埋め込む        
        
        //unset ($_SESSION['himoku_id']);
        unset ($_SESSION['year']);
        //unset ($_SESSION['date']);
        unset ($_SESSION['himoku']);
        //unset ($_SESSION['month']);
        //unset ($_SESSION['sum']);
        
    } catch (PDOException $e){
        die ('エラーメッセージ' . $e->getMessage());
    }
    header('Location: http://' . $_SERVER['HTTP_HOST'] .dirname($_SERVER['PHP_SELF']) . '/year_himoku_pulldown.php');
}