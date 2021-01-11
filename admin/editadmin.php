<?php

if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $password = $_POST['password'];
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $contactnumber=$_POST['contactnumber'];
  $email=$_POST['email'];
  $image=$_POST['image'];
}
include ("session.php");
$currentuser=$_SESSION['ADMIN_USERNAME'];

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
    <title>EDIT ADMIN</title>
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
                            <li><a href="utama.php">ADMIN HOMEPAGE</a></li>
                        </ul>
						<ul id="menu-top" class="nav navbar-nav navbar-left" style="padding-left:150px">
                            <li><a><b>Hi,<i><?php echo $_SESSION['ADMIN_USERNAME'];?></b></a></i></li>
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
                    <h2 class="title">EDIT MY PROFILE</h2>
                </div>
                <div class="card-body">


                  <form action=proseseditadmin.php method=post enctype="multipart/form-data">


                      <div class="form-row">
                        <div class="name">Username</div>
                        <div class="value">
                        <div class="wrap-input100 validate-input">
                          <input class="input100"  readonly name="username" size="30" type="text" required="required" value="<?php echo $currentuser;?>">
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
                                    <input class="input100" name="firstname" size="30" type="text" required="required" value="<?php echo $firstname;?>">
                                    <span class="focus-input100"></span>
                                  </div>
                                </div>

                                <div class="col-2">
                                  <div class="wrap-input100 validate-input">
                                    <input class="input100" name="lastname" size="30" type="text" required="required" value="<?php echo $lastname;?>">
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
                            <input class="input100"  name="email" size="30" type="text" required="required" value="<?php echo $email;?>">
                            <span class="focus-input100"></span>
                          </div>
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="name">Phone</div>
                        <div class="value">
                          <div class="wrap-input100 validate-input">
                            <input class="input100" name="contactnumber" size=30 maxlength=11 type="text" required="required" value="<?php echo $contactnumber;?>">
                            <span class="focus-input100"></span>
                          </div>
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="name">Upload<br>Profile<br>Picture</div>
                        <div class="value">
                          <div class="input-group">
                            <input input type="file" name="image">
                          </div>
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="name">Password</div>
                        <div class="value">
                          <div class="wrap-input100 validate-input">
                            <input class="input100"  name="password" size=30 maxlength=8 type="text" required="required" value="<?php echo $password;?>">
                            <span class="focus-input100"></span>
                          </div>
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="name">Confirm Password</div>
                        <div class="value">
                          <div class="wrap-input100 validate-input">
                            <input class="input100" name="confirmpassword" size=30 maxlength=8 type="text" required="required" value="<?php echo $password;?>">
                            <span class="focus-input100"></span>
                          </div>
                        </div>
                    </div>

                    <div>
                        <input class="btn btn--radius-2 btn--red" type="submit" name="submit" value="UPDATE" onclick="return confirm('Are you sure you want to update ?')"</input>
                    </div>


                    </form>
              </div>
              </div>


             </div>

        <!-- <div class="col-md-7 col-sm-5 col-xs-6">
            <div class="panel panel-success">

              <div class="panel-body">
                  <div class="table-responsive">
    <form action=proseseditadmin.php method=post enctype="multipart/form-data">
                      <table class="table table-striped table-bordered table-hover">
        <tbody>
            <tr>
                                  <td style="font-weight:bold" align="right"><font color="red">*</font>USERNAME :</td>
                                  <td><input readonly name="username" size="30" type="text" required="required" value="<?php echo $currentuser;?>"> </td>
                              </tr>
          <tr>
                                  <td style="font-weight:bold" align="right"><font color="red">*</font>FIRSTNAME :</td>
                                  <td><input name="firstname" size="30" type="text" required="required" value="<?php echo $firstname;?>"> </td>
                              </tr>
          <tr>
                                  <td style="font-weight:bold" align="right"><font color="red">*</font>LASTNAME :</td>
                                  <td><input name="lastname" size="30" type="text" required="required" value="<?php echo $lastname;?>"> </td>
                              </tr>
          <tr>
                                  <td style="font-weight:bold" align="right"><font color="red">*</font>E-MAIL :</td>
                                  <td><input name="email" size="30" type="text" required="required" value="<?php echo $email;?>">  </td>
                              </tr>
          <tr>
                                  <td style="font-weight:bold" align="right"><font color="red">*</font>CONTACT NUMBER :</td>
                                  <td><input name="contactnumber" size=30 maxlength=11 type="text" required="required" value="<?php echo $contactnumber;?>">  </td>
                              </tr>
          <tr>
                                  <td style="font-weight:bold" align="right"><font color="red">*</font>UPLOAD PROFILE PICTURE :</td>
                                  <td><input type="file" name="image"></td>

                              </tr>
          <tr>
                                  <td style="font-weight:bold" align="right"><font color="red">*</font>PASSWORD :</td>
                                  <td><input name="password" size=30 maxlength=8 type="text" required="required" value="<?php echo $password;?>"> </td>
                              </tr>
                              <tr>
                                  <td style="font-weight:bold" align="right"><font color="red">*</font>CONFIRM PASSWORD :</td>
                                  <td><input name="confirmpassword" size=30 maxlength=8 type="text" required="required" value="<?php echo $password;?>"> </td>
                              </tr>
          <tr align=center>
          <td colspan=2><input type="submit" name="submit" value="UPDATE" onclick="return confirm('Are you sure you want to update ?')"/></td>
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
