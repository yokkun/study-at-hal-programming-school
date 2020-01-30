<?php
require_once '../DbManager.php';
header('Content-Type: application/json;charset=UTF-8');
try {
    $db = getDb();
    $sql = "SELECT H.費目名, sum(K.出金額) as 出金合計
			FROM 家計簿 AS K
				INNER JOIN 費目 AS H ON K.費目id = H.id
			WHERE year(日付) = 2019 and month(日付) = 10
				and H.入出金区分 = '出金'
			GROUP BY H.費目名";
    $stt = $db->prepare($sql);
    $stt->execute();
    $result = [];
    while($row = $stt->fetch(PDO::FETCH_ASSOC)) {
        $item = [];
        $item['name'] = $row['費目名'];
        $item['value'] = $row['出金合計'];
        $result[] = $item;
    }
    print(json_encode($result));
} catch (PDOException $e) {
    die('エラーメッセージ:' . $e->getMessage());
}
