<?php
$host="freedb.tech";
$username="freedbtech_ops";
$pass="ops12345";
$dbconn=mysqli_connect($host,$username,$pass) or die ("CONNECTION FAIL!!!!!");
$db=mysqli_select_db($dbconn,"freedbtech_ops");

?>
