<?php
//003データベース接続テスト。詳細エラーを表示（テキストにない内容）
require_once 'DbManager.php';

try {
    $db = getDb();
    print('データベースに接続できました（関数バージョン）');
    $db = null;
} catch (PDOException $e){
    die('エラーメッセージ：' . $e->getMessage());    
}