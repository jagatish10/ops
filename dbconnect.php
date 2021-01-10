<?php
$host="localhost";
$username="root";
$pass="";
$dbconn=mysqli_connect($host,$username,$pass) or die ("CONNECTION FAIL!!!!!");
$db=mysqli_select_db($dbconn,"ops");

?>
