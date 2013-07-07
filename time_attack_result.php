<?php
require_once('auth.php');
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        header("Locaion:" . REDIRECT_URL . 'index.php');
        exit;
}

//解答結果を送信
$i = 1;
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
        $res[$i] = api_req_post(API_URL . "answer_check.json",'user_id='. $_SESSION['fb_id'] . '&question_id='. $problem['id'] .'&category_id=' . $problem['category_id'] . '&answer_flag=' . $problems[$i]['answer_flg'] . '&answer_option=' . $problem['choice']. '&answer_type=1&client_type=facebook');
        if ($i != 20) {$i++; }
}
$num = 1;

//タイムアタック情報を送信
$time_res = api_req_post(API_URL . "time_check.json",'user_id=' . $_SESSION['fb_id'] . '&time_result=' . $_POST['time'] . '.0&right_count=' . $sum);
if ($time_res['response'] == 'Error') {
    $message = 'データが送信されませんでした';
} else if ($time_res['response'] == 'Data is Empty') {
    $message = 'データが送信されませんでした';
}
require('templates/time_attack_result.php');
?>
