<?php ob_start(); ?>
<div class="row">
    <div class="span1">
    </div>
    <div class="span11">
        <h1>もりけん問題</h1>
        <?php if (!empty($message)): ?>
        <h2><?php echo h($message); ?></h2>
        <?php else: ?>
        <h2>問題を投稿しました</h2>
        <?php endif; ?>
    <div class="row">
    <div class="span5">
        <a href="index.php"><img src="img/toppage_button.png"></a>
    </div><!-- span5 -->
    <div class="span6">
        <a href="make_quiz.php"><img src="img/post_quiz.png"></a>
    </div><!-- span6 -->

    </div>
</div>
</div>
<?php $content = ob_get_clean(); ?>
<?php include('layout.php'); ?>
