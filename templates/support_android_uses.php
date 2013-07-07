<?php ob_start(); ?>
<div class="row">
    <div class="span1">
    </div>
    <div class="span11">
        <h1 class="topic-big">Androidアプリサポートページ</h1>
        <div class="row description-block">
              <div class="span11">
                  <ul>
                      <li><a href="#first-guide"><font color="white">はじめてのかた</font></a></li>
                      <li><a href="#quiz-guide"><font color="white">１問だけ解いてみる</font></a></li>
                      <li><a href="#test-guide"><font color="white">テストに挑戦してみる</font></a></li>
                      <li><a href="#make-quiz-guide"><font color="white">問題をつくってみる！</font></a></li>
                  </ul>
              </div>
          </div>
        <div class="span11">
          <h2 class="topic-middle" id="first-guide">はじめてのかた</h2>
          <div class="row description-block">
              <div class="span11">
                  <img src='img/android_support/1.png' class="thumbnails">
                  <img src='img/allow.png' class="allow">
              </div>
          </div>
          <div class="row">
              <div class="span11">
                  <p class="description" style="margin-top:5px;">スタートボタンを押してみてください。</p>
              </div>
          </div>

        <div class="row description-block">
        <h2 class="topic-middle" id="quiz-guide">１問だけ解いてみる</h2>
            <div class="span11">
            <img src='img/android_support/2.png' class="thumbnails">
            <img src='img/allow.png' class="allow">
            <img src='img/android_support/5.png' class="thumbnails">
            <img src='img/allow.png' class="allow">
            <img src='img/android_support/6.png' class="thumbnails">
        </div>
        <div class="row">
            <div class="span11">
                <p class="description" style="margin-top:15px;">カテゴリーを選んで、問題に解答してください。</p>
            </div>
        </div>
            <div class="row description-block">
         <h2 class="topic-middle" id="test-guide">テストに挑戦してみる</h2>
             <div class="span11">
             <img src='img/android_support/3.png' class="thumbnails">
             <img src='img/allow.png' class="allow">
             <img src='img/android_support/7.png' class="thumbnails">
             <img src='img/allow.png' class="allow">
             <img src='img/android_support/6.png' class="thumbnails">
             <img src='img/allow.png' class="allow">
             <img src='img/android_support/5.png' class="thumbnails">
         </div>
         <div class="row">
             <div class="span11">
                 <p class="description" style="margin-top:15px;">問題リストを最初から選んで問題に解答してみてください。</p>
             </div>
         </div>
        <div class="row description-block">
            <div class="span11">
        <h2 class="topic-middle" id="make-quiz-guide">問題をつくってみる！</h2>
            </div>
        </div>
        <div class="row description-block">
            <div class="span11">
            <img src='img/android_support/8.png' class="thumbnails">
            </div>
        </div>
         <div class="row">
             <div class="span11" style="margin-bottom:30px;">
                 <p class="description" style="margin-top:15px;">問題作成タブをタップして、問題を作ってみてください。</p>
             </div>
         </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php include('layout_test.php'); ?>
