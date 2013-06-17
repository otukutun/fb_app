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
        $_SESSION['fb_token'] = $access['access_token'];
        $graph = eden('facebook')->graph($_SESSION['fb_token']);
        $user = $graph->getUser();
        $_SESSION['fb_id'] = $user['id'];
        $response = api_req_post(API_URL . "useradd.json","user_name=". $user['name'] . "&facebook_id=". $user['id']);

        if ($response['response'] == 'Error' || $response['response'] == 'Data is Empty') {
            //echo '登録されませんでした。もう一度お試しください。';
            $message =  '登録されませんでした。もう一度お試しください。';
        }
        header("Location:" . REDIRECT_URL ."index.php");
    }
}
?>
