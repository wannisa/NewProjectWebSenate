<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_conn = "localhost";
$conn_conn = "dataying";
$username_conn = "root";
$password_conn = "password";
$conn = mysql_pconnect($hostname_conn, $username_conn, $password_conn) or trigger_error(mysql_error(),E_USER_ERROR); 
//mysql_query("set NAMES tis620");
mysql_query("SET NAMES UTF8");
?>
