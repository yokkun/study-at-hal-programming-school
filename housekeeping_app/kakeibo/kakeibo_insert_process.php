<?php
require_once '../Encode.php';
require_once '../DbManager.php';

session_start();

$_SESSION['kakeibo_date'] = e($_POST['kakeibo_date']);
$_SESSION['himoku_id'] = e($_POST['himoku_id']);
$_SESSION['memo'] = e($_POST['memo']);
$_SESSION['income'] = e($_POST['income']);
$_SESSION['outcome'] = e($_POST['outcome']);

/* 入力チェック*/
$errors = array();

foreach($_SESSION as $key => $value){
    if(is_array($value)){
        $value = implode('', $value);
    }
    if(!mb_check_encoding($value)){
        $errors[] = '文字コードに誤りがあります。';
        break;
    }
}

//trim関数でスペースを削除しても空だったらエラーにする
if(trim($_SESSION['kakeibo_date']) === ''){
    $errors[] = '日付は必ず入力してください。';
}
if(trim($_SESSION['himoku_id']) === ''){
    $errors[] = '費目は必ず選択してください。';
}

if(mb_strlen($_SESSION['memo']) > 255){
    $errors[] = 'メモは255文字以内で入力してください。';
}
/*if($_SESSION['income'] < 0 & $_SESSION['outcome'] < 0){
    $errors[] = '入金額と出金額は、整数で入力してください。';
}*/
try{
    $db = getDb();
    $sql = "SELECT 入出金区分 from 費目 where id=:himoku_id";
    $stt = $db->prepare($sql);
    $stt->bindValue(':himoku_id', $_SESSION['himoku_id']);
    
    $stt->execute();
    
    $row = $stt->fetch(PDO::FETCH_ASSOC);
    $nyushutsukinkubun = $row['入出金区分'];
} catch (PDOException $e){
    die('エラーメッセージ:' . $e->getMessage());
}
        
$_SESSION['income'] = trim($_SESSION['income']) !== ''?  trim($_SESSION['income']) - 0 : 0; 
$_SESSION['outcome'] = trim($_SESSION['outcome']) !== ''?  trim($_SESSION['outcome']) - 0 : 0;

if($_SESSION['income'] < 0 || $_SESSION['outcome'] < 0){
    $errors[] = '入金額、出金額に負の金額は入力できません';
}
if($_SESSION['income'] === 0 && $_SESSION['outcome'] === 0){
    $errors[] = '入金額、出金額のいずれかに正の金額を入力してください';
}
if($_SESSION['income'] > 0 && $_SESSION['outcome'] > 0){
    $errors[] = '入金額、出金額のいずれかに0を入力してください';
}
if($nyushutsukinkubun == 1 && $_SESSION['income'] === 0 && $_SESSION['outcome'] !== 0){
    $errors[] = '入金額に正の金額、出金額に0を入力してください';
}
if($nyushutsukinkubun == 2 && $_SESSION['income'] !== 0 && $_SESSION['outcome'] === 0){
    $errors[] = '出金額に正の金額、出金額に0を入力してください';
}

if(count($errors) > 0){
    $_SESSION['errors'] = $errors;
} else {
    try {
        $db = getDb();
        $sql = "INSERT INTO 家計簿(日付,費目id,メモ,入金額,出金額) VALUES(:kakeibo_date, :himoku_id, :memo, :income, :outcome)";
        $stt=$db->prepare($sql);
        $stt->bindValue(':kakeibo_date', $_SESSION['kakeibo_date']);
        $stt->bindValue(':himoku_id', $_SESSION['himoku_id']);
        $stt->bindValue(':memo', $_SESSION['memo']);
        $stt->bindValue(':income', $_SESSION['income']);
        $stt->bindValue(':outcome', $_SESSION['outcome']);
        
        $stt->execute();
        
        unset ($_SESSION['kakeibo_date']);
        unset ($_SESSION['himoku_id']);
        unset ($_SESSION['memo']);
        unset ($_SESSION['income']);
        unset ($_SESSION['outcome']);
        
        $_SESSION['message'] = "登録完了しました。";
    } catch (PDOException $e){
        die('エラーメッセージ：' . $e->getMessage());
    }
}

header('Location: http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/kakeibo_insert_form.php');