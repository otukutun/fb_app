<?php ob_start(); ?>
<div class="row">
    <div class="span1">
    </div>
    <div class="span11">
        <h2 class="topic-middle">目次</h2>
        <div class="row description-block">
            <div class="span11">
                <ol>
                    <li><a href="#first-guide"><font color="white">はじめてのかた</font></a></li>
                    <li><a href="#quiz-guide"><font color="white">１問だけ解いてみる</font></a></li>
                    <li><a href="#test-guide"><font color="white">テストに挑戦してみる</font></a></li>
                    <li><a href="#make-quiz-guide"><font color="white">問題をつくってみる！</font></a></li>
                </ol>
            </div>
        </div>
    <div class="span11">
        <h2 class="topic-middle" id="first-guide">はじめてのかた</h2>
        <div class="row description-block">
            <div class="span5">
                <img src='img/iphone_support/1.png' class="thumbnails">
                <img src='img/allow.png' class="allow">
            </div>
            <div class="span5 ">
            </div>
            <div class="span1"></div>
        </div>
        <div class="row">   
            <div class="span11">
                <p class="description" style="font-size:0.8em">スタートボタンを押してみてください。</p>
            </div>
        </div>
        <h2 class="topic-middle" id="quiz-guide">１問だけ解いてみる</h2>
        <div class="row description-block">
            <div class="span11">
                <img src='img/iphone_support/2.png' class="thumbnails">
                <img src='img/allow.png' class="allow">
                <img src='img/iphone_support/5.png' class="thumbnails">
                <img src='img/allow.png' class="allow">
                <img src='img/iphone_support/6.png' class="thumbnails">
            </div>
        </div>
        <div class="row">
            <div class="span11">
                <p class="description">解きたい問題のカテゴリを選んで、問題を解答してください。</p>
            </div>
        </div>
        <h2 class="topic-middle" id="test-guide">テストに挑戦してみる</h2>
        <div class="row description-block">
            <div class="span11">
            <img src='img/iphone_support/3.png' class="thumbnails">
            <img src='img/allow.png' class="allow">
            <img src='img/iphone_support/7.png' class="thumbnails">
            <img src='img/allow.png' class="allow">
            <img src='img/iphone_support/8.png' class="thumbnails">
            <img src='img/allow.png' class="allow">
            <img src='img/iphone_support/9.png' class="thumbnails">
            <img src='img/allow.png' class="allow">
            </div>
        </div>
        <div class="row">
            <div class="span11">
                <p class="description">試験タブを選択して、試験を始めるボタンをタップしてください。</p>
            </div>
        </div>
        <div class="row">
            <div class="span11">
            <img src='img/iphone_support/10.png' class="thumbnails">
            <img src='img/allow.png' class="allow">
            <img src='img/iphone_support/11.png' class="thumbnails">
            </div>
        </div>
        <div class="row">
            <div class="span11">
                <p class="description" style="margin-top:30px">７割以上正解で合格になります！不合格ならまた挑戦してみてください！</p>
            </div>
        </div>
        <div class="row description-block">
            <div class="span11">
        <h2 class="topic-middle" id="make-quiz-guide">問題をつくってみる！</h2>
            </div>
        </div>
        <div class="row description-block">
            <div class="span11">
            <img src='img/iphone_support/12.png' class="thumbnails">
            <img src='img/allow.png' class="allow">
            <img src='img/iphone_support/14.png' class="thumbnails">
            <img src='img/allow.png' class="allow">
            <img src='img/iphone_support/16.png' class="thumbnails">
            </div>
        </div>
        <div class="row" style="margin-bottom:70px">
            <div class="span11">
                <p class="description" style="margin-top:30px">問題ボタンをタップして作る問題のカテゴリーを選択してから、問題文と正解を入力してください。</p>
            </div>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php include('layout_test.php'); ?>
