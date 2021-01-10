<?php
if(!session_start()){
	session_start();
	}
	if (!isset($_SESSION['USER_NAME'])){
	?>
	<script>
	alert('Incorrect USERNAME or PASSWORD~');
	header("Location:login.php");
	</script>
	<?php
	}
	include("../dbconnect.php");
	
	?>
