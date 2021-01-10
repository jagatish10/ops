
<?php
include ("session.php");
?>
<html>
<head><title>PRINT</title></head>
<body bgcolor="#f0fff0">
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
<BR>
<header>
   <h1>AKIYO.SHOP</h1>
   <h1>Online Printing System</h1>
</header>
</div>
<br>
<tr>
	<td align="left"><a href="utama.php"><img width="2% "src="../images/home.png"></a></td>	
</tr>
<form method="GET" action="result.php">
<br><br><br><br>
<table border=1 width="20%" align="center">
<tr> <td align="center" colspan=4>ADMIN SEARCH </td></tr>
<tr><td align="center">Keywords:</td><td><input type="text" name="txtcarian" size=50></td></tr>
<tr><td align="right" colspan =6><input type="submit" value="SEARCH"></td></tr>
</table>