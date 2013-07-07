<?php
require_once('auth.php');
if (!isset($_POST['result'])) {
        header("Locaion:" . REDIRECT_URL . 'index.php');
        exit;
}
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
        $req = 'user_id='. $_SESSION['fb_id'] . '&question_id='. $problem['id'] .'&category_id=' . $problem['category_id'] . '&answer_flag=' . $problems[$i]['answer_flg'] . '&answer_option=' . $problem['choice']. '&answer_type=1&client_type=facebook';
        //$res[$i] = api_req_post(API_URL . "answer_check.json",$req);
        //var_dump($res[$i]);
        if ($i != 20) {
            $i++;
        }
}
$num = 1;
require('templates/test_result.php');
?>
