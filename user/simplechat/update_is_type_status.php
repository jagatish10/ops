<?php

	include("database_connection.php");
	include('../sessionchat.php');
	$query = "
		update login_details set is_type = '".$_POST["is_type"]."' where login_details_id = '".$_SESSION["login_details_id"]."'
	";
	$statement = $connect->prepare($query);
	$statement->execute();

?>
