<?php

	include("database_connection.php");
	include('../sessionchat.php');

	$query = "
		select * from user
	";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();

	$output = '
		<table class = "table table-bordered table-striped">
			<tr>
				<td>Username</td>
				<td>Status</td>
				<td>Action</td>
			</tr>
	';

	foreach($result as $row)
	{
		$status = '';
		if($row['log_in']=='Online'){
				$status = '<span class = "label label-success">Online</span>';
		}else{
				$status = '<span class = "label label-danger">Offline</span>';
		}
		$output .= '
			<tr>
				<td>'.$row["USER_NAME"].' '.count_unseen_message($row["USER_ID"],$_SESSION["ADMIN_ID"],$connect).' '.fetch_is_type_status($row["USER_ID"],$connect).'</td>
				<td>'.$status.'</td>
				<td><button type = "button" class = "btn btn-info btn-xs start_chat" data-touserid = "'.$row["USER_ID"].'" data-tousername = "'.$row["USER_NAME"].'">Chat</button></td>
			</tr>
		';
	}

	$output .= '</table>';

	echo $output;

?>
