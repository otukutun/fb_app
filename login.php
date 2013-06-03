<?php
//start session
session_start();
include('eden.php');
require_once('config.php');
if (!$_SESSION['fb_token']) {

     //get auth
     $auth = eden('facebook')->auth(FB_APP_ID, FB_APP_KEY, DEV_URL . '/fb_app/login.php');

     //if no code and no session
     if(!isset($_GET['code']) && !isset($_SESSION['fb_token'])) {
             //redirect to login
             $login = $auth->getLoginUrl(array('email','user_website'));
             header('Location: '.$login);
             exit;
     }

     //Code is returned back from facebook
     if(isset($_GET['code'])) {
             //save it to session
             $access = $auth->getAccess($_GET['code']);
             var_dump($access);
             $_SESSION['fb_token'] = $access['access_token'];
             header("Location:" . DEV_URL ."/fb_app/index.php");
     }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>もりけん５級問題</title>
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
<?php
echo $_SESSION['fb_token'];
?>
</body>
</html>
