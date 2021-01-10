<?php
if(!session_start()){
session_start();
}
if(!isset($_SESSION['ADMIN_USERNAME'])){
    ?>
	<script>
	alert('Incorrect ADMIN_USERNAME or PASSWORD~');
	header("Location:login.php");
	</script>
	<?php
	}

?>
