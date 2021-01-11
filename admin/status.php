<?php
  if(isset($_POST['submit'])){
  $ID = $_POST['Username'];
    $Order_Id = $_POST['Order_Id'];
	$Copies = $_POST['Copies'];
	$totalp = $_POST['totalp'];
	$Colour = $_POST['Colour'];
	$Order = $_POST['Order'];
	$Layout = $_POST['Layout'];
	$PerSheet = $_POST['Sheet'];
	$Download = $_POST['Download'];
  $Comment = $_POST['Comment'];
  $Payment = $_POST['Payment'];
}
include("session.php");
$currentuser=$_SESSION['ADMIN_ID'];
$kuiri="SELECT STAT_STATUS from stat where ORDE_ID='".$Order_Id."' limit 1";
$kuirirun=mysqli_query($dbconn,$kuiri) or die ("Can Not Continue");
$kuiri1="SELECT STAT_TOTALCOST from stat where ORDE_ID='".$Order_Id."' limit 1";
$kuirirun1=mysqli_query($dbconn,$kuiri1) or die ("Can Not Continue");
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
    <title>PRINT STATUS</title>
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
  <!--  <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css"> -->
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
    <link href="assets/css/form.css" rel="stylesheet" media="all"

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
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                          <li><a href="../admin/laporan.php" >Overall</a></li>
                          <li><a href="../admin/pending.php" >Pending</a></li>
                          <li><a href="../admin/waitingpayment.php">Waiting for Payment</a></li>
                          <li><a href="../admin/printingorder.php">Printing</a></li>
                          <li><a href="../admin/finished.php">Finished</a></li>
                       </ul>
						<ul id="menu-top" class="nav navbar-nav navbar-left"  style="padding-left:150px">
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

            </div>
		</div>

    <div class="wrapper wrapper--w790">
        <div class="card card-5">
            <div class="card-heading">
                <h2 class="title">PRINT STATUS</h2>
            </div>
            <div class="card-body">
                <form method="post" action="prosestatus.php">



                  <div class="form-row">
                    <div class="name">USERNAME</div>
                    <div class="value">
                    <div class="wrap-input100 validate-input">
                      <input class="input100" type="text" readonly name="Matricnumber" required="required" value="<?php echo $ID;?>">
                      <span class="focus-input100"></span>
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="name">COPIES</div>
                  <div class="value">
                  <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" readonly name="amount" required="required" value="<?php echo $Copies;?>">
                    <span class="focus-input100"></span>
                  </div>
                </div>
              </div>

              <div class="form-row">
                <div class="name">TOTAL PAGE</div>
                <div class="value">
                <div class="wrap-input100 validate-input">
                  <input class="input100" type="text" readonly name="totalp" required="required" value="<?php echo $totalp;?>">
                  <span class="focus-input100"></span>
                </div>
              </div>
            </div>

            <div class="form-row">
              <div class="name">COLOUR</div>
              <div class="value">
              <div class="wrap-input100 validate-input">
                <input class="input100" type="text" readonly name="colour" required="required" value="<?php echo $Colour;?>">
                <span class="focus-input100"></span>
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="name">PAGE ORDER</div>
            <div class="value">
            <div class="wrap-input100 validate-input">
              <input class="input100" type="text" readonly name="order" required="required" value="<?php echo $Order;?>">
              <span class="focus-input100"></span>
            </div>
          </div>
        </div>

        <div class="form-row">
          <div class="name">PAGE<br>LAYOUT</div>
          <div class="value">
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" readonly name="layout" required="required" value="<?php echo $Layout;?>">
            <span class="focus-input100"></span>
          </div>
        </div>
      </div>

        <div class="form-row">
          <div class="name">PAGE<br>PER<br>SHEET</div>
          <div class="value">
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text"  readonly name="sheet" required="required" value="<?php echo $PerSheet;?>">
            <span class="focus-input100"></span>
          </div>
        </div>
      </div>

  <div class="form-row">
      <div class="name">ADDITIONAL COMMENTS</div>
      <div class="value">
        <div class="wrap-input100 ">
          <input class="input100" readonly name="comment" value="<?php echo $Comment;?>"></input>
          <span class="focus-input100"></span>
        </div>
      </div>
  </div>

  <div class="form-row">
      <div class="name">TOTAL<br>PRICE<br>RM</div>
      <div class="value">
        <div class="wrap-input100 ">
          <?php
          while($row=mysqli_fetch_array($kuirirun1)){
          ?>
          <input class="input100" type="text" readonly value="<?php echo $row[0];?>"></input>
          <span class="focus-input100"></span>
          <?php } ?>
        </div>
      </div>
  </div>


  <div class="form-row">
      <div class="name">CURRENT STATUS</div>
      <div class="value">
        <div class="wrap-input100 ">
          <?php
          while($row=mysqli_fetch_array($kuirirun)){
          ?>
          <input class="input100" <input type="text" readonly value="<?php echo $row[0];?>"></input>
          <?php } ?>
          <span class="focus-input100"></span>
        </div>
      </div>
  </div>


  <div class="form-row">
      <div class="name">UPDATING STATUS</div>
      <div class="value">
        <div class="wrap-input100 ">
          <input class="input100" type="text" readonly name="sts" value="Printing"/></input>
          <span class="focus-input100"></span>
        </div>
      </div>
  </div>

  <input type="hidden" name="file_link" value="<?php echo $Download;?>">
                      <tr>
                        <td colspan=2 align="center"><input class="btn btn--radius-2 btn--red" type="submit" name="submit" required="required" value="UPDATE"/></td>
                              <input type="hidden" name="filelink" value="<?php echo $Download;?>">
                      </tr>

                </form>
            </div>
        </div>
    </div>

				  <!-- <div class="col-md-7 col-sm-7 col-xs-7">
                      <div class="panel panel-success">

                        <div class="panel-body">
                            <div class="table-responsive">
                                <form method="post" action="prosestatus.php">
                                <table class="table table-striped table-bordered table-hover">
									<tbody>
                    <tr>
                        <td style="font-weight:bold" align="right">USERNAME :</td>
                      <td><input type="text" readonly name="Matricnumber" required="required" value="<?php echo $ID;?>"></td>
                      </tr>
                      <tr>
										    <td style="font-weight:bold" align="right">COPIES :</td>
											<td><input type="text" readonly name="amount" required="required" value="<?php echo $Copies;?>"></td>
									    </tr>
										<tr>
										    <td style="font-weight:bold" align="right">TOTAL PAGE :</td>
											<td><input type="text" readonly name="totalp" required="required" value="<?php echo $totalp;?>"></td>
									    </tr>
										<tr>
										    <td style="font-weight:bold" align="right">COLOUR :</td>
											<td><input type="text" readonly name="colour" required="required" value="<?php echo $Colour;?>"></td>
									    </tr>
										<tr>
										    <td style="font-weight:bold" align="right">PAGE ORDER :</td>
											<td><input type="text" readonly name="order" required="required" value="<?php echo $Order;?>"></td>
									    </tr>
										<tr>
										    <td style="font-weight:bold" align="right">PAGE LAYOUT :</td>
											<td><input type="text" readonly name="layout" required="required" value="<?php echo $Layout;?>"></td>
									    </tr>
										<tr>
										    <td style="font-weight:bold" align="right">PAGE PER SHEET :</td>
											<td><input type="text"  readonly name="sheet" required="required" value="<?php echo $PerSheet;?>"></td>
									    </tr>
                      <tr>
                          <td style="font-weight:bold" align="right">ADDITIONAL COMMENTS :</td>
                        <td><textarea readonly name="comment" rows="5" cols="40" value="<?php echo $Comment;?>"></textarea></td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold" align="right">TOTAL PRICE RM: </td>
<?php
while($row=mysqli_fetch_array($kuirirun1)){
?>
                          <td><input type="text" readonly value="<?php echo $row[0];?>"></td>
<?php } ?>
                          </tr>
										<tr>
										    <td style="font-weight:bold" align="right">CURRENT STATUS :</td>
<?php
while($row=mysqli_fetch_array($kuirirun)){
?>
											<td><input type="text" readonly value="<?php echo $row[0];?>"></td>
<?php } ?>
									    </tr>
										<tr>
										    <td style="font-weight:bold" align="right">UPDATING STATUS :</td>
											<td><input type="text" readonly name="sts" value="Printing"/></td>
									    </tr>
<input type="hidden" name="filelink" value="<?php echo $Download;?>">
										<tr>
											<td colspan=2 align="center"><input type="submit" name="submit" required="required" value="UPDATE"/></td>
										</tr>
									</tbody>
                                </table>
								</form>
                            </div>
                        </div>
                    </div>
             </div> -->
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
