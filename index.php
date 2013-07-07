<?php
session_start();
require_once('include_func.php');
if (!isset($_SESSION['fb_token'])) {//ログインしてなかったら
        require('templates/index_login.php');
} else {//ログインしてたら
        $graph = eden('facebook')->graph($_SESSION['fb_token']);
        $user = $graph->getUser();
        require('templates/index_logined.php');
}
?>
