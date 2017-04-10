<?php
$user = 'u829163719_gdb1';
$password = 'zxcv7410';
$db = 'u829163719_gdb1';
$host = 'mysql.hostinger.kr';
$port = 8889;

$link = mysql_connect(
   "$host:$port", 
   $user, 
   $password
) or die("접속 에러");

$db_selected = mysql_select_db(
   $db, 
   $link
) or die("연결 에러");
?>
