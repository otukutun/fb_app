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
function confirm_result($choice,$correct_answer) {
        if ($choice == $correct_answer) {
                return '正解';
        } else {
                return '不正解';
        }
}//confirm_result
?>
