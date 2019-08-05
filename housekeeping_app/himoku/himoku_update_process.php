<?php
require_once '../Encode.php';
require_once '../DbManager.php';

session_start();

$_SESSION['himoku_name'] = e($_POST['himoku_name']);
$_SESSION['kubun'] = e($_POST['kubun']);
$_SESSION['memo'] = e($_POST ['memo']);
$_SESSION['id'] = e($_POST ['id']);//idを追加

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
if(trim($_SESSION['himoku_name']) === ''){
    $errors[] = '項目名は必須入力です。';
}

if(mb_strlen($_SESSION['himoku_name']) > 30){
    $errors[] = '費目名は30文字以内で入力してください。';
}
if(!$_SESSION['kubun']){
    $errors[] = '区分は必須チェックです。';
}
if(mb_strlen($_SESSION['memo']) > 255){
    $errors[] = '備考は255文字以内で入力してください。';
}
if(count($errors) > 0){
    $_SESSION['errors'] = $errors;
    header('Location: http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/himoku_update_form.php');
} else {
    try {
        $db = getDb();
        //insert_processをupdate文へ変更
        //$sql = "INSERT INTO 費目(費目名,入出金区分,備考) VALUES(:himoku_name, :kubun, :memo)";
        $sql = "UPDATE 費目
			    SET 費目名 = :himoku_name,
					入出金区分 = :kubun,
					備考 = :memo
				WHERE id = :id"; //id
        $stt=$db->prepare($sql);
        $stt->bindValue(':himoku_name', $_SESSION['himoku_name']);//bindValueと書いて更新しなければSQL injectionのリスクがある
        $stt->bindValue(':kubun', $_SESSION['kubun']);
        $stt->bindValue(':memo', $_SESSION['memo']);
        $stt->bindValue(':id',$_SESSION['id']);//id追加
        
        $stt->execute();
                
        unset ($_SESSION['himoku_name']);
        unset ($_SESSION['kubun']);
        unset ($_SESSION['memo']);
        unset ($_SESSION['id']);
        
        $_SESSION['message'] = "更新完了しました。";
        
        //成功したら成功メッセージを出して一覧に戻り、失敗したら費目編集フォームに戻る
        header('Location: http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/list_for_update.php');
    } catch (PDOException $e){
        die('エラーメッセージ：' . $e->getMessage());
    }
}
