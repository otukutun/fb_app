<?php ob_start(); ?>
<div class="row">
<div class="span1"></div>
<div class="span11">
<?php if (!empty($message)): ?>
<h2><?php echo $message; ?></h2>
<?php endif ?>
<table class="table">
<?php foreach($problems as $problem): ?>
<tr>
<td><?php echo $num; ?>番の</td>
<td>結果→<?php echo $problem['result']; ?></td>
<td>正解は<?php echo $problem['answer']; ?>番です。</td>
<?php $num++; ?>
<?php endforeach; ?>
</table>
<?php if ($sum >= 15): ?>
<h2 style="color:red;">合格しました。正解数は<?php echo $sum; ?> / 20です。</h2>
<?php else: ?>
<h2 style="color:red;">不合格です。また挑戦してください！正解数は<?php echo $sum; ?> / 20です。</h2>
<?php endif; ?>
<br />
<a href="index.php"><img src='img/toppage_button.png' / ></a>
</div><!--span-->
</div><!--row-->
<?php $content = ob_get_clean(); ?>
<?php include('layout_test.php') ?>
