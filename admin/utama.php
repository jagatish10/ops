<?php
include("session.php");
$currentuser=$_SESSION['ADMIN_USERNAME'];
$query=mysqli_query($dbconn,"SELECT * FROM admin WHERE ADMIN_USERNAME='$currentuser'");
$row=mysqli_fetch_row($query);
$kuiri="SELECT(Select COUNT(STAT_STATUS) FROM stat WHERE STAT_STATUS='Finished'),(Select COUNT(STAT_STATUS) FROM stat WHERE STAT_STATUS='Pending'),(Select COUNT(STAT_STATUS) FROM stat WHERE STAT_STATUS='Printing'),(Select COUNT(STAT_STATUS) FROM stat WHERE STAT_STATUS='Waiting for Payment')";
$kuirirun=mysqli_query($dbconn,$kuiri) or die ("Can Not Continue");
$kuiri1="SELECT(Select COUNT(ADMIN_ID) FROM admin),(Select COUNT(USER_ID) FROM user),(Select SUM(STAT_TOTALCOST) FROM stat WHERE PAYMENT='Successful')";
$kuirirun1=mysqli_query($dbconn,$kuiri1) or die ("Can Not Continue");
$query=mysqli_query($dbconn,"SELECT * FROM admin WHERE ADMIN_USERNAME='$currentuser'");
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
    <title>ADMIN HOME</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <link rel="icon" type="image/png" href="assets/images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">

    <!-- <link rel="stylesheet" type="text/css" href="assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css"> -->

    <link rel="stylesheet" type="text/css" href="assets/css/util1.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main1.css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- <link href="assets/css/form.css" rel="stylesheet" media="all"> -->

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

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
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                          <li><a href="../admin/utama.php" class="menu-top-active">ADMIN HOME</a></li>
                          <li><a href="../admin/utama1.php" >ACCESSIBILITY</a></li>
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
                <h4 class="header">ADMIN HOME</h4>

                            </div>

        </div>

        <div class="container corner pad" style="background-color:#FFF">
          <div class="row">
            <div class="col-md-3 img">
              <h4 class="header glow" align="center">Profile Picture</h4>
              <br>
              <blockquote>
                <div class="login100-pic js-tilt" data-tilt>
                <div id="image_div">
                <?php echo "<img src='../images/".$row[7]."' height='250' width='200'/>";?>
                </div>
              </div>
              </blockquote>
            </div>
            <div class="col-md-6 details">
              <h4 class="header glow" align="center">Profile Details</h4>
              <br>
              <blockquote>
                <h2><?php echo $row[3]; echo " "; echo $row[4];?></h2><br>
                <h5><i class="fas fa-envelope" style="color:black"></i><?php echo " "; echo $row[5];?></h5><br>
                <h5><i class="fa fa-phone" style="color:black"></i><?php echo " "; echo $row[6];?></h5>
                <br>

                <div class="limiter">
                  <div class="container-table100" style="min-height:auto">
                    <div class="wrap-table100">
                        <div class="table">

                          <div class="row1 header pad1">
                              Printing Status
                          </div>

                          <?php
                          while($row=mysqli_fetch_array($kuirirun)){
                          ?>

                          <div class="row1">
                            <div class="cell">
                              Pending
                            </div>
                            <div class="cell"  data-title="Pending">
                              <?php echo $row[1];?>
                            </div>
                          </div>

                          <div class="row1">
                            <div class="cell">
                              Waiting for Payment
                            </div>
                            <div class="cell" data-title="Pending">
                              <?php echo $row[3];?>
                            </div>
                          </div>

                          <div class="row1">
                            <div class="cell">
                              Printing
                            </div>
                            <div class="cell"  data-title="Pending">
                              <?php echo $row[2];?>
                            </div>
                          </div>

                          <div class="row1">
                            <div class="cell">
                              Finished
                            </div>
                            <div class="cell"  data-title="Pending">
                              <?php echo $row[0];?>
                            </div>
                          </div>

                            <?php } ?>

                        </div>
                    </div>
                  </div>
                </div>


                <div class="limiter">
                  <div class="container-table100" style="min-height:auto">
                    <div class="wrap-table100">
                        <div class="table">

                          <div class="row1 header pad1">
                              System Status
                          </div>

                          <?php
                          while($row=mysqli_fetch_array($kuirirun1)){
                          ?>

                          <div class="row1">
                            <div class="cell">
                              Total Admin
                            </div>
                            <div class="cell"  data-title="Pending">
                              <?php echo $row[0];?>
                            </div>
                          </div>

                          <div class="row1">
                            <div class="cell">
                              Total Users
                            </div>
                            <div class="cell" data-title="Pending">
                              <?php echo $row[1];?>
                            </div>
                          </div>

                          <div class="row1">
                            <div class="cell">
                              Total Revenue
                            </div>
                            <div class="cell" data-title="Pending">
                              <?php echo "RM "; echo $row[2];?>
                            </div>
                          </div>

                          <?php } ?>

                        </div>
                    </div>
                  </div>
                </div>

              </blockquote>
            </div>
              <div class="col-md-3 details1">
                <h4 class="header glow" align="center">Settings</h4>
                <br>
                <blockquote>
                <?php
                while($row=mysqli_fetch_array($query)){
                ?>
                <form action="editadmin.php" method="post">
                    <input type="hidden" name="username" value="<?php echo $row[1];?>">
                    <input type="hidden" name="password" value="<?php echo $row[2];?>">
                    <input type="hidden" name="firstname" value="<?php echo $row[3];?>">
                    <input type="hidden" name="lastname" value="<?php echo $row[4];?>">
                    <input type="hidden" name="contactnumber" value="<?php echo $row[5];?>">
                    <input type="hidden" name="email" value="<?php echo $row[6];?>">
                    <input type="hidden" name="image" value="<?php echo $row[7];?>">
                    <input class="login100-form-btn" type="submit" name="submit" value="Edit My Profile">
                  </form>
                <?php } ?>
                <br>
                <form action="deleteadmin1.php" method="post">
                    <input type="hidden" name="username" value="<?php echo $row[1];?>">
                    <input class="login100-form-btn" type="submit" value="Delete My Profile" onclick="return confirm('Are you sure you want to delete your profile ?')">
                  </form><br><br><br>
                  <h4 class="header glow" align="center">Chat</h4>
                  <form action="simplechat/index.php" method="post">
                      <input type="hidden" name="username" value="<?php echo $row[1];?>">
                      <br><input class="login100-form-btn" type="submit" value="Chat Application">
                    </form>
                </blockquote>
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

    <script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
    <script src="assets/vendor/bootstrap/js/popper.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
    <script src="assets/vendor/select2/select2.min.js"></script>
  <!--===============================================================================================-->
    <script src="assets/vendor/tilt/tilt.jquery.min.js"></script>

    <script >
      $('.js-tilt').tilt({
        scale: 1.1
      })
    </script>

  <script src=assets/"js/main.js"></script>

</body>
</html>
