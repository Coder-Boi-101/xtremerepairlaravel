<?php

session_start();
header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Connection: close");

// localhost,user,password,db
$conn = mysqli_connect("Localhost","root","","xtremeiphonerepair");
if ($conn->connect_error)
{
echo "Failed to connect to MySQL: " . $conn->connect_error;
}
$connect = new PDO("mysql:host=localhost;dbname=xtremeiphonerepair", "root", "");

// global variables //
$baseurl = 'https://localhost/xtremeiphonerepair/';
$shop = 'https://localhost/xtremeiphonerepair/';
$adminurl = 'https://admin.xtremeiphonerepair.com/';
$maillogo=$baseurl."images/bmr-logo.png";
$adminEmail="xtremewirelesslkld@yahoo.com";
// xtremewirelesslkld@yahoo.com

$totalModelShows=16;

$recipients = array(
'xtremewirelesslkld@yahoo.com' => 'In & Out Wireless',
);
    
    $query = "SELECT * FROM `buy_devices` WHERE status='1' ORDER BY position ASC";
	$result = mysqli_query($conn,$query);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
<title>Buy Devices | Xtreme Wireless</title>
@include('layouts.head')
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
  
    
    <!-- Main Header-->
    @include('layouts.header')
    <!--End Main Header -->

     <!-- Services Section -->
    <section class="services-section-two alternate">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Select your device to get started</h2>
            </div>
            <div class="row">
                <!-- Service Block -->
<?php
	$count=mysqli_num_rows($result);
	if($count>0){
        while($row=mysqli_fetch_array($result)){
            $device_id = $row['device_id'];
            $device_name = $row['device_name'];
            $device_image = $row['device_image'];

            $sql2 = "SELECT * FROM buy_devices_brands WHERE device_id='$device_id'";
            $result2 = $conn->query($sql2);
            if ($result2->num_rows > 0)
            {
    ?>        
                <div class="service-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="buy-brands.php?d=<?php echo $device_id;?>"><img src="<?php echo $adminurl.$device_image;?>" alt="<?php echo $device_name; ?>"></a></figure>
                        </div>
                        <div class="lower-content">
                            <h4><a href="buy-brands.php?d=<?php echo $device_id;?>"><?php echo $device_name; ?></a></h4>
                        </div>
                    </div>
                </div>
<?php
            }
            else
            { ?>
                <div class="service-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="<?php echo $baseurl;?>buy-confirm?v=other"><img src="<?php echo $adminurl.$device_image;?>" alt="<?php echo $device_name; ?>"></a></figure>
                        </div>
                        <div class="lower-content">
                            <h4><a href="<?php echo $baseurl;?>buy-confirm?v=other"><?php echo $device_name; ?></a></h4>
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
    @include('layouts.footer')
