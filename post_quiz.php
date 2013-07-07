<?php
require_once('auth.php');
if (!isset($_POST['sentence']) || !isset($_POST['answer']) || !isset($_POST['category'])) {
    header("Locaion:" . REDIRECT_URL . 'index.php');
    exit;
}
if (isset($_POST['description'])) {//解説がある場合
    $res = api_req_post(API_URL . "quiz_create.json","user_id=" . $_SESSION['fb_id'] . "&question=" . $_POST['sentence'] . "&right_answer=" . $_POST['answer'] . "&description=" . $_POST['description'] . "&category_id=" . $_POST['category'] . "&quiz_type=private");
    $req = API_URL . "quiz_create.json" . "?user_id=" . $_SESSION['fb_id'] . "&question=" . $_POST['sentence'] . "&right_answer=" . $_POST['answer'] . "&category_id=" . $_POST['category'] . "&quiz_type=private";
} else {//解説がない場合
    $res = api_req_post(API_URL . "quiz_create.json","user_id=" . $_SESSION['fb_id'] . "&question=" . $_POST['sentence'] . "&right_answer=" . $_POST['answer'] . "&category_id=" . $_POST['category'] . "&quiz_type=private");
}

if ($res['response'] == 'Data is Empty') {
    $message = '問題の投稿に失敗しました';
} else if ($res['response'] == 'Error') {
    $message = '問題の投稿に失敗しました';
} else if ($res['response'] == 'Saved') {
}

require('templates/post_quiz.php');
?>
