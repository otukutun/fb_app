<?php ob_start(); ?>
<div class="row">
    <div class="span1">
    </div>
    <div class="span11">
        <h1>もりけん問題</h1>
        <?php if (isset($message)): ?>
            <h3><?php echo $message; ?></h3>
        <?php endif; ?>
<form action="quiz_result.php" method="POST">
<fieldset> 
<legend style="color:#FFF;">もりけん５級問題</legend>
設問文:<?php echo $res['response']['MoridaiQuestion']['question']; ?><br />
<ul style="list-style-type: none;">
<li><label><input type="radio" name="choice" value="1"/><?php echo $res['response']['MoridaiQuestion']['option1']; ?></label></li>
<li><label><input type="radio" name="choice" value="2"/><?php echo $res['response']['MoridaiQuestion']['option2']; ?></label></li>
<li><label><input type="radio" name="choice" value="3"/><?php echo $res['response']['MoridaiQuestion']['option3']; ?></label></li>
<li><label><input type="radio" name="choice" value="4"/><?php echo $res['response']['MoridaiQuestion']['option4']; ?></label></li>
</ul>
<input type="hidden" name="question_id" value="<?php echo $res['response']['MoridaiQuestion']['id'];?>"/>
<input type="hidden" name="answer" value="<?php echo $res['response']['MoridaiQuestion']['right_answer'];?>"/>
<input type="hidden" name="category_id" value="<?php echo $res['response']['MoridaiQuestion']['category_id'];?>"/>
<input type="hidden" name="description" value="<?php echo $res['response']['MoridaiQuestion']['description'];?>"/>
<input type="image" name="submit" value="解答"  src="img/answer_button.png"/>
</fieldset>
</form>
</div>
</div>
<?php $content = ob_get_clean(); ?>
<?php include('layout.php'); ?>
