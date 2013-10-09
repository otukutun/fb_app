<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title><?php echo TITLE; ?></title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/style.css" rel="stylesheet" media="screen">
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="index.php">もりけん入門クイズ</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="index.php">ホーム</a></li>
                <?php if (check_logined($_SESSION['fb_token'])): ?>
                <li><a href="rank.php">ランキング</a></li>
                <li><a href="logout.php">ログアウト</a></li>
                <?php else: ?>
                <li><a href="support_iphone.php">iPhoneアプリのサポートページ</a></li>
                <li><a href="support_android.php">Androidアプリのサポートページ</a></li>
                <?php endif; ?>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
</div>
<div class="container" id="main">
<?php if (!empty($_SESSION['message'])): ?>
<div class="alert">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
<?php echo $_SESSION['message']; ?>
</div>

<?php endif; ?>
<?php echo $content; ?>
</div>
<div class="container" id="footer">
<hr />
    <div class="row">
        <div class="span1"></div>
        <div class="span8">
            Copyright &copy;  2013 岩手県立大学ソフトウェア情報学部佐々木研究室 All Rights Reserved.
        </div>
        <div class="span3">
            開発者:<a href="https://twitter.com/otukutun">@otukutun</a>
        </div>
    </div><!--row-->
</div><!-- footer -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php unset($_SESSION['message']);//メッセージを消すよう ?>
