<?php

	include("database_connection.php");
	include('../sessionchat.php');
	$query = "
		UPDATE login_details
		SET last_activity = now()
		WHERE login_details_id = '".$_SESSION["login_details_id"]."'
	";

	$statement = $connect->prepare($query);
	$statement->execute();

?>
