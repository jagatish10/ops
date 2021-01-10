<?php
include("session.php");

if($_GET['txtcarian']==""){
header("Location:carian.php");
}else{
$isi=$_GET['txtcarian'];

$kuiri="SELECT * FROM user WHERE USER_MATRICNUMBER='$isi'";
$kuirirun=@mysql_query($kuiri,$dbconn);
$row=@mysql_fetch_array($kuirirun);

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

<header>
   <h1>AKIYO.SHOP</h1>
   <h1>Online Printing System</h1>
</header>
</div>
<br>
<tr>
	<td align="left"><a href="utama.php"><img width="2% "src="../images/home.png"></a></td>	
</tr>
<br><br>
<table width="50%" border=1 align="center">


<tr bgcolor="#00ccff">
<td height="49" colspan=7 align="center"><strong>STATUS</strong></td>
</tr>
<tr bgcolor="#999999" >

<td width="20%"><div align="center"><strong>FIRSTNAME</strong></div></td>
<td width="20%"><div align="center"><strong>MATRICNUMBER</strong></div></td>
<td width="20%"><div align="center"><strong>CONTACT NUMBER</strong></div></td>




</tr>
<tr align="center">

<td><?php echo $row[4];?></td>
<td><?php echo $row[6];?></td>
<td><?php echo $row[7];?></td>

</table>

</body>
<?php }?>
</html>