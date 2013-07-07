<?php ob_start(); ?>
<div class="row">
    <div class="span1">
    </div>
    <div class="span11" id="main">
<h1 class="topic-big">タイムアタック</h1><h2 id="timer" style="color:red;">90</h2><span style="color:red;">秒で終了します。</span>
<form action="time_attack_result.php" method="POST" id="time_attack">
<input type="hidden" value="0" name="time" />
<?php foreach ($tests['response'] as $question): ?>
<p>
<span>
<?php echo h($num); ?>
.<?php echo $question['MoridaiQuestion']['question']; ?>
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
<?php include('layout_time_attack.php'); ?>
