<?php
    include('includes/config.php');
    
    $sql = "SELECT * FROM sell_devices WHERE status='1' order by position asc";
    $result = $conn->query($sql);

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Sell Devices | Xtreme Wireless</title>
<?php include('includes/head.php'); ?>
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

    <!-- Services Section -->
        <section class="services-section-two alternate">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Select your device to get started</h2>
            </div>
            <div class="row">

                    

                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $deviceID=$row['device_id'];
                        $deviceName=$row['device_name'];
                        $deviceImage=$row['device_image'];
                        if($deviceID=='2'){
                    ?>
                        <!-- other devices Block -->
                        <div class="service-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="sell-brands?d=<?php echo $deviceID;?>"><img src="<?php echo $adminurl.$deviceImage;?>" alt="<?php echo $deviceName;?>"></a></figure>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="sell-brands?d=<?php echo $deviceID;?>"><?php echo $deviceName;?></a></h4>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                        else if($deviceID=='1')
                        {
                            ?>
                            <!-- iPhone Block -->
                        <div class="service-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="sell-models?d=1&b=2"><img src="https://t3portal.boostmyrepair.com/buybrandimages/27-06-2022-1656337749iPhone.jpg" alt="iPhone"></a></figure>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="sell-models?d=1&b=2">iPhone</a></h4>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        else if($deviceID=='3')
                        {
                            ?>
                        <!-- ipad Block -->
                        <div class="service-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="sell-models?d=3&b=4"><img src="https://t3portal.boostmyrepair.com/buybrandimages/27-06-2022-1656337765ipad.jpg" alt="iPad"></a></figure>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="sell-models?d=3&b=4">iPad</a></h4>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        else if($deviceID=='4')
                        {
                            ?>
                        <!-- other Block -->
                        <div class="service-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="sell-confirm?v=other"><img src="https://t3portal.boostmyrepair.com/selldeviceimages/other.jpg" alt="Other"></a></figure>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="sell-confirm?v=other">Other</a></h4>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        else
                        {
                            ?>
                            <div class="service-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="sell-brands?d=<?php echo $deviceID;?>"><img src="<?php echo $adminurl.$deviceImage;?>" alt="<?php echo $deviceName;?>"></a></figure>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="sell-brands?d=<?php echo $deviceID;?>"><?php echo $deviceName;?></a></h4>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                    } 
                }
                ?>

                    

            </div>
        </div>
    </section>
    <!--End Services Section -->

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
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/script.js"></script>
</body>
</html>