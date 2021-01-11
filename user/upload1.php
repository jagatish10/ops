<?php
include ("session.php");
$currentuser=$_SESSION['USER_NAME'];
$query=mysqli_query($dbconn,"SELECT * FROM user WHERE USER_NAME='$currentuser'");
$row=mysqli_fetch_row($query);
$name=$row[1];
$kuiri="Select * from stat where STAT_ID='$currentuser'";
$kuirirun=mysqli_query($dbconn,$kuiri) or die ("Can Not Continue");
//$row=mysql_fetch_array($kuirirun);
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
    <title>PENDING PAYMENT</title>
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
        <a href="logout.php" class="btn btn-danger pull-right" onclick="return confirm('Are you sure you want to logout ?')">LOG ME OUT</a>            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                          <li><a href="utama1.php">FILE MANAGEMENT</a></li>
                        </ul>
						<ul id="menu-top" class="nav navbar-nav navbar-left"  style="padding-left:150px">
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
                <h4 class="header">PENDING PAYMENT</h4>

                            </div>

        </div>

        <div class="limiter">
          <div class="container-table100" style="min-height:auto">
            <div class="wrap-table100">
              <div class="table100 ver1 m-b-110">
                <table data-vertable="ver1">
                  <thead>
                    <tr class="row100 head">
                      <th class="column100 column1" data-column="column1">USERNAME</th>
                      <th class="column100 column2" data-column="column2">PRINTING STATUS</th>
                      <th class="column100 column3" data-column="column3">TOTAL COST</th>
                      <th class="column100 column4" data-column="column4">FILENAME</th>
                      <th class="column100 column5" data-column="column5">PAYMENT</th>
                      <th class="column100 column6" data-column="column6">GATEWAY</th>
                      <th class="column100 column7" data-column="column7">DELETE ORDER</th>
                    </tr>
                  </thead>
                  <?php
                  $paypalURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
                  $paypalID = 'ops@business.example.com';
                  $counter=1;
                  while($row=mysqli_fetch_array($kuirirun)){
                  if($row[5]=='Pending'){
                  ?>
                  <tbody>
                    <tr class="row100">
                      <td class="column100 column1" data-column="column1"><?php echo $row[0];?></td>
                      <td class="column100 column2" data-column="column2"><?php echo $row[2];?></td>
                      <td class="column100 column3" data-column="column3"><?php echo $row[3];?></td>
                      <td class="column100 column4" data-column="column4"><?php echo $row[4];?></td>
                      <td class="column100 column5" data-column="column5"><?php echo $row[5];?></td>
                      <td class="column100 column6" data-column="column6"><form target="_self" action="<?php echo $paypalURL; ?>" method="post">
                          <!-- Identify your business so that you can collect the payments. -->
                          <input type="hidden" name="business" value="<?php echo $paypalID; ?>">

                          <!-- Specify a PayPal Shopping Cart Add to Cart button. -->
                          <input type="hidden" name="cmd" value="_cart">
                          <input type="hidden" name="add" value="1">

                          <!-- Specify details about the item that buyers will purchase. -->
                          <input type="hidden" name="item_name" value="<?php echo $row['FILE']; ?>">
                          <input type="hidden" name="item_number" value="<?php echo $row['ORDE_ID']; ?>">
                          <input type="hidden" name="amount" value="<?php echo $row['STAT_TOTALCOST']; ?>">
                          <input type="hidden" name="quantity" value="1">
                          <input type="hidden" name="currency_code" value="USD">


                          <!-- Specify URLs -->
                          <input type="hidden" name="shopping_url" value="https://ops-eprint.herokuapp.com/user/upload1.php">
                          <input type='hidden' name='cancel_return' value='https://ops-eprint.herokuapp.com/paypal/cancel.php'>
                          <input type='hidden' name='return' value='https://ops-eprint.herokuapp.com/paypal/success.php'>
                          <input type='hidden' name='notify_url' value='https://ops-eprint.herokuapp.com/paypal/ipn.php'>

                          <!-- Display the payment button. -->
                          <input type="image" name="submit"
                          <img alt="Add to Cart" width="90% "src="../images/clip9.png"/>
                          <img alt="" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
                      </form></td>
                      <td><form method="post" action="deleteorder.php" enctype="multipart/form-data">

                          <input type="hidden" name="Username" value="<?php echo $row[0]; ?>">
                          <input type="hidden" name="Order_Id" value="<?php echo $row[1]; ?>">


                          <input type="image" name="submit"
                           <img alt="" width="45" src="../images/clip8.png"/>
                      </form></td></td>

                    </tr>

                  </tbody>
                  <?php
                  $counter++;
                  ?>

                  <?php }} ?>
                </table>
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
