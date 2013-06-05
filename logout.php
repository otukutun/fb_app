<?php
//unset($_SESSION['fb_token']);
//セッション変数を全て解除する
session_start();
include('eden.php');
require_once('config.php');
require_once('db_func.php');
require_once('func.php');
$_SESSION = array();
session_destroy();  
header("Location:" . REDIRECT_URL ."index.php");
//header('Location:'. REDIRECT_URL . 'index.php');
exit;
?>
