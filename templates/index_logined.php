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
<h1>もりけん５級問題にようこそ</h1>
<?php
//echo $_SESSION['fb_token'];
var_dump($user['name']);
var_dump($user['id']);
?>
<br />
<a href="quiz.php?category=1">食</a><br />
<a href="quiz.php?category=2">名所</a><br />
<a href="quiz.php?category=3">方言</a><br />
<a href="quiz.php?category=4">偉人</a><br />
<a href="quiz.php?category=5">産業</a><br />
<a href="quiz.php?category=6">その他</a><br />
<br />
<a href="test.php">試験に挑戦する</a>
<a href="logout.php">logoutする</a>
</body>
</html>
