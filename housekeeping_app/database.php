<?php
try{
    $db = new PDO(
        'mysql:host=localhost; dbname=housekeeping','root','root');
    print 'databaseに接続できました。';
    $db = null;
} catch (PDOException $e) {
    die('エラーメッセージ:'. $e->getMessage());
}