<?php
session_start();
include('eden.php');
require_once('config.php');
require_once('func.php');
if (!isset($_SESSION['fb_token'])) {
        header("Locaion:" . REDIRECT_URL . 'index.php');
        exit;
}
$tests = api_req("http://n0.x0.to/rskweb/moridai/test.json");
if ($tests['response'] == 'Data is Empty') {
        $message =  "テストデータが取得出来ません。。";
        require('templates/test_message.php');
        exit;
} 
$num = 1;
require('templates/test.php');
?>
