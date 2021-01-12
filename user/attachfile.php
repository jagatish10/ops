<?php
include("session.php");
$currentuser=$_SESSION['USER_NAME'];
$query=mysqli_query($dbconn,"SELECT * FROM user WHERE USER_NAME='$currentuser'");
$row=mysqli_fetch_row($query);
$name=$row[1];
$kuiri="Select * from user WHERE USER_NAME='$currentuser'";
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
    <title>ATTACH FILE</title>
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
                            <li><a href="utama1.php" >FILE MANAGEMENT</a></li>
                        </ul>
						<ul id="menu-top" class="nav navbar-nav navbar-left" style="padding-left:150px">
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
                <h4 class="header"></h4>

                            </div>

        </div>

        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">ATTACH FILES</h2>
                </div>
                <div class="card-body">
                    <form action=prosestambah.php method=post enctype="multipart/form-data">


                      <div class="form-row">
                        <div class="name">USERNAME</div>
                        <div class="value">
                        <div class="wrap-input100 ">
                          <input class="input100" readonly type="text" name="Username" required="required" value="<?php echo $_SESSION['USER_NAME'];?>"/>
                          <span class="focus-input100"></span>
                        </div>
                      </div>
                    </div>


                    <?php
                    while($row=mysqli_fetch_array($kuirirun)){
                      ?>
										<?php } ?>

                        <div class="form-row">
                            <div class="name">COPIES</div>
                            <div class="value">
                              <div class="wrap-input100 ">
                                <input class="input100" type="number" name="Copies" required="required" />
                                <span class="focus-input100"></span>
                              </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">TOTAL PAGE</div>
                            <div class="value">
                              <div class="wrap-input100 ">
                                <input class="input100"  type="number" name="totalp" required="required" />
                                <span class="focus-input100"></span>
                              </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">COLOUR</div>
                            <div class="value">
                              <div class="wrap-input100 ">
                                <div class="form-row p-t-20">
                                    <div class="p-t-15">
                                        <label class="radio-container m-r-55">Black & White
                                            <input type="radio" name="jk" required="required" value="Black & White"/>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Colour
                                            <input type="radio" name="jk"  required="required" value="Colour"/>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <span class="focus-input100"></span>
                              </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">OPTION</div>
                            <div class="value">
                              <div class="wrap-input100 ">
                                <div class="form-row p-t-20">
                                    <div class="p-t-15">
                                        <label class="radio-container m-r-55">One-Sided
                                            <input type="radio" name="po" required="required" value="Front"/>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Two-Sided
                                            <input type="radio" name="po" required="required" value="Front & Back"/>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <span class="focus-input100"></span>
                              </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">LAYOUT</div>
                            <div class="value">
                              <div class="wrap-input100 ">
                                <div class="form-row p-t-20">
                                    <div class="p-t-15">
                                        <label class="radio-container m-r-55">Landscape
                                            <input type="radio" name="L" required="required" value="Landscape"/>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Portrait
                                            <input type="radio" name="L" required="required" value="Portrait"/>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <span class="focus-input100"></span>
                              </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">PAGE<br>PER<br>SHEET</div>
                            <div class="value">
                              <div class="wrap-input100 ">
                                <div class="form-row p-t-20">
                                    <div class="p-t-15">
                                        <label class="radio-container m-r-55">1
                                            <input type="radio" name="pps" required="required" value="1"/>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container m-r-55">2
                                            <input type="radio" name="pps" required="required" value="2"/>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container m-r-55">4
                                            <input type="radio" name="pps" required="required" value="4"/>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container m-r-55">6
                                            <input type="radio" name="pps" required="required" value="6"/>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <span class="focus-input100"></span>
                              </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">ORDER DATE</div>
                            <div class="value">
                              <div class="wrap-input100 ">
                                <input class="input100" name="Date" size="20" type="date" required="required"/>
                                <span class="focus-input100"></span>
                              </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="name">UPLOAD<br>FILE</div>
                            <div class="value">
                              <div class="input-group">
                                <input type="file" name="fileToUpload" required="required" id="fileToUpload"/>
                              </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">COLLECTION</div>
                            <div class="value">
                              <div class="wrap-input100 ">
                                <div class="form-row p-t-20">
                                    <div class="p-t-15">
                                        <label class="radio-container m-r-55">Pick Up
                                            <input type="radio" name="dl" required="required" value="Pick Up"/>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container m-r-55">Delivery
                                            <input type="radio" name="dl" required="required" value="Delivery"/>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <span class="focus-input100"></span>
                              </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">DELIVERY DETAILS</div>
                            <div class="value">
                              <div class="wrap-input100 ">
                                <textarea class="input100" type="text" name="address" id="address" placeholder="DELIVERY ADDRESS (IF DELIVERY NEEDED)"/></textarea>
                                <span class="focus-input100"></span>
                              </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">ADDITIONAL COMMENTS</div>
                            <div class="value">
                              <div class="wrap-input100 ">
                                <textarea class="input100" type="text" name="comments" placeholder="MORE DETAILS ABOUT YOUR PRINTING REQUIREMENTS"/></textarea>
                                <span class="focus-input100"></span>
                              </div>
                            </div>
                        </div>


                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit" name="submit" value="SEND" onclick="return confirm('Are you sure you want to send ?')"/>SEND</button>
                        </div>
                        <br>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="Reset" name="Reset" value="CLEAR" onclick="return confirm('Are you sure you want to clear ?')"/>Reset</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
								</form>
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
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
      <!-- <script>
          $(document).ready(function() {
              $("input[type='radio']").change(function() {
                  if ($(this).val() == "Delivery") {
                      $("#address").show();
                  } else {
                      $("#address").hide();
                  }
              });
          });
      </script> -->
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
  <script >
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
<!--===============================================================================================-->
  <script src=assets/"js/main.js"></script>

</body>
</html>
