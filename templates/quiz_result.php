<?php ob_start(); ?>
結果→<?php echo $result; ?><br />
正解は<?php echo $_POST['answer']; ?>番です。<br />
<?php var_dump($res); ?>
<?php var_dump($_POST); ?>
<?php $content = ob_get_clean(); ?>
<?php include('layout.php'); ?>
