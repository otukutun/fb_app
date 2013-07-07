<?php
//apiからjsonを取得して、配列で返す
function api_req($uri) {
    $json = file_get_contents($uri);
    if (isset($json)) {
        return json_decode($json,true);
    } else {
        return false;
    }

}//api_req

function api_req_post($url,$data) {
    $header = array(
        "Content-Type: application/x-www-form-urlencoded",
        "Content-Length: ".strlen($data)
    );
    $context = array(
        "http" => array(
            "method"  => "POST",
            "header"  => implode("\r\n", $header),
            "content" => $data
        )
    );
    $json = file_get_contents($url, false, stream_context_create($context));
    if (isset($json)) {
        return json_decode($json,true);
    } else {
        return null;
    }
}//api_req_post

function confirm_result($choice,$correct_answer) {
    if ($choice == $correct_answer) {
        return '正解';
    } else {
        return '不正解';
    }
}//confirm_result

function h($str) {//エスケープ処理のやつ
    return htmlspecialchars($str,ENT_QUOTES,'UTF-8');
}

function check_logined($user_id) {
    if (isset($user_id)) {
        return true;
    } else {
        return false;
    }
}
?>
