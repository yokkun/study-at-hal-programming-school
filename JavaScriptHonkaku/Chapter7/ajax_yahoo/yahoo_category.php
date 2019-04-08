<?php
header('Content-type: text/xml; charset=UTF-8');
$params = array(
    'appid' => 'dj00aiZpPUVXNk1JNUo4MjFQOCZzPWNvbnN1bWVyc2VjcmV0Jng9MWU-',
    'category' => $_GET['categoryid']
);
$url = 'https://auctions.yahooapis.jp/AuctionWebService/V2/categoryTree?'.http_build_query($params);
print(file_get_contents($url));