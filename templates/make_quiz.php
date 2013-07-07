<?php ob_start(); ?>
<div class="row">
    <div class="span1">
    </div>
    <div class="span11">
        <h1 class="topic-big">もりけん問題</h1>
<span style="color:red;"> <?php echo h($answer_log); ?> </span>
<form action="post_quiz.php" method="POST">
<fieldset> 
<div class="control-group">
<label class="control-label" for="selectCategory">カテゴリ</label>
<select name="category" id="selectCategory" required>
<option value="1">食</option>
<option value="2">名所</option>
<option value="3">方言</option>
<option value="4">偉人</option>
<option value="5">産業</option>
<option value="6">その他</option>
</select>
<div class="controls">
</div><!-- controls -->
</div><!-- control-group -->
<div class="control-group">
<label class="control-label" for="inputSentence">設問文</label>
<div class="controls">
<textarea name="sentence" rows="4" cols="80" id="inputSentence" required style="resize:none;">
</textarea>
</div><!-- controls -->
</div><!-- control-group -->
<div class="control-group">
<label class="control-label" for="inputAnswer">正解</label>
<div class="controls">
<input type="text" name="answer" id="inputAnswer" required/>
</div><!-- controls -->
</div><!-- control-group -->
<div class="control-group">
<label class="control-label" for="inputDescription">解説文</label>
<div class="controls">
<textarea name="description" rows="4" cols="80" id="inputDescription" style="resize:none;">
</textarea>
</div><!-- controls -->
</div><!-- control-group -->
<div class="control-group">
<div class="controls">
<button class="btn" type="submit">投稿</button>
</div><!-- controls -->
</div><!-- control-group -->
</fieldset> 
</form>
</div>
</div>
<?php $content = ob_get_clean(); ?>
<?php include('layout.php'); ?>
