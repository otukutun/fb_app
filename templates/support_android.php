<?php ob_start(); ?>
<div class="row">
    <div class="span1">
    </div>
    <div class="span11">
        <h1 class="topic-big">Androidアプリサポートページ</h1>

        <h2 class="topic-middle">使い方ページ</h2>
        <div class="row description-block">
            <div class="span11">
                <p style="margin-left:20px"><a href="support_android_uses.php"><font color="white">使い方ページ</font></a></p>
            </div>
        </div>
        <h2 class="topic-middle">連絡先</h2>
        <div class="row description-block">
            <div class="span11">
                <p style="margin-left:20px">お問い合わせは以下のメールまでお願いします。<br /><a href="mailto:#"><font color="white">info@sakumon.jp</font></a></p>
            </div>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php include('layout_test.php'); ?>
