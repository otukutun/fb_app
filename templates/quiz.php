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
<h1>もりけん問題</h1>
<?php if (isset($message)): ?>
<h3><?php echo $message; ?></h3>
<?php endif; ?>
<form action="quiz_result.php" method="POST">
<fieldset> 
<?php echo $res['response'][0]['MoridaiQuestion']['question']; ?>
<ul style="list-style-type: none;">
<li><label><input type="radio" name="choice" value="1"/><?php echo $res['response'][0]['MoridaiQuestion']['option1']; ?></label></li>
<li><label><input type="radio" name="choice" value="2"/><?php echo $res['response'][0]['MoridaiQuestion']['option2']; ?></label></li>
<li><label><input type="radio" name="choice" value="3"/><?php echo $res['response'][0]['MoridaiQuestion']['option3']; ?></label></li>
<li><label><input type="radio" name="choice" value="4"/><?php echo $res['response'][0]['MoridaiQuestion']['option4']; ?></label></li>
</ul>
<input type="hidden" name="question_id" value="<?php echo $res['response'][0]['MoridaiQuestion']['id'];?>"/>
<input type="hidden" name="answer" value="<?php echo $res['response'][0]['MoridaiQuestion']['right_answer'];?>"/>
<input type="hidden" name="category_id" value="<?php echo $res['response'][0]['MoridaiQuestion']['category_id'];?>"/>
<input type="submit" name="submit" value="解答" />
</fieldset>
</form>
</body>
</html>
