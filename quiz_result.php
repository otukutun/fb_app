<?php
require_once('auth.php');
if (!isset($_POST['submit'])) {
        header("Locaion:" . REDIRECT_URL . 'index.php');
        exit;
}
if (!isset($_POST['choice']) || !isset($_POST['answer'])) {
        header("Locaion:" . REDIRECT_URL . 'index.php');
        exit;
}

$result = confirm_result($_POST['choice'],$_POST['answer']);
if ($result == '正解') {
        $answer_flg = 1;
} else {
        $answer_flg = 0;
}
$res = api_req_post(API_URL .  "answer_check.json","user_id=" . $_SESSION['fb_id'] . "&question_id=". $_POST['question_id'] ."&category_id=" . $_POST['category_id'] . "&answer_flag=" . $answer_flg . "&answer_option=" . $_POST['choice']. "&answer_type=0&client_type=facebook");
require('templates/quiz_result.php');
?>
