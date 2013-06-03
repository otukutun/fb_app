<?php
//unset($_SESSION['fb_token']);
//セッション変数を全て解除する
session_start();
$_SESSION = array();
session_destroy();
header('Location:http://192.168.151.131/fb_app/index.php');
exit;
?>
