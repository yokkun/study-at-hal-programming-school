<?php 
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>費目登録</title>
	</head>
	<body>
		<a href="../index.php">ホームへ戻る</a>
		<h3>費目登録</h3>
		<ul style='color:red;'>
		<?php 
		if(isset($_SESSION['errors'])){
		    foreach($_SESSION['errors'] as $error){
		?>
		        <li><?=$error ?></li>
		 <?php
		    }
		    unset($_SESSION['errors']);
		}
		?>
		</ul>
		<form method="POST" action="himoku_insert_process.php">
			<div class="container">
				<label for="name">費目名：</label><br />
				<input type="text" id="name" name="himoku_name" size="30" 
				value="<?=$_SESSION['himoku_name']?>" />
			</div>
			<div class="container">
				<label>入出金区分</label><br />
				<?php 
				    $kubuns = ['1'=>'入金','2'=>'出金'];
				    foreach($kubuns as $kubun_code => $kubun_name){
				?>
				<label><input type="radio" name="kubun" value="<?=$kubun_code?>" 
				<?=$kubun_code == $_SESSION['kubun'] ? 'checked' : ''?> />
				<?=$kubun_name?></label>
				<?php    
				}
				?>
				<!-- 
				<label><input type="radio" name="kubun" value="1">入金</label>
				<label><input type="radio" name="kubun" value="2">出金</label>
				-->
			</div>
			<div class="container">
				<label>備考</label><br />
				<textarea name="memo" rows="5" cols="30"></textarea>
			</div>
			<input type="submit" value="登録" />
		</form>
	</body>
</html>