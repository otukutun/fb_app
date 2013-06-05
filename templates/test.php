<?php ob_start(); ?>
<div class="row">
    <div class="span1">
    </div>
    <div class="span11">
<h1>試験問題</h1>
<form action="test_result.php" method="POST">
<?php foreach ($tests['response'] as $question): ?>
<p>
<span>
問題<?php echo $num; ?>
:<?php echo $question['MoridaiQuestion']['question']; ?>
</span>
<ul style="list-style-type:none;">
<li><label><input type="radio" name="problem[<?php echo $num; ?>][choice]" value="1" /><?php echo $question['MoridaiQuestion']['option1']; ?></label></li>
<li><label><input type="radio" name="problem[<?php echo $num; ?>][choice]" value="2" /><?php echo $question['MoridaiQuestion']['option2']; ?></label></li>
<li><label><input type="radio" name="problem[<?php echo $num; ?>][choice]" value="3" /><?php echo $question['MoridaiQuestion']['option3']; ?></label></li>
<li><label><input type="radio" name="problem[<?php echo $num; ?>][choice]" value="4" /><?php echo $question['MoridaiQuestion']['option4']; ?></label></li>
<input type="hidden" value="<?php echo $question['MoridaiQuestion']['id']; ?>" name="problem[<?php echo $num; ?>][id]" />
<input type="hidden" value="<?php echo $question['MoridaiQuestion']['right_answer']; ?>" name="problem[<?php echo $num; ?>][answer]" />
<input type="hidden" value="<?php echo $question['MoridaiQuestion']['category_id']; ?>" name="problem[<?php echo $num; ?>][category_id]" />
</ul>
<br />
</p>
<?php $num++; ?>
<?php endforeach; ?>
<input type="submit" name="result"value="解答" class="btn btn-primary btn-large"/>
</form>
<br />
</div>
</div>
<?php $content = ob_get_clean(); ?>
<?php include('layout_test.php'); ?>
