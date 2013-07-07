<?php ob_start(); ?>
<div class="row">
    <div class="span1">
    </div>
    <div class="span11" id="main">
<h1 class="topic-big">作成された問題一覧</h1>
<form action="test_result.php" method="POST">
<?php foreach ($tests['response'] as $question): ?>
<p>
<span>
<?php echo h($num); ?>
.<?php echo h($question['MoridaiQuestion']['question']); ?>
</span>
<ul style="list-style-type:none;">
<li><label class="select"><input type="radio" name="problem[<?php echo h($num); ?>][choice]" value="1" /><?php echo h($question['MoridaiQuestion']['option1']); ?></label></li>
<li><label class="select"><input type="radio" name="problem[<?php echo h($num); ?>][choice]" value="2" /><?php echo h($question['MoridaiQuestion']['option2']); ?></label></li>
<li><label class="select"><input type="radio" name="problem[<?php echo h($num); ?>][choice]" value="3" /><?php echo h($question['MoridaiQuestion']['option3']); ?></label></li>
<li><label class="select"><input type="radio" name="problem[<?php echo h($num); ?>][choice]" value="4" /><?php echo h($question['MoridaiQuestion']['option4']); ?></label></li>
<input type="hidden" value="<?php echo h($question['MoridaiQuestion']['id']); ?>" name="problem[<?php echo h($num); ?>][id]" />
<input type="hidden" value="<?php echo h($question['MoridaiQuestion']['right_answer']); ?>" name="problem[<?php echo h($num); ?>][answer]" />
<input type="hidden" value="<?php echo h($question['MoridaiQuestion']['category_id']); ?>" name="problem[<?php echo h($num); ?>][category_id]" />
</ul>
<br />
</p>
<?php $num++; ?>
<?php endforeach; ?>
<input type="image" name="result"value="解答" src="img/answer_button.png"/>
</form>
<br />
</div>
</div>
<?php $content = ob_get_clean(); ?>
<?php include('layout_test.php'); ?>
