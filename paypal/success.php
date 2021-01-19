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
    <title>HOME</title>
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

                    <img src="assets/img/opslogo.png" />
                </a>

            </div>
        </div>
    </div>

    <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                         <li><a href="../user/utama.php">USER HOME</a></li>
                       </ul>
                         <ul id="menu-top" class="nav navbar-nav navbar-right">
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header">Online Printing System</h4>

                </div>
     </div>

<?php
include("../dbconnect.php");


//Get payment information from PayPal
$txn_id = $_GET['tx'];
$payment_gross = $_GET['amt'];
$currency_code = $_GET['cc'];
$payment_status = $_GET['st'];

if(!empty($txn_id)){
    //Check if payment data exists with the same TXN ID.
    $paymentResult=mysqli_query($dbconn,"SELECT * FROM payments WHERE txn_id = '".$txn_id."'");
    //$paymentResult = $db->query("SELECT * FROM payments WHERE txn_id = '".$txn_id."'");
    if($paymentResult->num_rows > 0){
        //payment information
        $paymentRow = $paymentResult->fetch_assoc();
        $payment_id = $paymentRow['payment_id'];

        //order items details
        $orderItemResult=mysqli_query($dbconn,"SELECT p.FILE, i.gross_amount FROM stat_success as i LEFT JOIN stat as p ON p.ORDE_ID = i.item_id WHERE payment_id = '".$payment_id."'");
      //  $orderItemResult = $db->query("SELECT p.name, i.quantity, i.gross_amount FROM order_items as i LEFT JOIN products as p ON p.id = i.item_number WHERE payment_id = '".$payment_id."'");
?>

     <h1>Your payment has been successful.</h1>
     <h2>Payment ID: <?php echo $payment_id; ?></h2>
     <h2>Payment Gross: <?php echo '$'.$paymentRow['payment_gross'].' '.$paymentRow['currency_code']; ?></h2>
     <?php if($orderItemResult->num_rows > 0){ ?>
     <h3>Order Items</h3>

    <table class="table table-striped table-bordered table-hover" style="width:50%">
        <tr>
            <th>#</th>
            <th>Filename</th>
          <!--  <th>Quantity</th> -->
            <th>Gross Amount</th>
        </tr>
    <?php $i=0; while($item = $orderItemResult->fetch_assoc()){ $i++; ?>
        <tr>
            <td align="center"><?php echo $i; ?></td>
            <td align="center"><?php echo $item['FILE']; ?></td>
        <!--    <td align="center"><?php //echo $item['quantity']; ?></td> -->
            <td align="center"><?php echo '$'.$item['gross_amount'].' '.$paymentRow['currency_code']; ?></td>
        </tr>
    <?php } ?>
    </table>
    <?php } ?>

<?php }else{ ?>
    <h1>Your payment has been successful.</h1>
    <h1>Reload the page to view the order table.</h1>
    <h2>TXN ID: <?php echo $txn_id; ?></h2>
    <h2>Payment Gross: <?php echo '$'.$payment_gross.' '.$currency_code; ?></h2>
<?php } }else{ ?>
    <h1>Your payment has failed.</h1>
<?php } ?>
<a href="https://ops-eprint.herokuapp.com/user/utama.php">Back to home</a>

</div>
</div>

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
