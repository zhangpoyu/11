<?php
$mysql_server_name="localhost";
$mysql_username="root";
$mysql_password="";
$mysql_database="west";
mysql_query("set names 'gbk'");
$conn=@mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("链接服务器失败，程序中断执行！");
$dblink=@mysql_select_db("kk",$conn) or die("选择当前数据库失败，程序中断执行！");

?>