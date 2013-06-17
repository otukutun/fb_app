<?php

//共通
define('TITLE','もりけん５級');
define('API_URL','http://n0.x0.to/rskweb/moridai/');
//開発環境
if (getenv('HOST_NAME') == 'development') {
define('FB_APP_ID',getenv('FB_APP_ID'));
define('FB_APP_KEY',getenv('FB_APP_KEY'));
define('URL','http://192.168.151.131');
define('REDIRECT_URL','http://192.168.151.131/fb_app/');
define('DSN','pgsql:host=localhost;dbname=test');
define('DB_USER','test');
define('DB_PASS','');
}
//本番環境
if (getenv('HOST_NAME') == 'production') {
define('FB_APP_ID',getenv('FB_APP_ID'));
define('FB_APP_KEY',getenv('FB_APP_KEY'));
define('URL','http://morioka-quiz.herokuapp.com/');
define('REDIRECT_URL',getenv('REDIRECT_URL'));
define('DSN',getenv('DSN'));
define('DB_USER',getenv('DB_USER'));
define('DB_PASS',getenv('DB_PASS'));
}
?>
