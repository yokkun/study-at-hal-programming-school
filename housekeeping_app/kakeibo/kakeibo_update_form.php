<?php
require_once '../Encode.php';
require_once '../DbManager.php';

session_start();

if ($_SESSION['errors']) {
    $id = $_SESSION['id'];
    $date = $_SESSION['kakeibo_date'];
    $himoku_id = $_SESSION['himoku_id'];
    $memo = $_SESSION['memo'];
    $income = $_SESSION['income'];
    $outcome = $_SESSION['outcome'];
} else {
    try {
        $db = getDb();
        $sql = "SELECT id, 日付, 費目id, メモ, 入金額, 出金額
        FROM 家計簿
        where id = :id";
        $stt = $db->prepare($sql);
        $stt->bindValue(':id', e($_GET['id']));
        $stt->execute();

        if ($row = $stt->fetch(PDO::FETCH_ASSOC)) {
            $id = $row['id'];
            $date = $row['日付'];
            $himoku_id = $row['費目id'];
            $memo = $row['メモ'];
            $income = $row['入金額'];
            $outcome = $row['出金額'];
        } else {
            die('該当する項目がありません。');
        }
    } catch (PDOException $e) {
        die("エラーメッセージ" . $e->getMessage());
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>費目 編集・削除</title>
</head>
<body>
	<a href="../index.php">ホームに戻る</a>
	<a href="index.php">家計簿メニューへ戻る</a>
	<h3>家計簿 編集・削除</h3>
	<ul style='color: red'>
        <?php
        if (isset($_SESSION['errors'])) {
            foreach ($_SESSION['errors'] as $error) {
                ?>
        	<li><?=$error?></li>
        <?php
            }
            unset($_SESSION['errors']);
        }
        /*
         * $sql2 = "SELECT id, 費目名
         * from 費目
         * ORDER BY id";
         * $stt2 = $db->prepare($sql2);
         * $stt2->execute();
         */
        ?>
        </ul>
        
<?php //if ($row = $stt2->fetch()){ ?>
        
	<form method="POST" action="kakeibo_update_process.php">
		<input type="hidden" name="id" value="<?=$id?>" />
		<div class="container">
			<label for="kakeibo_date">日付：</label> <input type="date"
				id="kakeibo_date" name="kakeibo_date" size="30" value="<?=$date?>" />
		</div>

		<div class="container">
			<label for="himoku_id">費目名：</label><br>
			<select name="himoku_id" id="hiomoku_id">
				<option value="">選択：</option>
            		<?php
            		try{
            		    $db=getDb();
            		    $sql2 = "SELECT id, 費目名
                        from 費目
                        ORDER BY id";
            		    $stt2 = $db->prepare($sql2);
            		    //$stt2->bindValue(':id',$_GET('id'));
            		    $stt2->execute();
            		
            ?>
            		<?php
                         while ($row = $stt2->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                        		    <option value="<?=$row['id']?>"
                				<?=$row['id'] === $himoku_id ? 'selected' : ''?>><?=$row['費目名']?></option>
                        		<?php
                         }
            		} catch (PDOException $e){
            		    die ('エラーメッセージ：' . $e->getMessage());
            		}
            ?>
            </select>
		</div>
		<div class="container">
			<label for="memo">メモ：</label><br> <input type="text" id="memo"
				name="memo" size="30" value="<?=$memo?>" />
		</div>
		<div class="container">
			<label for="income">入金額：</label><br> <input type="text" id="income"
				name="income" size="30" value="<?=$income?>" />
		</div>
		<div class="container">
			<label for="outcome">出金額：</label><br> <input type="text" id="outcome"
				name="outcome" size="30" value="<?=$outcome?>">
		</div>
		<input type="submit" value="更新">
	</form>
<?php //} 
//else {
//    print ('該当するデータがありませんでした。');
//}
?>
</body>
</html>