<?php 
    session_start();    
    unset ($_SESSION['himoku']);
    unset ($_SESSION['years']);
    
?>
<ul>
    <li>
    	家計簿
    	<ul>
    		<li><a href="./kakeibo/kakeibo_insert_form.php">登録</a></li>
    		<li><a href="./kakeibo/kakeibolist_for_update.php">更新・削除用一覧</a></li>
    		<li><a href="./kakeibo/index.php">集計</a></li>
    	</ul>
    	
    </li>
	<li>
		費目テーブル管理
		<ul>
			<li><a href="./himoku/himoku_insert_form.php">登録</a></li>
			<li><a href="./himoku/list_for_update.php">更新・削除用一覧</a></li>
			
		</ul>
	</li>
</ul>
<!-- 004 -->