<?php
include("session.php");
$currentuser=$_SESSION['ADMIN_ID'];
?>
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

                    <img src="assets/img/tdt.png" />
                </a>
            </div>
			<div class="right-div">
                <a href="logout.php" class="btn btn-danger pull-right" onclick="return confirm('Are you want to logout')">LOG ME OUT</a>
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
						<ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="laporan.php">ORDERS</a></li>
                        </ul>
						<ul id="menu-top" class="nav navbar-nav navbar-left">
                            <li><a>Hi,<i><?php echo $_SESSION['ADMIN_USERNAME'];?></a></i></li>
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
	$matricnumber=$_POST['Matricnumber'];
  $status=$_POST['sts'];
	$targetfile=$_POST['file_link'];
	$copy=$_POST['amount'];
	$totalp=$_POST['totalp'];
	$color=$_POST['colour'];
	$layout=$_POST['layout'];
	$order=$_POST['order'];
	$persheet=$_POST['sheet'];
  $totalcost=$_POST['total'];

	$kuiri=mysqli_query($dbconn,"UPDATE stat SET STAT_STATUS='".$status."',STAT_TOTALCOST='".$totalcost."' WHERE STAT_ID='".$matricnumber."' AND FILE='".$targetfile."'");
	$kuiri2=mysqli_query($dbconn,"UPDATE orde SET ORDE_COPIES='".$copy."',ORDE_COLOUR='".$color."',TOTAL_PAGE='".$totalp."',ORDE_PAGEORDER='".$order."',ORDE_LAYOUT='".$layout."',ORDE_PAGEPERSHEET='".$persheet."' WHERE USER_NAME='".$matricnumber."' AND ORDE_SELECTFILE='".$targetfile."'");
  echo
'<p>Status Successfully Send! </p>
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
