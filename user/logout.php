<?php
include("session.php");
$currentuser=$_SESSION['USER_NAME'];
if(!session_start()){
	session_start();
}

if(session_destroy()){
	$sql="UPDATE user SET log_in='Offline' WHERE USER_NAME='$currentuser'";
	$quer=mysqli_query($dbconn,$sql);
	header("Location:login.php");
};

?>
