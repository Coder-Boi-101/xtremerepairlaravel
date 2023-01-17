<?php
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

?>