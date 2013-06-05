<?php
session_start();
include('eden.php');
require_once('config.php');
require_once('func.php');
require_once('db_func.php');
if (!isset($_SESSION['fb_token'])) {
        header("Locaion:" . REDIRECT_URL . 'index.php');
        exit;
}
if (!isset($_POST['result'])) {
        header("Locaion:" . REDIRECT_URL . 'index.php');
        exit;
}
$i = 0;
$sum = 0;
$problems = $_POST['problem'];
foreach ($problems as $problem) {
        $problems[$i]['result'] = confirm_result($problem['choice'],$problem['answer']);
        if ($problems[$i]['result'] == '正解') {
                $problems[$i]['answer_flg'] = 1;
                $sum++;
        } else {
                $problems[$i]['answer_flg'] = 0;
        }
        $res[$i] = api_req_post("http://n0.x0.to/rsk/moridai/answer_check.json",'user_id='. $_SESSION['fb_id'] . '&question_id='. $problem['id'] .'&category_id=' . $problem['category_id'] . '&answer_flag=' . $problems[$i]['answer_flg'] . '&answer_option=' . $problem['choice']. '&answer_type=1');
        $i++;
}
$num = 1;
$sum = 0;
require('templates/test_result.php');
?>
