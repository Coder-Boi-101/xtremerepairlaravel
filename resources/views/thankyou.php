<?php
session_start();
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Thankyou | Xtreme Wireless</title>
<?php include('includes/head.php'); ?>

<style>
.product-details .basic-details .theme-btn{
	margin-left:17px;
}
.error{
    color: red !important;
    font-weight: 600 !important;
    font-size: 25px !important;
}
.success{
    color: #fc2a28 !important;
    font-weight: 600 !important;
    font-size: 25px !important;
}
</style>
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader">
        <?php include('includes/preloader.php'); ?>
    </div>
    
    <!-- Main Header-->
    <?php include('includes/header.php'); ?>
    <!--End Main Header -->

    
    <?php
    if(isset($_SESSION['sell_order_success']))
    {
        $message=$_SESSION['sell_order_success'];
    ?>
    <div class="checkout-page">
        <div class="auto-container">
            <!--Default Links-->
            <ul class="default-links">
                <li class="text-center success"><?php echo $message;?></li>
            </ul>
        </div>
    </div>
    <?php
    unset ($_SESSION["sell_order_success"]);
    }
    if(isset($_SESSION['sell_order_error']))
    {
        $message=$_SESSION['sell_order_error'];
    ?>
    <div class="checkout-page">
        <div class="auto-container">
            <!--Default Links-->
            <ul class="default-links">
                <li class="text-center error"><?php echo $message;?></li>
            </ul>
        </div>
    </div>
    <?php 
    unset ($_SESSION["sell_order_error"]);
    }
    ?>
    





    <?php
    if(isset($_SESSION['contact_success']))
    {
        $message=$_SESSION['contact_success'];
    ?>
    <div class="checkout-page">
        <div class="auto-container">
            <!--Default Links-->
            <ul class="default-links">
                <li class="text-center success"><?php echo $message;?></li>
            </ul>
        </div>
    </div>
    <?php
    unset ($_SESSION["contact_success"]);
    }
    if(isset($_SESSION['contact_error']))
    {
        $message=$_SESSION['contact_error'];
    ?>
    <div class="checkout-page">
        <div class="auto-container">
            <!--Default Links-->
            <ul class="default-links">
                <li class="text-center error"><?php echo $message;?></li>
            </ul>
        </div>
    </div>
    <?php 
    unset ($_SESSION["contact_error"]);
    }
    ?>





    <?php
    if(isset($_SESSION['coupon_success']))
    {
        $message=$_SESSION['coupon_success'];
    ?>
    <div class="checkout-page">
        <div class="auto-container">
            <!--Default Links-->
            <ul class="default-links">
                <li class="text-center success"><?php echo $message;?></li>
            </ul>
        </div>
    </div>
    <?php
    unset ($_SESSION["coupon_success"]);
    }
    if(isset($_SESSION['coupon_error']))
    {
        $message=$_SESSION['coupon_error'];
    ?>
    <div class="checkout-page">
        <div class="auto-container">
            <!--Default Links-->
            <ul class="default-links">
                <li class="text-center error"><?php echo $message;?></li>
            </ul>
        </div>
    </div>
    <?php 
    unset ($_SESSION["coupon_error"]);
    }
    ?>    


    <!-- Main Footer -->
    <?php include('includes/footer.php'); ?>
    <!-- End Main Footer -->
</div>  
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="la la-angle-double-up"></span></div>


<script src="js/jquery.js"></script> 
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/script.js"></script>
</body>
</html>