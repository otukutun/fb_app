<?php
session_start();
include('eden.php');
require_once('config.php');
require_once('func.php');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title><?php echo TITLE; ?></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <style>
    /* Write code */
    </style>
<script>
/* Write code */
</script>
</head>
<body>
<h1>もりけん５級問題</h1>
<?php if (!isset($_SESSION['fb_token'])): ?>
<a href='login.php'>facebook_login</a>
<?php else: ?>
<h1>もりけん５級問題にようこそ</h1>
<?php
//echo $_SESSION['fb_token'];
$graph = eden('facebook')->graph($_SESSION['fb_token']);
$user = $graph->getUser();
var_dump($user['name']);
var_dump($user['id']);
//$graph->getLogoutUrl();
$post = $graph->post('test');
$post->create('testtest');
?>
<br />
<a href="quiz.php?category=1">カテゴリ1</a><br />
<a href="quiz.php?category=2">カテゴリ2</a><br />
<a href="quiz.php?category=3">カテゴリ3</a><br />
<a href="quiz.php?category=4">カテゴリ4</a><br />
<a href="quiz.php?category=5">カテゴリ5</a><br />
<br />
<a href="test.php">試験に挑戦する</a>
<a href="logout.php">logoutする</a>
<?php endif; ?>
</body>
</html>
