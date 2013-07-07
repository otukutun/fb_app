<?php ob_start(); ?>
<div class="row">
<div class="span1"></div>
<div class="span11">
<table class="table">
<tr>
<th>問題番号</th>
<th>結果</th>
<th>正解番号</th>
</tr>
<?php foreach($problems as $problem): ?>
<tr>
<td><?php echo h($num); ?>番</td>
<td>結果→<?php echo h($problem['result']); ?></td>
<td>正解は<?php echo h($problem['answer']); ?>番です。</td>
</tr>
<?php $num++; ?>
<?php endforeach; ?>
</table>
<?php if ($sum >= 15): ?>
<h2 style="color:red;">合格しました。あなたは<?php echo h($sum); ?>/20の正解率でした。</h2>
<?php else: ?>
<h2 style="color:red;">不合格です。また挑戦してください！あなたは<?php echo h($sum); ?>/20の正解率でした。</h2>
<?php endif; ?>
<br />
<a href="index.php"><img src='img/toppage_button.png' / ></a>
</div><!--span-->
</div><!--row-->
<?php $content = ob_get_clean(); ?>
<?php include('layout_test.php') ?>
