<?php
session_start();
include('eden.php');
require_once('config.php');
require_once('func.php');
require_once('db_func.php');
if (!isset($_SESSION['fb_token'])) {//ログインしてなかったら
        require('templates/index_login.php');
} else {//ログインしてたら
        $graph = eden('facebook')->graph($_SESSION['fb_token']);
        $user = $graph->getUser();
        require('templates/index_logined.php');
}
?>
