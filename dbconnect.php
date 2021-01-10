<?php
$host="remotemysql.com";
$username="WUAvaC7rMr";
$pass="n1L4r7BCMk";
$dbconn=mysqli_connect($host,$username,$pass) or die ("CONNECTION FAIL!!!!!");
$db=mysqli_select_db($dbconn,"WUAvaC7rMr");

?>
