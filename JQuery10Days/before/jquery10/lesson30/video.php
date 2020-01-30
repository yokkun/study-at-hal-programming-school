<?php
  // 入出力の文字コードをUTF-8に設定
mb_http_output('UTF-8');
mb_internal_encoding('UTF-8');
  // エラー発生時はHTTPエラーステータスを出力
set_error_handler(function(){ header('HTTP/1.1 503 Service Unavailable'); });
header('Content-Type: text/xml;charset=UTF-8');

$num = 20;  // 一度に取得する最大結果件数
$page = $_REQUEST['page'] ?: 1; // ページ番号

  // YouTube Data APIにアクセスするためのパラメータを定義
$params =array(
  'v' => 2,
  'q' => $_REQUEST['keywd'],
  'alt' => 'atom',
  'start-index' => ($page - 1)  * $num + 1,
  'max-results' => $num
);

  // YouTube Data APIにアクセスするためのURLを準備
$url = 'http://gdata.youtube.com/feeds/api/videos?'.http_build_query($params, '', '&');
  // YouTube Data APIにアクセスし、結果を出力
print(file_get_contents($url));
