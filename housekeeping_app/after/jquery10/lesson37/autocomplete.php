<?php
mb_http_output('UTF-8');
mb_internal_encoding('UTF-8');

$keywords = array(
  'append(c)' => '要素cをカレント要素の子要素末尾に追加',
  'append(fn)' => '関数の結果を、カレント要素の子要素末尾に追加',
  'prepend(c)' => '要素cを、カレント要素の子要素先頭に追加',
  'prepend(fn)' => '関数の結果を、カレント要素の子要素先頭に追加',
  'appendTo(c)' => 'カレント要素を、要素cの子要素末尾に追加（appendの逆）',
  'prependTo(c)' => 'カレント要素を、要素cの子要素先頭に追加（prependの逆）',
  'after(c)' => '要素cをカレント要素の後ろに追加',
  'after(fn)' => '関数の結果をカレント要素の後ろに追加',
  'before(c)' => '要素cをカレント要素の前に追加',
  'before(fn)' => '関数の結果をカレント要素の前に追加',
  'insertAfter(c)' => 'カレント要素を要素cの後ろに追加（afterの逆）',
  'insertBefore(c)' => 'カレント要素を要素cの前に追加（beforeの逆）',
  'wrap(html｜elem)' => 'カレント要素を指定したHTML文字列／要素で囲む',
  'wrapAll(html｜elem)' => 'カレント要素全体を指定したHTML文字列／要素で囲む',
  'wrapInner(html｜elem)' => 'カレント要素の中身を指定したHTML文字列／要素で囲む',
  'wrapInner(fn)' => 'カレント要素の中身を関数の結果で囲む',
  'unwrap()' => 'カレント要素を囲んでいる要素を取る',
  'replaceWith(c)' => 'カレント要素を要素cで置き換え',
  'replaceWith(fn)' => 'カレント要素を関数fnの結果で置き換え',
  'replaceAll(c)' => 'カレント要素で、要素cを置き換え',
  'empty()' => 'カレント要素配下のすべてのノードをクリア',
  'remove([exp])' => 'カレント要素を削除（引数expでフィルタリングも可）',
  'detach([exp])' => 'カレント要素をイベントリスナを維持したまま破棄（引数expでフィルタリングも可）'
);

array_walk(
  $keywords,
  function($value, $key) {
    global $result;
    if (mb_strpos(strtolower($key), strtolower($_GET['term'])) === 0) {
      $result[] = array('label' => $key, 'value' => $key, 'details' => $value);
    }
  });

print(json_encode($result));
