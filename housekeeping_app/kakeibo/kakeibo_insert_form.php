<?php
require_once '../Encode.php';
require_once '../DbManager.php';

session_start();

try {
    $db = getDb();
    $sql = "SELECT id, 費目名
            FROM 費目 
            ORDER BY id";
    $stt = $db->prepare($sql);
    $stt->execute();
} catch (PDOException $e){
    die ("エラーメッセージ：" . $e->getMessage());
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>家計簿登録</title>
	</head>
	<body>
		<a href="../index.php">ホームへ戻る</a>
		<a href="index.php">家計簿メニューへ戻る</a>
		<h3>家計簿登録</h3>
		
		<p style="color:blue;">
		<?php 
		if(isset($_SESSION['message'])){
		    print($_SESSION['message']);
		    unset($_SESSION['message']);
		}
		?>
		</p>
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
		<form method="POST" action="kakeibo_insert_process.php">
			<div class="container">
				<label for="kakeibo_date">日付：</label><br />
				<input type="date" id="kakeibo_date" name="kakeibo_date" size="30" value="<?=$_SESSION['kakeibo_date']?>" />
			</div>
			<div class="container">
				<label for="himoku">費目：</label><br />
				<select name="himoku_id" id="himoku_id">
				<option value="">選択</option>
				<?php
				while ($row = $stt->fetch(PDO::FETCH_ASSOC)){ //association=連想配列として返す
				?>
				<option value="<?=$row['id']?>" <?=($row['id'] == $_SESSION['himoku_id'] ? 'selected' : '')?> ><?=$row['費目名']?></option>
				<?php    
				} 
				?>
				</select>
			</div>
			
			<div class="container">
				<label for="memo">メモ：</label><br />
				<input type="text" id="memo" name="memo" size="30" 
				value="<?=$_SESSION['memo']?>" />
			</div>
			<div class="container">
				<label for="income">入金額：</label><br />
				<input type="text" id="income" name="income" size="30" 
				value="<?=$_SESSION['income']?>" />
			</div>
			<div class="container">
				<label for="outcome">出金額：</label><br />
				<input type="text" id="outcome" name="outcome" size="30" 
				value="<?=$_SESSION['outcome']?>" />
			</div>

			<input type="submit" value="登録" />
		</form>
	</body>
</html>