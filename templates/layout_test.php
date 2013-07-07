<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title><?php echo TITLE; ?></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/style_test.css" rel="stylesheet" media="screen">
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
          <a class="brand" href="index.php">もりけん５級問題</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="index.php">ホーム</a></li>
                <?php if (check_logined($_SESSION['fb_token'])): ?>
                    <li><a href="rank.php">ランキング</a></li>
                    <li><a href="logout.php">ログアウト</a></li>
                <?php endif; ?>
              <!--<li><a href="#about">About</a></li>-->
              <!--<li><a href="#contact">Contact</a></li>-->
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
</div>
<div class="container" id="main">
<?php echo $content; ?>
</div>
<div class="container" id="footer">
<hr />
    <div class="row">
        <div class="span6">
            Copyright &copy;  2013 岩手県立大学佐々木研究室 All Rights Reserved.
        </div>
        <div class="span6">
            開発者:<a href="https://twitter.com/otukutun">@otukutun</a>
        </div>
    </div><!--row-->
</div><!-- footer -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
