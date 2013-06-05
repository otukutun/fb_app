<?php ob_start(); ?>
<div class="row" style="margin-top:20px;">
<div class="span1"></div>
<div class="span11">
<p>
<span>
結果→<?php echo $result; ?><br />
</span>
<span>
正解は<?php echo $_POST['answer']; ?>番です。<br />
</span>
<span>
解説は<?php echo $_POST['description']; ?><br />
</span>

</p>
<?php //var_dump($res); ?>
<?php //var_dump($_POST); ?>
</div>
</div>
<div class="row">
<div class="span1"></div>
<div class="span5">
<a href="quiz.php?category=<?php echo $_POST['category_id']; ?>"><img src='img/next_button.png' /></a> 
</div>
<div class="span6">
<a href="index.php"><img src='img/toppage_button.png' /></a>
</div>
</div>
<?php $content = ob_get_clean(); ?>
<?php include('layout.php'); ?>
