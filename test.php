<?php
session_start();
include('eden.php');
require_once('config.php');
require_once('func.php');
if (!isset($_SESSION['fb_token'])) {
        header("Locaion:" . DEV_URL . '/fb_app/index.php');
        exit;
}
$tests = api_req("http://n0.x0.to/rskweb/moridai/test.json");
if ($tests['response'] == 'Data is Empty') {
        $message =  "テストデータが取得出来ません。。";
        //exit;
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
<?php if (isset($message)): ?>
<?php echo $message; ?>
<?php exit; ?>
<?php endif; ?>
<h1>試験問題に挑戦</h1>
<?php 
$num = 1;
?>

<form action="test_result.php" method="POST">
<?php foreach ($tests['response'] as $question): ?>
<fieldset>
問題<?php echo $num; ?><br />
設問文:<?php echo $question['MoridaiQuestion']['question']; ?>
<ul style="list-style-type:none;">
<li><label><input type="radio" name="problem[<?php echo $num; ?>][choice]" value="1" /><?php echo $question['MoridaiQuestion']['option1']; ?></label></li>
<li><label><input type="radio" name="problem[<?php echo $num; ?>][choice]" value="2" /><?php echo $question['MoridaiQuestion']['option2']; ?></label></li>
<li><label><input type="radio" name="problem[<?php echo $num; ?>][choice]" value="3" /><?php echo $question['MoridaiQuestion']['option3']; ?></label></li>
<li><label><input type="radio" name="problem[<?php echo $num; ?>][choice]" value="4" /><?php echo $question['MoridaiQuestion']['option4']; ?></label></li>
<input type="hidden" value="<?php echo $question['MoridaiQuestion']['id']; ?>" name="problem[<?php echo $num; ?>][id]" />
<input type="hidden" value="<?php echo $question['MoridaiQuestion']['right_answer']; ?>" name="problem[<?php echo $num; ?>][answer]" />
<input type="hidden" value="<?php echo $question['MoridaiQuestion']['category_id']; ?>" name="problem[<?php echo $num; ?>][category_id]" />
</ul>
<br />
<?php $num++; ?>
</fieldset>
<?php endforeach; ?>
<input type="submit" name="result"value="解答" />
</form>
<?php
//var_dump($tests['response']);
?>
<br />
<a href="index.php">トップページへ</a>
|
<a href="logout.php">logout</a>
</body>
</html>
