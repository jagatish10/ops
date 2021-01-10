<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>ERROR</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">

                    <img src="assets/img/opslogo.png" />
                </a>
            </div>
			<div class="right-div">

            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
						<ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="login.php" class="menu-top-active">BACK TO LOGIN</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
     <!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header"></h4>
            </div>
		</div>
<?php
include ("session.php");
include('simplechat/database_connection.php');
if($_POST['txtusername']==""){
header("Location:login.php");
}
else{
$username=$_POST['txtusername'];
}

if($_POST['txtpass']==""){
header("Location:login.php");
}
else{
$password=$_POST['txtpass'];
}

//verify process
$kuiri="SELECT *FROM  `admin` WHERE  `ADMIN_USERNAME` =  '$username' AND  `ADMIN_PASSWORD` =  '$password'";
$kuirirun=mysqli_query($dbconn,$kuiri);
$bilRow=mysqli_num_rows($kuirirun);
//echo $bilRow;

$update=mysqli_query($dbconn,"UPDATE admin SET log_in='Online' WHERE ADMIN_USERNAME = '$username'");

if($bilRow>0){
$row=mysqli_fetch_array($kuirirun);
$_SESSION['ADMIN_ID']=$row[0];
$_SESSION['ADMIN_USERNAME']=$row[1];
$sub_query = "
  insert into login_details (user_id) values ('".$row["ADMIN_ID"]."')
";
$statement = $connect->prepare($sub_query);
$statement->execute();
$_SESSION['login_details_id'] = $connect->lastInsertId();
header("Location:utama.php");
}else{
echo "<h1> Please Login Again! </h1>";
}
?>
             </div>

    </div>
    </div>
     <!-- CONTENT-WRAPPER SECTION END-->
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   &copy; Designed by : OPS
                </div>

            </div>
        </div>
    </section>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>

</body>
</html>
