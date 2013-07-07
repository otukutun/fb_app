<?php
require_once('auth.php');//auth関連の処理の読み込み
if (!isset($_GET['category'])) {
        header("Locaion:" . REDIRECT_URL . 'index.php');
        exit;
}
$res = api_req(API_URL . "question.json?user_id=" . $_SESSION['fb_id'] . "&category_id=" . $_GET['category']);
if ($res['response'] == 'Data is Empty') {
        $message = '問題が取得出来ませんでした。また時間を置いてからチャレンジしてください。';
}
if ($res['response']['clear_flag'] == 0) {
    $answer_log = '未正解の問題です。';
} else {
    $answer_log = '正解済みの問題です。';
}
require('templates/quiz.php');
?>
