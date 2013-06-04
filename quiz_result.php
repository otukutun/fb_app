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
if (!isset($_POST['submit'])) {
        header("Locaion:" . DEV_URL . '/fb_app/index.php');
        exit;
}
if (!isset($_POST['choice']) || !isset($_POST['answer'])) {
        header("Locaion:" . DEV_URL . '/fb_app/index.php');
        exit;
}

$result = confirm_result($_POST['choice'],$_POST['answer']);
if ($result == '正解') {
        $answer_flg = 1;
} else {
        $answer_flg = 0;
}
$res = api_req_post("http://n0.x0.to/rsk/moridai/answer_check.json",'user_id='. $_SESSION['fb_id'] . '&question_id='. $_POST['question_id'] .'&category_id=' . $_POST['category_id'] . '&answer_flag=' . $answer_flg . '&answer_option=' . $_POST['choice']. '&answer_type=0');
require('templates/quiz_result.php');
?>
