<?php
require_once('auth.php');
$tests = api_req(API_URL . "test.json");
if ($tests['response'] == 'Data is Empty') {
        $message =  "テストデータが取得出来ません。。";
        require('templates/test_message.php');
        exit;
} 
$num = 1;
require('templates/test.php');
?>
