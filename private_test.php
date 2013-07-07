<?php
//require_once('auth.php');
require_once('include_func.php');
$tests = api_req(API_URL . "private_test.json");
if ($tests['response'] == 'Data is Empty') {
        $message =  "テストデータが取得出来ません。。";
        require('templates/test_message.php');
        exit;
} 
$num = 1;
//var_dump($tests);
require('templates/private_test.php');
?>
