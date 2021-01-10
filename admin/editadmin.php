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
                            <li><a href="utama.php" class="menu-top-active">ADMIN HOMEPAGE</a></li>
                        </ul>
						<ul id="menu-top" class="nav navbar-nav navbar-left">
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
                <h4 class="header-line">EDIT MY ADMIN PROFILE</h4>

                            </div>

        </div>

        <div class="col-md-7 col-sm-5 col-xs-6">
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
