<?php
require_once '../DbManager.php';
require_once '../Encode.php';

session_start();

if(!isset($_SESSION['himoku'])) {
    try {
        $db = getDb();
        $sql = 'SELECT id, 費目名 FROM 費目 ORDER BY id';
        $stt = $db->prepare($sql);
        $stt->execute();
        
        $himokus = [];
        // $himokus = [1 => '食費', 2 => '給料', ... ]
        while ($row = $stt->fetch(PDO::FETCH_ASSOC)) {
            $himokus[$row['id']] = $row['費目名'];
        }
        $_SESSION['himokus'] = $himokus;
    } catch (PDOException $e) {
        die('エラーメッセージ:' . $e->getMessage());
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>費目プルダウンメニュー</title>
</head>
<body>
	<select name="himoku">
		<option value="">--選択--</option>
<?php foreach ($_SESSION['himokus'] as $code => $himoku_name) { ?>
		<option value="<?=$code ?>"><?=$himoku_name ?></option>
<?php } ?>
	</select>
</body>
</html>