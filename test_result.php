<?php
session_start();
include('eden.php');
require_once('config.php');
require_once('func.php');
if (!isset($_SESSION['fb_token'])) {
        header("Locaion:" . DEV_URL . '/fb_app/index.php');
        exit;
}
if (!isset($_POST['result'])) {
        header("Locaion:" . DEV_URL . '/fb_app/index.php');
        exit;
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title><?php echo TITLE; ?></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
</head>
<body>
<?php
$num = 1;
$sum = 0;
?>
<?php foreach($_POST['problem'] as $problem): ?>
<?php echo $num; ?>番の
結果→<?php echo $result = confirm_result($problme['choice'],$problem['answer']); ?><br />
正解は<?php echo $problem['answer']; ?>番です。<br />
<?php if ($result == '正解'): ?>
<?php $sum++; ?>
<?php endif; ?>
<?php $num++; ?>
<?php endforeach; ?>
<?php if ($sum >= 8): ?>
合格しました。
<?php else: ?>
不合格です。また挑戦してください！
<?php endif; ?>
</body>
</html>
