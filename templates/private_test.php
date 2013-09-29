<?php ob_start(); ?>
<div class="row">
    <div class="span1">
    </div>
    <div class="span11" id="main">
<h1 class="topic-big">作成された問題一覧</h1>
<form>
<?php foreach ($tests['response'] as $question): ?>
<p>
<span>
<?php echo h($num); ?>
.<?php echo h($question['MoridaiQuestion']['question']); ?>
</span>
設問文.
<?php if($question['MoridaiQuestion']['format'] == 'one-choice'): ?>
<?php //var_dump($question['MoridaiQuestion']); ?>
正答=>
<input type="hidden" value="" name=""/>
<?php echo h($question['MoridaiQuestion']['right_answer']); ?>
<?php endif; ?>
<br />
</p>
<?php $num++; ?>
<?php endforeach; ?>
</form>
<br />
</div>
</div>
<?php $content = ob_get_clean(); ?>
<?php include('layout_test.php'); ?>
