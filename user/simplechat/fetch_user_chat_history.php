<?php

	include("database_connection.php");
	include('../sessionchat.php');

	echo fetch_user_chat_history($_SESSION["USER_ID"],$_POST["to_user_id"],$connect);

?>
