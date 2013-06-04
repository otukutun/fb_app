<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title><?php echo TITLE; ?></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!--<link rel="stylesheet" href="css/XXXX.css" media="all">-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <!--<script src="js/XXXX.js"></script>-->
</head>
<body>
結果→<?php echo $result; ?><br />
正解は<?php echo $_POST['answer']; ?>番です。<br />
<?php var_dump($res); ?>
<?php var_dump($_POST); ?>
</body>
</html>
