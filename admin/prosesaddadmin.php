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
    <title>STATUS</title>
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
                <a href="logout.php" class="btn btn-danger pull-right" onclick="return confirm('Are you sure want to logout ?')">LOG ME OUT</a>
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
                            <li><a href="utama.php" class="menu-top-active">MENU</a></li>
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
                <h4 class="header-line"></h4>
            </div>
		</div>
<?php
include("../dbconnect.php");
include 'session.php';
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$username=$_POST['username'];
$email=$_POST['email'];
$contactnumber=$_POST['contactnumber'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
$target = "../images/" . basename($_FILES["image"]["name"]);
$image = $_FILES['image']["name"];

function function_alert($msg) {
  echo "<script type='text/javascript'>alert('$msg');</script>";
 }
function function_alert1($msg) {
   echo "<script type='text/javascript'>alert('$msg');</script>";
 }


$result = mysqli_num_rows(mysqli_query($dbconn,"SELECT * FROM admin WHERE ADMIN_USERNAME='$username'"));
if($result == 1)
{
function_alert('ERROR! The username you have chosen already exists!');
header("Refresh: 0; URL= 'addadmin.php'");
}
else if($password!=$confirmpassword){
function_alert1('ERROR! The password is not matching!');
header("Refresh: 0; URL= 'addadmin.php'");
}
else
{
mysqli_query($dbconn,"INSERT INTO admin (ADMIN_USERNAME,ADMIN_FNAME,ADMIN_LNAME,ADMIN_CONTACT,ADMIN_EMAIL,ADMIN_PASSWORD,ADMIN_IMAGE)
VALUES ('$username','$firstname','$lastname','$contactnumber','$email','$password','$image')");

move_uploaded_file ($_FILES["image"]["tmp_name"], $target);
echo
'<p>Congratulations! You have successfully add new admin!</p>
<p>Click <a href="utama.php">here</a> to Go Back.</p>';}
?>
             </div>

    </div>
     <!-- CONTENT-WRAPPER SECTION END-->
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   &copy; Designed by : TDT
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
