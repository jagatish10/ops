<?php
    if(isset($_POST['submit']) || $username = $_POST['username']){
  $username = $_POST['username'];
	$total_cost = $_POST['total_cost'];
	$txn_id = $_POST['txn_id'];
	$file = $_POST['file'];
  $collection = $_POST['collection'];
	$payment = $_POST['payment'];
	$payer_email = $_POST['payer_email'];
include("session.php");
$currentuser=$_SESSION['USER_NAME'];
}
$t=time();
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
    <title>RECEIPT</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

      <script src='https://kit.fontawesome.com/a076d05399.js'></script>
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

      <link rel="stylesheet" type="text/css" href="assets/css/table.css">
      <link rel="stylesheet" type="text/css" href="assets/css/table2.css">


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
                            <li><a href="utama1.php" class="menu-top-active">MENU</a></li>
                        </ul>
						<ul id="menu-top" class="nav navbar-nav navbar-left" style="padding-left:150px">
                            <li><a><b>Hi,<i><?php echo $currentuser;?></b></a></i></li>
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
                <h4 class="header">RECEIPT</h4>

                            </div>

        </div>

                              <form method="post" action="utama1.php">
                                <div class="container">
                              <div class="row">
                                  <div class="well col-xs-10 col-sm-10 col-md-8 col-xs-offset-1 col-sm-offset-1 col-md-offset-2" id="printarea">
                                      <div class="row">
                                          <div class="col-xs-6 col-sm-6 col-md-6">
                                              <address>
                                                  <img width="30% "src="../images/receipt2.png"/>
                                                  <br>
                                                  <i class="fas fa-envelope" style="color:black"></i> ops@business.example.com
                                                  <br>
                                                  <i class="fa fa-phone" style="color:black"></i> 011-24080780
                                              </address>
                                          </div>
                                          <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                                              <em>Payer: <?php echo $currentuser?></em>
                                              <br>
                                              <em>Receipt ID: <?php echo $txn_id?></em>
                                              <br>
                                              <em>Date: <?php echo(date("Y-m-d",$t))?></em>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="text-center">
                                              <h1>Receipt</h1>
                                          </div>
                                          </span>
                                          <table class="table table-striped">
                                              <thead>
                                                  <tr>
                                                      <th class="text-center">Filename</th>
                                                      <th colspan="2" class="text-center">Collection</th>
                                                      <th colspan="2" class="text-center">Payment</th>
                                                      <th class="text-center">Total</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <tr>
                                                      <td class="col-md-5"><em><?php echo $file?></em></h4></td>
                                                      <td colspan="2" class="col-md-1 text-center"><?php echo $collection?></td>
                                                      <td colspan="2" class="col-md-1 text-center"><?php echo $payment?></td>
                                                      <td class="col-md-1 text-center"><?php echo '$'.$total_cost?></td>
                                                  </tr>

                                                  <tr>
                                                      <td>   </td>
                                                      <td>   </td>
                                                      <td>   </td>
                                                      <td>   </td>
                                                      <td class="text-right"><h4><strong>Total: </strong></h4></td>
                                                      <td class="text-center text-danger"><h4><strong><?php echo '$'.$total_cost?></strong></h4></td>
                                                  </tr>
                                              </tbody>
                                          </table>
                                          <div class="text-center">
                                              <em>This is a computer-generated document. No signature is required.</em>
                                          </div>
                                          <br>
                                          <button type="button" class="btn btn-success btn-lg btn-block" onClick="window.print(printarea)">
                                              PRINT   <span class="glyphicon glyphicon-chevron-right"></span>
                                          </button></td>
                                      </div>
                                  </div>
                              </div>
                              </form>


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
