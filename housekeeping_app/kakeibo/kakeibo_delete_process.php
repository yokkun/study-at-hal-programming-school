<?php
require_once '../Encode.php';
require_once '../DbManager.php';

session_start();

if(isset ($_POST['ok'])){
    try {
        $db = getDb();
        $sql = 'delete from 家計簿 where id = :id';
        $stt = $db->prepare($sql);
        $stt->bindValue(':id', e($_POST['id']));
        
        $stt->execute();
        
        $_SESSION['message'] = "削除完了しました。";
    } catch (PDOException $e){
        die ('メッセージ：' . $e -> getMessage());
    }
}
header ('Location: http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER ['PHP_SELF']) . '/kakeibolist_for_update.php');