<?php
include ("session.php");

$kuiri2="Select * from orde WHERE ORDE_SELECTFILE IN (SELECT FILE from stat WHERE STAT_STATUS='Waiting for Payment')";
$kuirirun2=mysqli_query($dbconn,$kuiri2) or die ("Can Not Continue");

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `orde` WHERE ORDE_SELECTFILE IN (SELECT FILE from stat WHERE STAT_STATUS='Waiting for Payment') AND
    CONCAT(`USER_NAME`,`ORDE_SELECTFILE`,`PAYMENT`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);

}
 else {
    $query = "SELECT * FROM `orde` WHERE ORDE_SELECTFILE IN (SELECT FILE from stat WHERE STAT_STATUS='Waiting for Payment')";
    $search_result = filterTable($query);

}

function filterTable($query)
{
    $connect = mysqli_connect("sql5.freemysqlhosting.net", "sql5388011", "BMQ3iMfRsp", "sql5388011");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
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
    <title>PENDING PAYMENTS</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

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
                <a href="logout.php" class="btn btn-danger pull-right" onclick="return confirm('Are you want to logout')">LOG ME OUT</a>
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
                            <li><a href="utama1.php">ACCESSIBILITY</a></li>
                        </ul>
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                          <li><a href="../admin/laporan.php" >Overall</a></li>
                          <li><a href="../admin/pending.php" >Pending</a></li>
                          <li><a href="../admin/waitingpayment.php" class="menu-top-active">Waiting for Payment</a></li>
                          <li><a href="../admin/printingorder.php">Printing</a></li>
                          <li><a href="../admin/finished.php">Finished</a></li>
                       </ul>
						<ul id="menu-top" class="nav navbar-nav navbar-left" style="padding-left:150px" >
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
                <h4 class="header">LIST OF PENDING PAYEMNTS</h4>

                            </div>

        </div>

        <div class="limiter">
          <div class="container-table100" style="min-height:auto">
            <div class="wrap-table100">
              <div class="table100 ver1 m-b-110">
                  <form action="waitingpayment.php" method="post">

                  <div class="wrap-input100 validate-input">
                    <input class="input100"type="text" name="valueToSearch" placeholder="TYPE TO FILTER">
                    <span class="focus-input100" style="color:white"></span>
                    <br><input class="login100-form-btn" type="submit" name="search" value="Filter">
                    <span class="symbol-input100">
                    </span>
                  </div><br><br>


                <table data-vertable="ver1">


                  <thead>
                    <tr class="row100 head">
                      <th class="column100 column1" data-column="column1">USERNAME</th>
                      <th class="column100 column2" data-column="column2">FILENAME</th>
                      <th class="column100 column3"  data-column="column3">PRINTING STATUS</th>
                      <th class="column100 column4"  data-column="column4">PAYMENT</th>
                      <th class="column100 column5"  data-column="column5">PROCEED</th>
                    </tr>
                  </thead>
                  <?php while($row = mysqli_fetch_array($search_result)):?>
                  <form action="" id="frm" method=post>
                  <tbody>
                    <tr class="row100">
                      <td class="column100 column1" data-column="column1"><input type="hidden" name="Username" value="<?php echo $row[0];?>"><?php echo $row[0];?></td>
                      <td class="column100 column6" data-column="column6" style="display:none"><input type="hidden" name="Order_Id" value="<?php echo $row[1];?>"</td>
                      <td class="column100 column2" data-column="column2"><input type="hidden" name="Download" value="<?php echo $row[2];?>"><?php echo $row[2];?></td>
                      <td class="column100 column3" data-column="column3">Waiting for Payment</td>
                      <td class="column100 column7" data-column="column7" style="display:none"><input type="hidden" name="Download" value="<?php echo $row[2];?>"</td>
                      <td class="column100 column8" data-column="column8" style="display:none"><input type="hidden" name="Copies" value="<?php echo $row[3];?>"</td>
                      <td style="display:none"><input type="hidden" name="totalp" value="<?php echo $row[4];?>"</td>
                      <td class="column100 column9" data-column="column9" style="display:none"><input type="hidden" name="Colour" value="<?php echo $row[5];?>"</td>
                      <td class="column100 column10" data-column="column10" style="display:none"><input type="hidden" name="Order" value="<?php echo $row[6];?>"></td>
                      <td class="column100 column11" data-column="column11" style="display:none"><input type="hidden" name="Layout" value="<?php echo $row[7];?>"></td>
                      <td class="column100 column12" data-column="column12" style="display:none"><input type="hidden" name="Sheet" value="<?php echo $row[8];?>"></td>
                      <td class="column100 column13" data-column="column13" style="display:none"><input type="hidden" name="Collection" value="<?php echo $row[10];?>"</td>
                      <td style="display:none"><input type="hidden" name="Comment" value="<?php echo $row[11];?>"</td>
                      <td class="column100 column4" data-column="column4"><input type="hidden" name="Payment" value="<?php echo $row[12];?>"><?php echo $row[12];?></td>


                      <td class="column100 column5" data-column="column5"><input class="btn btn-danger pull-right" type="submit" name="submit" value="PRINT" formaction="status.php"/></td>
                      </form>

                    </tr>
                  <?php endwhile;?>
                  </tbody>



                </table>
                    </form>
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
