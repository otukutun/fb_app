<?php
//unset($_SESSION['fb_token']);
//セッション変数を全て解除する
session_start();
$_SESSION = array();
session_destroy();
header('Location:'. URL . '/fb_app/index.php');
exit;
?>
