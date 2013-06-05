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
<a href="quiz.php?category=<?php echo $_POST['category_id']; ?>" class="btn btn-primary">次の問題をとく</a> |
<a href="index.php"class="btn ">トップページへ戻る</a>

</p>
<?php //var_dump($res); ?>
<?php //var_dump($_POST); ?>
</div>
</div>
<?php $content = ob_get_clean(); ?>
<?php include('layout.php'); ?>
