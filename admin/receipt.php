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
  $Collection = $_POST['Collection'];
include("session.php");
$currentuser=$_SESSION['ADMIN_ID'];
$kuiri="SELECT STAT_TOTALCOST from stat where ORDE_ID='".$Order_Id."' limit 100";
$kuirirun=mysqli_query($dbconn,$kuiri) or die ("Can Not Continue");
$kuiri1="SELECT STAT_STATUS from stat where ORDE_ID='".$Order_Id."' limit 100";
$kuirirun1=mysqli_query($dbconn,$kuiri1) or die ("Can Not Continue");
}
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
                            <li><a href="utama.php" class="menu-top-active">MENU</a></li>
                        </ul>
                      <ul id="menu-top" class="nav navbar-nav navbar-right">
                          <li><a href="../admin/laporan.php" >Overall</a></li>
                          <li><a href="../admin/pending.php" >Pending</a></li>
                          <li><a href="../admin/waitingpayment.php">Waiting for Payment</a></li>
                          <li><a href="../admin/printingorder.php">Printing</a></li>
                          <li><a href="../admin/finished.php">Finished</a></li>
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
				  <div class="col-md-7 col-sm-7 col-xs-7">
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
                            <td style="font-weight:bold" align="right">TOTAL PRICE RM: </td>
<?php
while($row=mysqli_fetch_array($kuirirun)){
?>
                          <td><input type="text" readonly value="<?php echo $row[0];?>"></td>
<?php } ?>
                          </tr>
										<tr>
										    <td style="font-weight:bold" align="right">CURRENT STATUS :</td>
<?php
while($row=mysqli_fetch_array($kuirirun1)){
?>
											<td><input type="text" readonly value="<?php echo $row[0];?>"></td>
<?php } ?>
									    </tr>
										<tr>
										    <td style="font-weight:bold" align="right">UPDATING STATUS :</td>
											<td><input type="text" readonly name="sts" value="Finished"/></td>
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
             </div>
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
