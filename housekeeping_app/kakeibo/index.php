<?php 
    session_start();    
    unset ($_SESSION['himoku']);
    unset ($_SESSION['year']);
    
?>
<ul>家計簿アプリメニュー
	<li><a href="kakeibo_insert_form.php">家計簿登録</a></li>
	<li><a href="kakeibolist.php">家計簿一覧</a></li>
	<li><a href="kakeibolist_for_update.php">家計簿一覧更新用</a></li>
</ul>
<ul>
	<!-- <li><a href="kakeibo_search_by_year_himoku.php">家計簿集計（年指定・費目指定）</a></li> -->
	
	<li><a href="kakeibo_search_by_year.php">家計簿集計（年指定）</a></li>
	<li><a href="kakeibo_search_by_himoku.php">家計簿集計（費目指定）</a></li>
	<li><a href="year_himoku_pulldown.php">家計簿集計（年指定・費目指定）</a></li>
	
	<li><a href="kakeibo_summary_month_himoku.php">家計簿集計テーブル表示</a></li>
</ul>