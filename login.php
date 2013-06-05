<?php
//start session
session_start();
include('eden.php');
require_once('config.php');
require_once('func.php');
require_once('db_func.php');
if (!$_SESSION['fb_token']) {

        //get auth
        $auth = eden('facebook')->auth(FB_APP_ID, FB_APP_KEY, REDIRECT_URL . 'login.php');

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
                //var_dump($access);
                $_SESSION['fb_token'] = $access['access_token'];
                $graph = eden('facebook')->graph($_SESSION['fb_token']);
                $user = $graph->getUser();
                $_SESSION['fb_id'] = $user['id'];
                $dbh = connect_db();
                $num = check_registed_user($dbh,$user['id']);

                if ($num == 0) {//未登録の場合
                        $value = add_user($dbh,$user['id'],$user['name']);
                        //$url = 'http://n0.x0.to/rsk/moridai/useradd.json?user_name="' . $user['name'] . '"?facebook_id="' . $user['id'] . '"';
                        $response = api_req_post("http://n0.x0.to/rsk/moridai/useradd.json",'user_name="'. $user['name'] . '"&facebook_id="'. $user['id'] .'"'    );
                        if ($response['response'] == 'Error' || $response['response'] == 'Data is Empty') {
                                //echo '登録されませんでした。もう一度お試しください。';
                                $message =  '登録されませんでした。もう一度お試しください。';
                        }
                }
                header("Location:" . REDIRECT_URL ."index.php");
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
