<?php
require_once '../Encode.php';
require_once '../DbManager.php';

session_start();

//if(!isset($_SESSION['himokus']) || !isset($_SESSION['years'])) {
    try {
        $db = getDb();
        $sql_himoku = 'SELECT id, 費目名, 入出金区分 FROM 費目 ORDER BY id';
        $stt_himoku = $db->prepare($sql_himoku);
        $stt_himoku->execute();
        
        $himokus = [];
        $income_outcome = [];
        // $himokus = [1 => '食費', 2 => '給料', ... ]
        
        while ($row_himoku = $stt_himoku->fetch(PDO::FETCH_ASSOC)) {
            //print_r($row_himoku);
            $himokus[] = $row_himoku['費目名'];
            $income_outcome [$row_himoku['費目名']] = $row_himoku['入出金区分'];
        }
        //print_r($income_outcome);
        //$income_outcome = [ '食費' => 2, '光熱費' => 2, '居住費' => 2, '教養娯楽費' => 2, '給料' => 1, '交際費' => 2];
        
        $income = [1=>0, 2=>0, 3=>0, 4=>0, 5=>0, 6=>0, 7=>0, 8=>0, 9=>0, 10=>0, 11=>0, 12=>0 ];
        $outcome = [1=>0, 2=>0, 3=>0, 4=>0, 5=>0, 6=>0, 7=>0, 8=>0, 9=>0, 10=>0, 11=>0, 12=>0 ];
        
        $_SESSION['himokus'] = $himokus;
        $_SESSION['income_outcome'] = $income_outcome;
        
        
        
        $sql_year = 'SELECT distinct year(日付) as 年 FROM 家計簿 ORDER BY year(日付) DESC';
        $stt_year = $db->prepare($sql_year);
        $stt_year->execute();
        $years = [];
        while ($row_year = $stt_year->fetch(PDO::FETCH_ASSOC)) {
            $years[] = $row_year['年'];
        }
        
        $_SESSION['years'] = $years;
        
    } catch (PDOException $e) {
        die('エラーメッセージ:' . $e->getMessage());
    }
//}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>年・費目指定集計画面</title>
    <script src="https://d3js.org/d3.v5.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
    <h2>年・費目指定集計画面</h2>
    	<a href="index.php">家計簿メニューへ戻る</a>
    <ul style="color:red;">
    <?php 
    if (isset($_SESSION['errors'])){
        foreach ($_SESSION['errors'] as $error){ ?>
            <li><?=$error?></li>
    <?php 
        }
        unset ($_SESSION['errors']);
    }
    ?>
    </ul>
    <form method="GET" action="kakeibo_summary_process.php">
    <select name="year">
         <option value="">--選択--</option>
	<?php foreach($_SESSION['years'] as $year) { ?>
         <option value="<?=$year ?>" <?=($year == $_SESSION['year'] ? 'selected' : '') ?>><?=$year ?></option>
	<?php } ?>
    </select>
    <input type="submit" value="集計" />
    </form>
    <hr>
    
    <?php 
     //if (isset ($_SESSION['months']) && ($_SESSION['months']) !== ''){
    
         ?>
	<table border="1"> 
    	<tr>
        	<th>費目</th>
            <?php 
            for ($i=1; $i <= 12; $i++){
                print ('<th>'. $i . '月</th>');
            }
            print('<th>合計</th></tr>')
            ?>
            <tr>
            <?php 
            
                if (isset ($_SESSION['summary'])){
                    foreach ($_SESSION['summary'] as $himoku_name=>$month_summary){
                        print('<tr><td>'. $himoku_name . '</td>');
                        $himoku_total = 0;
                        foreach ($month_summary as $month => $month_total){
                            print ('<td>' . $month_total . '</td>');
                            $himoku_total += $month_total; //連想配列 $month_summaryのkey $month から value $month_totalを取り出して連想配列$himoku_totalに加算する
                            
                            if($income_outcome[$himoku_name] == 1){
                                $income[$month] += $month_total;
                            } 
                            elseif($income_outcome[$himoku_name] == 2){
                                $outcome[$month] += $month_total;
                            }
                            else {
                                print('テスト');
                            }
                        }
                        print ('<td>' . $himoku_total . '</td></tr>');
                    }
                    print ('<tr><td>入金合計</td>');
                    //print_r($income);
                    $income_total = 0;
                    foreach($income as $month => $value){
                        print ('<td>' . $value . '</td>');
                        $income_total += $value;
                    }
                    print ('<td>' . $income_total . '</td></tr>');
                    
                    print ('<tr><td>出金合計</td>');
                    $outcome_total=0;
                    foreach($outcome as $month => $value){
                        print ('<td>' . $value . '</td>');
                        $outcome_total += $value;
                    }
                    print ('<td>' . $outcome_total . '</td></tr>');
                }
                                        
                
//                 if (isset ($_SESSION['income_outcome'])){
                    
//                     foreach ($_SESSION['income_outcome'] as $himoku_name=>$kubun){
                        
                        
//                         if ($kubun == 2) {
//                             print('<tr><td>入金合計</td>');
//                             $income_total = 0;
                            
//                             foreach ($income_total as $month=>$income_total){
//                                 print('<td>' . $income_total . '</td>');
//                                 $income += $income_total;
//                             }
//                             print('<td>' . $income .'</td></tr>');
//                         }
                        
                        
//                         $outcome_total = 0;
//                         if ($kubun == 1){
//                             print('<tr><td>出金合計</td>');
                            
//                             foreach (){
//                                 print('<td>' . $outcome_total . '</td>');
//                                 $outcome_total += $outcome;
//                             }
//                             print('<td>' . $outcome_total .'</td></tr>');
//                         }
                        
//                     }
//                 }
                
//                 print('<pre>');
//                 print_r($income_outcome);
//                 print('</pre');
                
    //         $month_total = 0;
    //         for($i=1; $i<=12; $i++){
    //             if(isset($_SESSION['months'][$i])){
    //                 print('<td>'. $_SESSION['months'][$i] . '</td>');
    //                 $month_total += $_SESSION['months'][$i]; //12回分加算して月合計を求める
    //             } else {
    //                 print('<td>0</td>');
    //             }
    //         }
            //$array_himoku = ["食費","光熱費","居住費","教養娯楽費","給料","交際費"];
            
//             $summary = [];
//             foreach ($_SESSION['himokus'] as $himoku){
//                 $month = [];
//                 for ($i=1; $i <= 12; $i++) {
//                     $month[$i] = 0;//最初に0を配列の中に入れておく
//                 }
//                 $summary[$himoku] = $month;
//             }
            
//             $sql1 = "select H.費目名, month(K.日付) as 月, sum(K.入金額 + K.出金額) as 合計額
//                  from 家計簿 as K inner join 費目 as H
//                  on K.費目id = H.id
//                  where year(K.日付) = :year
//                  group by  H.費目名, month(K.日付)
//                  order by H.費目名, month(K.日付)";
//             $stt = $db->prepare($sql1);
            
//             $stt->bindValue(':year', $_SESSION['year']);
//             $stt->execute();
            
//             while ($row = $stt->fetch(PDO::FETCH_ASSOC)){
//                 $summary[$row['費目名']][$row['月']] = $row['合計額']; //費目の中の月
//             }
//             if (isset ($_SESSION['summary'])){
//                 foreach ($_SESSION['summary'] as $summary){

//                 }
//             }
            
             ?>
<!--                <td><?//=$month_total ?></td> -->
<!--         </tr> -->

    <?php 
//      }
//      ?>
<!--     	</tr>     -->
    		    	
    	</tr>
    <?php 
    //unset ($_SESSION['months']);
    unset ($_SESSION['summary']);
    ?>
    </table>
    <?php 
//      print("<pre>");
//      print_r($_SESSION['income_outcome']);
//      print("</pre");
    ?>
    <script>
    $(function() { //ここからds.jsのコード（pie/donutsチャートを表示）
    	$.ajax({ 
    		type: 'GET',
    		url: 'kakeibo_himoku_json.php',
    		data: {
    		},
    		dataType: 'json'
    	})
    	.done(function(data,textStatus, jqXHR) {
    		// 0. jQueryのAjaxを使ってサーバからjson形式でデータを取得
    		let dataset = data;
    
    		let width = 800; // グラフの幅
    		  let height = 600; // グラフの高さ
    		  let radius = Math.min(width, height) / 2 - 10;
    
    		  // 2. SVG領域の設定
    		  let svg = d3.select("body").append("svg").attr("width", width).attr("height", height);
    
    		  g = svg.append("g").attr("transform", "translate(" + width / 2 + "," + height / 2 + ")");
    
    		  // 3. カラーの設定
    		  let color = d3.scaleOrdinal()
    		    .range(["#DC3912", "#3366CC", "#109618", "#FF9900", "#990099"]);
    
    		  // 4. pieチャートデータセット用関数の設定
    		  let pie = d3.pie()
    		    .value(function(d) { return d.value; })
    		    .sort(null);
    
    		  // 5. pieチャートSVG要素の設定
    		  let pieGroup = g.selectAll(".pie")
    		    .data(pie(dataset))
    		    .enter()
    		    .append("g")
    		    .attr("class", "pie");
    
    		  arc = d3.arc()
    		    .outerRadius(radius)
    		    .innerRadius(0);
    
    		  pieGroup.append("path")
    		    .attr("d", arc)
    		    .attr("fill", function(d) { return color(d.index) })
    		    .attr("opacity", 0.75)
    		    .attr("stroke", "white");
    
    		  // 6. pieチャートテキストSVG要素の設定
    		  let text = d3.arc()
    		    .outerRadius(radius - 30)
    		    .innerRadius(radius - 30);
    
    		  pieGroup.append("text")
    		    .attr("fill", "black")
    		    .attr("transform", function(d) { return "translate(" + text.centroid(d) + ")"; })
    		    .attr("dy", "5px")
    		    .attr("font", "10px")
    		    .attr("text-anchor", "middle")
    		    .text(function(d) { return d.data.name; });
    	})
    	.fail(function(jqXHR, textStatus, errorThrown){
    		console.log(jqXHR);
    		console.log(textStatus);
    		console.log(errorThrown);
    	});
    
    	/*
    	dataset= [
    		{"name": "居住費", "value": 80000},
    		{"name": "教養娯楽費", "value": 2000},
    		{"name": "水道光熱費", "value": 13000},
    		{"name": "通信費", "value": 9000},
    		{"name": "雑費", "value": 8000},
    		{"name": "食費", "value": 2105},
    	]
    	*/
    
    });
    
    /*
    let dataset = [
        { "name": "A", "value": 5 },
        { "name": "B", "value": 6 },
        { "name": "C", "value": 8 },
        { "name": "D", "value": 1 },
        { "name": "E", "value": 2 },
        { "name": "F", "value": 6 },
        { "name": "G", "value": 8 },
        { "name": "H", "value": 6 },
        { "name": "I", "value": 10 },
        { "name": "J", "value": 9 }
      ]
    */
</script>
</body>
</html>