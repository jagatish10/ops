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
    <title>REGISTER ADMIN</title>
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
                            <li><a href="../admin/utama.php">ADMIN HOME</a></li>
                            <li><a href="../admin/utama1.php">ACCESSIBILITY</a></li>
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
                <h4 class="header"></h4>

                            </div>

        </div>

        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">ADD ADMIN</h2>
                </div>
                <div class="card-body">
                    	<form action=prosesaddadmin.php method=post enctype="multipart/form-data">


                      <div class="form-row">
                        <div class="name">USERNAME</div>
                        <div class="value">
                        <div class="wrap-input100 validate-input">
                          <input class="input100" name="username" size="30" type="text" required="required" placeholder="EG:mickey10" />
                          <span class="focus-input100"></span>
                        </div>
                      </div>
                    </div>


                    <div class="form-row m-b-55">
                        <div class="name">Name</div>
                        <div class="value">
                            <div class="row row-space">
                                <div class="col-2">
                                  <div class="wrap-input100 validate-input">
                                    <input class="input100"  name="firstname" size="30" type="text" required="required" placeholder="EG:Mickey">
                                    <span class="focus-input100"></span>
                                  </div>
                                </div>

                                <div class="col-2">
                                  <div class="wrap-input100 validate-input">
                                    <input class="input100"  name="lastname" size="30" type="text" required="required"  placeholder="EG:Mouse">
                                    <span class="focus-input100"></span>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>

                        <div class="form-row">
                            <div class="name">E-MAIL</div>
                            <div class="value">
                              <div class="wrap-input100 validate-input">
                                <input class="input100" name="email" size="30" type="email" required="required"  placeholder="EG:mickey_10@gmail.com" />
                                <span class="focus-input100"></span>
                              </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">NUMBER</div>
                            <div class="value">
                              <div class="wrap-input100 validate-input">
                                <input class="input100" name="contactnumber" size=30 maxlength=11 type="tel" pattern="[0-9]{3}-[0-9]{7}" required="required"  placeholder="EG:012-3456789" />
                                <span class="focus-input100"></span>
                              </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">UPLOAD<br>PROFILE<br>PICTURE</div>
                            <div class="value">
                              <div class="input-group">
                                <input type="file" name="image"/>
                              </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                              <div class="wrap-input100 validate-input">
                                <input class="input100" name="password" size=30 maxlength=8 type="password" required="required" placeholder="EG:ab123 (4-8 alphanumeric)">
                                <span class="focus-input100"></span>
                              </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Confirm Password</div>
                            <div class="value">
                              <div class="wrap-input100 validate-input">
                                <input class="input100" name="confirmpassword" size=30 maxlength=8 type="password" required="required" placeholder="Re-type Password"/>
                                <span class="focus-input100"></span>
                              </div>
                            </div>
                        </div>


                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit" name="submit" value="REGISTER" onclick="return confirm('Are you sure you want to register ?')"/>REGISTER</button>
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
<script>
$(document).ready(function(){
     $('#submit').click(function(){
               var extension = $('#image').val().split('.').pop().toLowerCase();
               if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
               {
                    alert('Invalid Image File');
                    $('#image').val('');
                    return false;
               }
     });
});
 </script>
