<?php
//include('eden.php');
require_once('config.php');
require_once('func.php');

function connect_db() {
        try {
                return new PDO(DEV_DSN,DEV_DB_USER,DEV_DB_PASS);
                //echo 'dbに接続しました';
        } catch (PDOException $e) {
                echo $e->getMessage();
                exit;
        }
}//connect_db

function check_registed_user($dbh, $fb_id) {
        $sth = $dbh->prepare('select * from users where facebook_id = ?');
        $sth->execute(array($fb_id));
        $result_set = $sth->fetchAll();
        $result_num = count($result_set);
        return $result_num;
}//check_registed

function add_user($dbh,$fb_id,$fb_name) {
        $sth = $dbh->prepare('insert into users(facebook_id, username) values(?,?)');
        $sth->execute(array($fb_id,$fb_name));
        return true;
}//add_user

?>
