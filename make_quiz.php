<?php
session_start();
include('eden.php');
require_once('config.php');
require_once('func.php');
require_once('db_func.php');
if (!isset($_SESSION['fb_token']) || !isset($_SESSION['fb_id'])) {
        header("Locaion:" . REDIRECT_URL . 'index.php');
        exit;
}
require('templates/make_quiz.php');
?>
