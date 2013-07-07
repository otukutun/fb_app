<?php
//セッション変数を全て解除する
session_start();
require_once('include_func.php');
$_SESSION = array();
session_destroy();  
header("Location:" . REDIRECT_URL ."index.php");
exit;
?>
