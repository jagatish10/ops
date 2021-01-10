<?php
include ("session.php");
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `orde` WHERE ORDE_SELECTFILE IN (SELECT FILE from stat WHERE STAT_STATUS='Finished') AND
    CONCAT(`USER_NAME`,`ORDE_SELECTFILE`,`COLLECTION`,`ADDRESS`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);

}
 else {
    $query = "SELECT * FROM `orde` WHERE ORDE_SELECTFILE IN (SELECT FILE from stat WHERE STAT_STATUS='Finished')";
    $search_result = filterTable($query);

}

function filterTable($query)
{
    $connect = mysqli_connect("sql12.freesqldatabase.com", "sql12386185", "dWtsJEfg3j", "sql12386185");
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
    <title>ORDERS</title>
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
                <h4 class="header-line">LIST OF ORDERS</h4>

                            </div>

        </div>
				  <div class="col-md-7 col-sm-7 col-xs-7">
                      <div class="panel panel-success">

                        <div class="panel-body">
                            <div class="table-responsive">
                              <form action="finished.php" method="post">
                                <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
                                <input type="submit" name="search" value="Filter"><br><br>
<table class="table table-striped table-bordered table-hover">
                	<thead>
                  		<tr bgcolor="#00ccff"><td colspan=6 style="font-weight:bold" align=center>Finished Order</td></tr>
                  		<tr align=center bgcolor="#999999"><td style="font-weight:bold">USERNAME</td><td style="font-weight:bold">FILENAME</td><td style="font-weight:bold">PRINTING STATUS</td><td style="font-weight:bold">PAYMENT</td><td style="font-weight:bold">COLLECTION</td><td style="font-weight:bold">ADDRESS</td></tr>
                  </thead>
                  <tbody>
<?php while($row = mysqli_fetch_array($search_result)):?>
<tr align=center><td><?php echo $row[0];?></td><td><?php echo $row[2];?></td><td>Finished</td><td><?php echo $row[12];?></td><td><?php echo $row[10];?></td><td><?php echo $row[13];?></td>
<form action="" id="frm" method=post>
<td style="display:none"><input type="hidden" name="Username" value="<?php echo $row[0];?>"></td>
<td style="display:none"><input type="hidden" name="Order_Id" value="<?php echo $row[1];?>"></td>
<td style="display:none"><input type="hidden" name="Download" value="<?php echo $row[2];?>"></td>
<td style="display:none"><input type="hidden" name="Copies" value="<?php echo $row[3];?>"></td>
<td style="display:none"><input type="hidden" name="totalp" value="<?php echo $row[4];?>"></td>
<td style="display:none"><input type="hidden" name="Colour" value="<?php echo $row[5];?>"></td>
<td style="display:none"><input type="hidden" name="Order" value="<?php echo $row[6];?>"></td>
<td style="display:none"><input type="hidden" name="Layout" value="<?php echo $row[7];?>"></td>
<td style="display:none"><input type="hidden" name="Sheet" value="<?php echo $row[8];?>"></td>
<td style="display:none"><input type="hidden" name="Collection" value="<?php echo $row[10];?>"></td>
<td style="display:none"><input type="hidden" name="Comment" value="<?php echo $row[11];?>"></td>
<td style="display:none"><input type="hidden" name="Payment" value="<?php echo $row[12];?>"></td></tr>
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
