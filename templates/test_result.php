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
//var_dump($res);
//var_dump($problems);
?>
<?php foreach($problems as $problem): ?>
<?php echo $num; ?>番の
結果→<?php echo $problem['result']; ?><br />
正解は<?php echo $problem['answer']; ?>番です。<br />
<?php $num++; ?>
<?php endforeach; ?>
<?php if ($sum >= 8): ?>
合格しました。
<?php else: ?>
不合格です。また挑戦してください！
<?php endif; ?>
<br />
<a href="index.php">トップページへ</a>
|
<a href="logout.php">logout</a>
</body>
</html>
