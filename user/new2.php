<?php
include("session.php");
$currentuser=$_SESSION['USER_ID'];
$query=mysql_query("SELECT USER_FIRSTNAME FROM user WHERE USER_ID=$currentuser");
$row=mysql_fetch_row($query);
$name=$row[0];
$kuiri="Select USER_LASTNAME from user WHERE USER_ID='$currentuser'";
$kuirirun=mysql_query($kuiri,$dbconn) or die ("Can Not Continue");
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
    <title>ATTACH FILE</title>
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
						<ul id="menu-top" class="nav navbar-nav navbar-left">
                            <li><a><b>Hi,<i><?php echo $name;?></b></a></i></li>
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
                <h4 class="header-line">ATTACH FILE</h4>

                            </div>

        </div>

                  <div class="col-md-6 col-sm-6 col-xs-6">
                      <div class="panel panel-success">

                        <div class="panel-body">
                            <div class="table-responsive">
							<form method="post" action="prosestambah.php" enctype="multipart/form-data">
                                <table class="table table-striped table-bordered table-hover">
									<tbody>
									    <tr>
										    <td style="font-weight:bold" align="right">USER ID :</td>
											<td><input readonly type="text" name="Userid" required="required" value="<?php echo $_SESSION['USER_ID'];?>"/></td>
									    </tr>
										<?php
while($row=mysql_fetch_array($kuirirun)){
?>
										<tr>
										    <td style="font-weight:bold" align="right">USER NAME :</td>
											<td><input readonly type="text" name="Username" required="required" value="<?php echo strtoupper($row[0]);?>"/></td>
									    </tr>
										<?php } ?>
										<tr>
										    <td style="font-weight:bold" align="right">COPIES :</td>
											<td><input type="text" name="Copies" required="required" /></td>
									    </tr>
										<tr>
										    <td style="font-weight:bold" align="right">TOTAL PAGE :</td>
											<td><input type="text" name="totalp" required="required" /></td>
									    </tr>
										<tr>
										    <td style="font-weight:bold" align="right">COLOUR :</td>
											<td><input type="radio" name="jk" required="required" value="Black & White"/>Black & White
											    <input type="radio" name="jk"  required="required" value="Colour"/>Colour</td>
									    </tr>
										<tr>
										    <td style="font-weight:bold" align="right">OPTION :</td>
											<td><input type="radio" name="po" required="required" value="Front"/>One-sided
											    <input type="radio" name="po" required="required" value="Front & Back"/>Two-sided</td>
									    </tr>
										<tr>
										    <td style="font-weight:bold" align="right">LAYOUT :</td>
											<td><input type="radio" name="L" required="required" value="Landscape"/>Landscape
											    <input type="radio" name="L" required="required" value="Portrait"/>Portrait</td>
									    </tr>
										<tr>
										    <td style="font-weight:bold" align="right">PAGE PER SHEET :</td>
											<td><input type="radio" name="pps" required="required" value="1"/>1
												<input type="radio" name="pps" required="required" value="2"/>2
												<input type="radio" name="pps" required="required" value="4"/>4
												<input type="radio" name="pps" required="required" value="6"/>6</td>
									    </tr>
										<tr>
										    <td style="font-weight:bold" align="right">ORDER DATE :</td>
											<td><input name="Date" size="20" type="date" required="required"  /></td>
									    </tr>
										<tr>
											<td style="font-weight:bold" align="right">UPLOAD FILE :</td>
											<td><input type="file" name="fileToUpload" required="required" id="fileToUpload"></td></td>
										</tr>
										<tr>
											<td colspan=2 align="center"><input type="submit" name="submit" value="SEND" onclick="return confirm('Are you sure you want to send ?')"/>
														<input type="Reset" name="Reset" value="CLEAR" onclick="return confirm('Are you sure you want to clear ?')"/></td>
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
