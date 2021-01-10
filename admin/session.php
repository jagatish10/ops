<?php
if(!session_start()){
session_start();
}
if(!isset($_SESSION['ADMIN_USERNAME'])){
    ?>
	<script>
	alert('Incorrect USER ID or PASSWORD~');
	header("Location:login.php");
	</script>
	<?php
	}

include ("../dbconnect.php");
?>
