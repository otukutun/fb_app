<?php
session_start();
include('eden.php');
require_once('config.php');
require_once('func.php');
require_once('db_func.php');
if (!isset($_SESSION['fb_token']) || !isset($_SESSION['fb_id'])) {
        header("Locaion:" . DEV_URL . '/fb_app/index.php');
        exit;
}
if (!isset($_GET['category'])) {
        header("Locaion:" . DEV_URL . '/fb_app/index.php');
        exit;
}
$res = api_req("http://n0.x0.to/rskweb/moridai/question.json?user_id=" .$_SESSION['fb_id'] . "&category_id=" . $_GET['category']);
if ($res['response'] == 'Data is Empty') {
        $message = '問題が取得出来ませんでした。また時間を置いてからチャレンジしてください。';
}
require('templates/quiz.php');
?>
