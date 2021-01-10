<html>

<body bgcolor="#f0fff0">
<head><title>PRINT</title></head>
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
<header>
   <h1>TDT SHOP</h1>
   <h1>Online Printing System</h1>
</header>
</body>
<br>
<tr>
	<td align="left"><a href="utama.php"><img width="2% "src="../images/home.png"></a></td>	
</tr>


<?php
include("session.php");

$currentuser=$_SESSION['adminID'];
    
	$totalamount=$_POST['totalcost']; 
	
	$kuiri="INSERT INTO total(TOTAL_TOTALCOST)
	VALUES ('".$totalcost."')";
	$kuirirun = @mysql_query($kuiri,$dbconn);
	echo
'<p>Payment Successfully Send! </p>
<p> <a href=""></a> .</p>';
?>