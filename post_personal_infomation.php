<?php
require_once('auth.php');
if (!empty($_POST['postcode']) && !empty($_POST['address']) && !empty($_POST['name'])) {
    $res = api_req_post(API_URL . "user_entry.json","name=" . $_POST['name'] . "&postcode=" . $_POST['postcode'] . "&address=" . $_POST['address']);
    if ($res['response'] == 'Saved') {
        $_SESSION['message'] =  "ありがとうございます。案内に関してはある一定期間以内に発送させていただきます。それ以降に来ない場合はお手数ですが、以下のメールアドレスまでご連絡をお願いします。";
        //require('templates/test_message.php');
        //exit;
    } elseif ($res['response'] == 'Error') {
        $_SESSION['message'] =  "データの送信に失敗しました。再度登録をお願いします。";
    } else {
        $_SESSION['message'] =  "データの送信に失敗しました。再度登録をお願いします。";
    }
    header('Location:' . REDIRECT_URL);
    //var_dump($res);

    exit;
} 
//require('templates/test.php');
?>
