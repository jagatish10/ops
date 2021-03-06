<?php
include("session.php");
$currentuser=$_SESSION['ADMIN_USERNAME'];
$kuiri="SELECT(Select COUNT(STAT_STATUS) FROM stat WHERE STAT_STATUS='Finished'),(Select COUNT(STAT_STATUS) FROM stat WHERE STAT_STATUS='Pending'),(Select COUNT(STAT_STATUS) FROM stat WHERE STAT_STATUS='Printing')";
$kuirirun=mysqli_query($dbconn,$kuiri) or die ("Can Not Continue");
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
    <title>ADMIN ACCESSIBILITY</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="icon" type="image/png" href="assets/images/icons/favicon.ico"/>
  <!--===============================================================================================-->
   <!-- <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css"> -->
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/css/util1.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main1.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="assets/css/form.css" rel="stylesheet" media="all">

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
                  <div class="login100-pic js-tilt" data-tilt>
                  <img src="assets/img/opslogo.png"/>
                  </div>
                </a>
            </div>
			<div class="right-div">
                <a class="btn btn-danger pull-right btn--red" href="logout.php" onclick="return confirm('Are you sure you want to logout ?')">LOG ME OUT</a>
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
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                          <li><a href="../admin/utama.php" >ADMIN HOME</a></li>
                          <li><a href="../admin/utama1.php" class="menu-top-active" >ACCESSIBILITY</a></li>
                       </ul>
                      </ul>
						<ul id="menu-top" class="nav navbar-nav navbar-left" style="padding-left:150px">

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
                <h4 class="header"</h4>

                            </div>

        </div>

        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">ADMIN ACCESSIBILITY</h2>
                </div>
                <div class="card-body">


                        <div class="form-row m-b-55">
                            <div class="value">
                                <div class="row">
                                    <div class="col-2 center1">
                                      <div class="name">ADD ADMIN</div>
                                      <div class="wrap-input100 validate-input">
                                          <div class="login100-pic js-tilt" data-tilt>
                                        <a href="addadmin.php"><img width="50% "src="../images/clip5.png"></a>
                                        </div>
                                        <span class="focus-input100"></span>
                                      </div>
                                    </div>

                                    <div class="col-2 center1">
                                      <div class="name">USER LIST</div>
                                      <div class="wrap-input100 validate-input">
                                        <div class="login100-pic js-tilt" data-tilt>
                                        <a href="register.php"><img width="50% "src="../images/clip6.png"></a>
                                      </div>
                                        <span class="focus-input100"></span>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-row m-b-55">
                            <div class="value">
                                <div class="row">
                                    <div class="col-2 center1">
                                      <div class="name">ADMIN LIST</div>
                                      <div class="wrap-input100 validate-input">
                                        <div class="login100-pic js-tilt" data-tilt>
                                        <a href="adminList.php"><img width="42% "src="../images/clip7.png"></a>
                                      </div>
                                        <span class="focus-input100"></span>
                                      </div>
                                    </div>

                                    <div class="col-2 center1">
                                      <div class="name">Online Orders</div>
                                      <div class="wrap-input100 validate-input">
                                        <div class="login100-pic js-tilt" data-tilt>
                                        <a href="laporan.php"><img width="40% "src="../images/clip4.jpg"></a>
                                        </div>
                                        <span class="focus-input100"></span>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>

  </div>
</div>
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

    <!--===============================================================================================-->
  <script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="assets/vendor/bootstrap/js/popper.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="assets/vendor/tilt/tilt.jquery.min.js"></script>

  <script src='https://kit.fontawesome.com/a076d05399.js'></script>

  <script >
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
<!--===============================================================================================-->
  <script src=assets/"js/main.js"></script>


</body>
</html>
