<?php
require_once('auth.php');
$res = api_req(API_URL . "get_ranking.json");
if ($res['response'] == 'Data is Empty') {
        $message = '問題が取得出来ませんでした。また時間を置いてからチャレンジしてください。';
}
require('templates/rank.php');
?>
