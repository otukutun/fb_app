<?php
session_start();
include('eden.php');
require_once('config.php');
require_once('func.php');
require_once('db_func.php');
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
$dbh = connect_db();
$num = check_registed_user($dbh,$user['id']);

if ($num == 0) {//未登録の場合
        $value = add_user($dbh,$user['id'],$user['name']);
        $response = api_req_post("http://n0.x0.to/rsk/moridai/useradd.json",'user_name="'. $user['name'] . '"&facebook_id="'. $user['id'] .'"');
        //$response = api_req($url);
        if ($response['response'] == 'Error' || $response['response'] == 'Data is Empty') {
                echo '登録されませんでした。もう一度お試しください。';
        }
}
var_dump($num);
var_dump($response);
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
<?php endif; ?>
</body>
</html>
