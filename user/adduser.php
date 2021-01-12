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
    <title>CREATE ACCOUNT</title>
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
                            <li><a href="../index.php" class="menu-top-active">HOME</a></li>
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
                        <h2 class="title">CREATE ACCOUNT</h2>
                    </div>
                    <div class="card-body">
                        <form action=prosesadduser.php method=post enctype="multipart/form-data">


                          <div class="form-row">
                            <div class="name">Username</div>
                            <div class="value">
                            <div class="wrap-input100 validate-input">
                  						<input class="input100"  type="text" name="username" required="required" placeholder="EG:mickey10">
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
                                            <input class="input100"  type="text" name="firstname" required="required" placeholder="Firstname">
                                            <span class="focus-input100"></span>
                                          </div>
                                        </div>

                                        <div class="col-2">
                                          <div class="wrap-input100 validate-input">
                                            <input class="input100"  type="text" name="lastname" required="required" placeholder="Lastname">
                                            <span class="focus-input100"></span>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="form-row">
                                <div class="name">Email</div>
                                <div class="value">
                                  <div class="wrap-input100 validate-input">
                                    <input class="input100"  type="email" name="email" required="required" placeholder="EG:mickey10@gmail.com">
                                    <span class="focus-input100"></span>
                                  </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="name">Phone</div>
                                <div class="value">
                                  <div class="wrap-input100 validate-input">
                                    <input class="input100"  type="tel" name="contactnumber" pattern="[0-9]{3}-[0-9]{8}" required="required" placeholder="EG:012-3456789">
                                    <span class="focus-input100"></span>
                                  </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="name">Upload<br>Profile<br>Picture</div>
                                <div class="value">
                                  <div class="input-group">
                                    <input type="file" name="image">
                                  </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="name">Password</div>
                                <div class="value">
                                  <div class="wrap-input100 validate-input">
                                    <input class="input100"  name="password" maxlength=8 type="password" required="required" placeholder="EG:ab123 (4-8 alphanumeric)">
                                    <span class="focus-input100"></span>
                                  </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="name">Confirm Password</div>
                                <div class="value">
                                  <div class="wrap-input100 validate-input">
                                    <input class="input100" name="confirmpassword" maxlength=8 type="password" required="required" placeholder="Re-type Password">
                                    <span class="focus-input100"></span>
                                  </div>
                                </div>
                            </div>


                            <div>
                                <button class="btn btn--radius-2 btn--red" type="submit" name="submit" onclick="return confirm('Are you sure you want to register ?')"/>Register</button>
                            </div>
                            <br>
                            <div>
                                <button class="btn btn--radius-2 btn--red" type="Reset" name="Reset" value="CLEAR" onclick="return confirm('Are you sure you want to clear ?')"/>Reset</button>
                            </div>

                        </form>
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
