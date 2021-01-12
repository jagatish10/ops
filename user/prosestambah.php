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
                <a href="logout.php" class="btn btn-danger pull-right" onclick="return confirm('Are you sure you want to logout ?')">LOG ME OUT</a>
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
                            <li><a href="utama.php" class="menu-top-active">HOME</a></li>
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
include("session.php");

$currentuser=$_SESSION['USER_NAME'];

	$username=$_POST['Username'];
	$layout=$_POST['L'];
	$copies=$_POST['Copies'];
	$totalpage=$_POST['totalp'];
	$colour=$_POST['jk'];
	$pageorder=$_POST['po'];
	$pagepersheet=$_POST['pps'];
	$date=$_POST['Date'];
  $deliverytype=$_POST['dl'];
  $address=$_POST['address'];
  $comments=$_POST['comments'];
  $target_dir = "../files/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

  $kuiri=mysqli_query($dbconn,"INSERT INTO orde(USER_NAME,ORDE_SELECTFILE,ORDE_COPIES,TOTAL_PAGE,ORDE_COLOUR,ORDE_PAGEORDER,ORDE_LAYOUT,ORDE_PAGEPERSHEET,ORDE_DATE,COLLECTION,COMMENTS,PAYMENT,ADDRESS)
	VALUES ('".$username."','".$target_file."','".$copies."','".$totalpage."','".$colour."','".$pageorder."','".$layout."','".$pagepersheet."','".$date."','".$deliverytype."','".$comments."','Pending','".$address."')");
	$kuiri2=mysqli_query($dbconn,"INSERT INTO stat(STAT_ID,STAT_STATUS,STAT_TOTALCOST,FILE,PAYMENT,COLLECTION,ADDRESS)
	VALUES ('".$username."','Pending','-','".$target_file."','Pending','".$deliverytype."','".$address."')");

move_uploaded_file ($_FILES["fileToUpload"]["tmp_name"], $target_dir .$_FILES["fileToUpload"]["name"]);
	echo
'<p>Order Successfully Send! </p>
<p> <a href=""></a> .</p>';
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
