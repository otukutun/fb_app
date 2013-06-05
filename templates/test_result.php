<?php ob_start(); ?>
<div class="row">
<div class="span1"></div>
<div class="span11">

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
<a href="index.php" class="btn btn-primary btn-large">トップページへ</a>
</div><!--span-->
</div><!--row-->
<?php $content = ob_get_clean(); ?>
<?php include('layout.php') ?>
