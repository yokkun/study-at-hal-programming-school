<?php
//002
//独習PHP第二版より

function getDb(){
    $dsn = 'mysql:dbname=housekeeping;host=localhost;charset=utf8';
    $usr = 'root';
    $passwd = 'root';
    
    try{
        //データベースへの接続を確立
        $db = new PDO($dsn, $usr, $passwd);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // データベース接続時に使用する文字コードをutf8に設定
        $db->exec('SET NAMES utf8');
    } catch (PDOException $e) {
        die("接続エラー:{$e->getMessage()}");
    } return $db;
}