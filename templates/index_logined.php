<?php ob_start(); ?>
<h1 id="top_message"><?php echo h($user['name']); ?>さん、ようこそ</h1>
<br />
<div class="row">
<div class="span3 category">
<a href="quiz.php?category=1"><img src='img/shoku_button2.png'></a><br />
</div>
<div class="span3">
<a href="quiz.php?category=2"><img src='img/meisho_button.png'></a><br />
</div>
<div class="span3">
<a href="quiz.php?category=3"><img src='img/hougen_button.png'></a><br />
</div>
</div><!-- row -->
<div class="row "id="second-line">
<div class="span3">
<a href="quiz.php?category=4"><img src='img/ijin_button.png'></a><br />
</div>
<div class="span3">
<a href="quiz.php?category=5"><img src='img/sangyou_button.png'></a><br />
</div>
<div class="span3">
<a href="quiz.php?category=6"><img src='img/sonota_button.png'></a><br />
</div>
</div><!-- row -->
<br />
<hr />
<div class="row">
    <div class="span3" id="button_line">
        <a href="test.php"><img src='img/test_button5.png'></a>
    </div>
    <div class="span3">
        <a href="time_attack.php"><img src='img/time_attack_button.png'></a>
    </div>
    <div class="span3">
        <a href="make_quiz.php"><img src='img/post_quiz.png'></a>
    </div>
</div><!-- row-->
<?php $content = ob_get_clean(); ?>
<?php include 'layout.php'; ?>
