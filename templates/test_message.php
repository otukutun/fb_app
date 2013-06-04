<?php ob_start();?>
<?php echo $message; ?>
<br />
<a href="index.php">トップページへ</a>
|
<a href="logout.php">logout</a>
<?php $content = ob_get_clean(); ?>
<?php include('layout.php'); ?>
