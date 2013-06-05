<?php ob_start(); ?>
<div class="row">
<div class="span1"></div>
<div class="span11">
<!--<h1>岩手県盛岡市Facebookクイズアプリ</h1>-->
<img src='img/top_logo.png' />
</div>
</div><!--row -->
<div class="row">
<div class="span2"></div>
<div class="span3">
<a href='login.php'><img src='img/facebook_button3.png' width="300" height="150"/></a>
<img src='img/moriken_talk.png' width="400" height="500"/>
</div>
<div class="span7">
<img src='img/moriken2.png' width="400" height="500"/>
</div><!-- span11>
</div><!-- row-->
<?php $content = ob_get_clean(); ?>
<?php include('layout.php'); ?>
