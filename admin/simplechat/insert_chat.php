<?php

	include("database_connection.php");
 	include('../sessionchat.php');

	$query = "
		insert into chat_message (to_user_id,from_user_id,chat_message,status) values (:to_user_id,:from_user_id,:chat_message,:status)
	";
	$statement = $connect->prepare($query);
	$data = array(
				':to_user_id' => $_POST["to_user_id"],
				':from_user_id' => $_SESSION["ADMIN_ID"],
				':chat_message' => $_POST["chat_message"],
				':status' => '1'
			);
	if($statement->execute($data))
	{
		echo fetch_user_chat_history($_SESSION["ADMIN_ID"],$_POST["to_user_id"],$connect);
	}

?>
