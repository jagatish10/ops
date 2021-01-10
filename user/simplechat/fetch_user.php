<?php

	include("database_connection.php");
	session_start();

	$query = "
		select * from admin
	";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();

	$output = '
		<table class = "table table-bordered table-striped">
			<tr>
				<td>Admin</td>
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
				<td>'.$row["ADMIN_USERNAME"].' '.count_unseen_message($row["ADMIN_ID"],$_SESSION["USER_ID"],$connect).' '.fetch_is_type_status($row["ADMIN_ID"],$connect).'</td>
				<td>'.$status.'</td>
				<td><button type = "button" class = "btn btn-info btn-xs start_chat" data-touserid = "'.$row["ADMIN_ID"].'" data-tousername = "'.$row["ADMIN_USERNAME"].'">Chat</button></td>
			</tr>
		';
	}

	$output .= '</table>';

	echo $output;

?>
