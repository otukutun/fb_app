<?php
//認証処理の共通化
session_start();
require_once('include_func.php');
if (!isset($_SESSION['fb_token']) || !isset($_SESSION['fb_id'])) {
    header("Locaion:" . REDIRECT_URL . 'index.php');
    exit;
}
?>
