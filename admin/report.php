<?php
include("session.php");
$currentuser=$_SESSION['adminID'];
?>
<html>
<body bgcolor="#f0fff0">
<head><title>PRINT</title>
<br><br>
<style>

div.container {
    width: 100%;
    border: 0;
}

header, footer {
    padding: 1em;
    color: black;
    background-color:slategray;
    clear: left;
    text-align: center;
}
 
</style>
</head>
</body>

<body> 
<div class="container">

<header>
   <h1>AKIYO.SHOP</h1>
   <h1>Online Printing System</h1>
</header>

</div>
<br>
<tr>
	<td align="left"><a href="utama.php"><img width="2% "src="../images/home.png"></a></td>	
</tr>
</body>
</html>