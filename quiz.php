<?php
session_start();
include('eden.php');
require_once('config.php');
require_once('func.php');
if (!isset($_SESSION['fb_token'])) {
        header("Locaion:" . DEV_URL . '/fb_app/index.php');
        exit;
}
?>
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title><?php echo TITLE; ?></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="css/XXXX.css" media="all">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="js/XXXX.js"></script>
</head>
<body>

</body>
</html>
