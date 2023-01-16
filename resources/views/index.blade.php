
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Smartphone Repair Shop Lakeland FL |Computer & Tablet Repair</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Iphone fix,Iphone repair near me,best iphone repair services,iphone screen repair,iphone battery replacement,iphone battery fix,iphone back glass repair,iphone camera repair,Iphone charging port repair,apple iphone repair,smartphone repair in Lakeland,smartphone repair near me,samsung phone repair,cellphone repair,cellphone repair in Lakeland,cellphone repair near me,Cellphone screen repair,android repair,laptop repair,Laptop repair near me,laptop screen repair,laptop cracked screen repair,tablet repair,tablet repair near me,iPad screen repair near me,iPad repair,iPad glass repair,iPad repair store,Best computer repair,Pc repair near me,MacBook repair store,MacBook repair store in orange blossom,video game repair near me,gaming console repair,Nintendo repair,xbox repair,ps4 repair near me,Ps4 overheating fix,gaming console hdmi port replacement"/>    
	<meta name="description" content="Xtreme Iphone Repair is one of the best cell phone repair store in Lakeland FL , providing iPhone repair services near me, laptop repair and iwatch repair, gaming console repair, etc">
	<meta name="copyright"content="Xtreme Wireless">
	<meta name="language" content="ES">
	<meta name="topic" content="Repair Services">
	<meta name="Classification" content="Business">
	<meta name="author" content="Xtreme Wireless">
	<meta name="reply-to" content="">
	<meta name="coverage" content="USA">
	<meta name="distribution" content="USA">
	<meta name="rating" content="General">
	<meta name="revisit-after" content="2 days">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="canonical" href="https://xtremeiphonerepair.com/">
	<meta name="url" content="https://xtremeiphonerepair.com/">
	<meta name="identifier-URL" content="https://xtremeiphonerepair.com/">
@extends('layouts.head')
<style>
.contact-section .contact-form{
	max-width:100% !important;
}
/* @import url("https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

body {
  --main-font: "Poppins", sans-serif;
  --title-font: "Playfair Display", serif;
  --main-clr: #ff5600;
  --secondary-clr: #9c27b0;
  --dark-clr: #111;
} */

h3.title {
  font-size: 50px;
  font-family: var(--title-font);
  font-weight: 600;
  color: var(--main-clr);
  position: relative;
}

.testimonail {
  display: flex;
  align-items: flex-start;
  flex-direction: column;
  justify-content: space-between;
  min-height: 490px;
  border-radius: 9px;
  overflow: hidden;
  box-shadow: 10px 20px 30px rgba(0, 0, 0, 0.1);
  background-color: #fff;
  transition: 0.3s ease;
}

.testimonail {
  /* opacity: 0.5; */
  filter: brightness(75%);
  box-shadow: 10px 20px 5px rgba(0, 0, 0, 0.1);
  transform: scale(0.9);
  /* filter: blur(3px); */
}

.testimonail:hover {
  transform: scale(1.1);
  /* opacity: 1; */
  filter: brightness(100%);
  box-shadow: 10px 20px 200px rgba(0, 0, 0, 0.1);
  z-index: 10;
}

.testimonail:hover .info {
  background-color: #404040;
}

.testimonail .text {
  display: flex;
  align-items: flex-start;
  flex-direction: column;
  padding: 35px;
}

.testimonail .text .quote {
  font-size: 100px;
  font-family: "Playfair Display", serif;
  color: #046CC1;
}

.testimonail .text .review {
  width: 300px;
  color: #555;
  /* 210 */
  transform: translateY(-36%);
  /* 170 */
  /* 490 */
  font-family: var(--main-font);
}

.testimonail .info {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  background-color: #046CC1;
  position: relative;
  width: 100%;
  height: 200px;
  border-top-left-radius: 9px;
  border-top-right-radius: 9px;
  /* 490 290 */
  transition: 0.3s ease;
}

.testimonail .info .pfp img {
  aspect-ratio: 1 / 1;
  object-fit: cover;
  z-index: 10;
  width: 100%;
  max-width: 100%;
  min-width: 100%;
  min-height: 130%;
  height: 130%;
}

.testimonail .info .pfp {
  width: 100px;
  position: absolute;
  border-radius: 50%;
  border: 5px solid #fff;
  overflow: hidden;
  top: -50px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.testimonail .info .information {
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-direction: column;
  transform: translateY(15px);
}

.testimonail .info .information .name {
  font-size: 23px;
  color: #fff;
  font-family: var(--title-font);
}

.testimonail .info .information .social {
  font-size: 23px;
}

.testimonail .info .information .social a {
  color: #ededed;
  text-decoration: none;
  transition: 0.3s ease;
}
@media only screen and (max-width: 600px) {
	.hide-mobile{
		display:block !important;
	}
}
.addReadMore.showlesscontent .SecSec,
.addReadMore.showlesscontent .readLess {
    display: none;
}

.addReadMore.showmorecontent .readMore {
    display: none;
}

.addReadMore .readMore,
.addReadMore .readLess {
    font-weight: bold;
    margin-left: 2px;
    color: blue;
    cursor: pointer;
}

.addReadMoreWrapTxt.showmorecontent .SecSec,
.addReadMoreWrapTxt.showmorecontent .readLess {
    display: block;
}
</style>
</head>
<body>
<div class="page-wrapper"> 
    <!-- Main Header-->
    @include('layouts.header')
    <!--End Main Header -->
<!--Main Slider-->
    <section class="main-slider">
        <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                <ul>
                    <!-- Slide 1 -->
                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1688" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/slide1.png" data-title="Slide Title" data-transition="parallaxvertical">
                        
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="images/main-slider/slide1.png"> 

                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="['570','570','570','570']"
                        data-text-align="center"
                        data-hoffset="['0','0','15','15']"
                        data-voffset="['-115','-115','-95','-145']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"delay":0,"split":"chars","splitdelay":0.05,"speed":2000,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <h2>Broken Smartphone<br>We Can Fix That</h2>
                        </div>

                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-text-align="center"
                        data-whitespace="normal"
                        data-width="['570','570','690','570']"
                        data-hoffset="['0','0','15','15']"
                        data-voffset="['40','40','40','20']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                           <div class="text"></div>
                        </div>

                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="['570','570','570','570']"
                        data-hoffset="['0','0','15','15']"
                        data-voffset="['155','155','155','155']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <div class="btn-box">
                                <a href="get-instant-quote" class="theme-btn btn-style-one"><span>Fix My Cellphone</span></a>
                                <!-- <a href="content.html" class="theme-btn btn-style-two"><span>Contact us</span></a> -->
                            </div>
                        </div>
                    </li>

                    <!-- Slide 2 -->
                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/slide1.png" data-title="Slide Title" data-transition="parallaxvertical">
                        
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="images/main-slider/slide2.jpg"> 

                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="['570','570','570','570']"
                        data-text-align="center"
                        data-hoffset="['0','0','15','15']"
                        data-voffset="['-115','-115','-95','-145']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"delay":0,"split":"chars","splitdelay":0.05,"speed":2000,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <h2>Repairing Your<br>Cellphone Battery</h2>
                        </div>

                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-text-align="center"
                        data-whitespace="normal"
                        data-width="['570','570','690','570']"
                        data-hoffset="['0','0','15','15']"
                        data-voffset="['40','40','40','20']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                           <div class="text"></div>
                        </div>

                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="['570','570','570','570']"
                        data-hoffset="['0','0','15','15']"
                        data-voffset="['155','155','155','155']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <div class="btn-box">
                                <a href="get-instant-quote" class="theme-btn btn-style-one"><span>Fix My Cellphone</span></a>
                                <!-- <a href="content.html" class="theme-btn btn-style-two"><span>Contact us</span></a> -->
                            </div>
                        </div>
                    </li>

                    <!-- Slide 3 -->
                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1690" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/slide2.jpg" data-title="Slide Title" data-transition="parallaxvertical">
                        
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="images/main-slider/slide3.jpg"> 

                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="['570','570','570','570']"
                        data-text-align="center"
                        data-hoffset="['0','0','15','15']"
                        data-voffset="['-115','-115','-95','-145']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"delay":0,"split":"chars","splitdelay":0.05,"speed":2000,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <h2>Yes, we fix iPads<br>and Laptops</h2>
                        </div>

                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-text-align="center"
                        data-whitespace="normal"
                        data-width="['570','570','690','570']"
                        data-hoffset="['0','0','15','15']"
                        data-voffset="['40','40','40','20']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                           <div class="text"></div>
                        </div>

                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="['570','570','570','570']"
                        data-hoffset="['0','0','15','15']"
                        data-voffset="['155','155','155','155']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <div class="btn-box">
                                <a href="get-instant-quote" class="theme-btn btn-style-one"><span>Fix My Laptop</span></a>
                                <!-- <a href="content.html" class="theme-btn btn-style-two"><span>Contact us</span></a> -->
                            </div>
                        </div>
                    </li>

                    <!-- Slide 5 -->
                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1692" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/slide3.jpg" data-title="Slide Title" data-transition="parallaxvertical">
                        
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="images/main-slider/slide5.jpg"> 

                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="['570','570','570','570']"
                        data-text-align="center"
                        data-hoffset="['0','0','15','15']"
                        data-voffset="['-115','-115','-95','-145']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"delay":0,"split":"chars","splitdelay":0.05,"speed":2000,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <h2>Buy Sell Trade<br>Your Smart Devices</h2>
                        </div>

                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-text-align="center"
                        data-whitespace="normal"
                        data-width="['570','570','690','570']"
                        data-hoffset="['0','0','15','15']"
                        data-voffset="['40','40','40','20']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                           <div class="text"></div>
                        </div>

                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="['570','570','570','570']"
                        data-hoffset="['0','0','15','15']"
                        data-voffset="['155','155','155','155']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <div class="btn-box">
                                <a href="sell" class="theme-btn btn-style-one"><span>Sell a device</span></a>
                                <!-- <a href="content.html" class="theme-btn btn-style-two"><span>Contact us</span></a> -->
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
            <div class="arrow-down scroll-to-target" data-target="#about-us"><span class="icon-arrows"></span></div>
        </div>
    </section>

    <!-- End About Us -->
 <!-- Services Section -->
    <section class="services-section-two alternate">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2 class="mt-3">Select your device to get started</h2>
            </div>
            <div class="row">
                 <div class="service-block-two col-lg-12 col-md-6 col-sm-12 wow fadeInUp">
                     <iframe src="https://widget.xtremeiphonerepair.com/" id="edh-iframe" scrolling="no" title="Instant Quote Widget" class="widget-frame"></iframe>
                 </div>
            </div>
        </div>
    </section>

    <section class="custom-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2 class="mt-3">The best Cell Phone Repair Store in Lakeland, Florida</h2>
            </div>
            <div class="row">
                 <div class="col-12">
					<p class="custom-para"> Are you looking for an expert smart device repair service in Lakeland, Fl? Look no further than Xtreme Wireless. We’re your one-stop solution for all smart gadget repairs. So, stop wasting your time searching for cellphone repair near me and contact us to get your phone or any other gadget fixed in no time. At Xtreme Wireless, we proudly cover the following services: </p>
					<p class="custom-para">
						<ul class="custom-list">
							<li><a href="https://xtremeiphonerepair.com/iphone-repair-services-in-Lakeland/">iPhone repair</a></li>	
							<li><a href="https://xtremeiphonerepair.com/smartphone-repair-services-in-Lakeland ">Smartphone Repair</a></li>
							<li><a href="https://xtremeiphonerepair.com/tablet-repair-services-in-Lakeland ">Tablet/iPad Repair</a></li>
                            <li><a href="https://xtremeiphonerepair.com/computer-repair-services-in-Lakeland ">Laptop repair</a></li>
							<li><a href="https://xtremeiphonerepair.com/computer-repair-services-in-Lakeland ">Computer Repair</a></li>  
                            <li><a href="https://xtremeiphonerepair.com/gaming-console-repair-services-in-Lakeland ">Gaming Console Repair</a></li>
                            <li><a href="https://xtremeiphonerepair.com/iwatch-repair-services-in-Lakeland ">Iwatch Repair</a></li>                  
						</ul>
					</p>
                    <p class="custom-para"> Whatsoever repair problem you’re facing, we got the best repair experts to handle it. Whether you need an iPhone cracked screen repair, iPad charging port repair, computer hardware repair, gaming console hard drive repair or iWatch repair, we got you all covered!
So, don’t hesitate to contact us for quick and affordable device repair services in Lakeland, FL.
</p>
                    <h3 class="custom-h3">Buy and Sell </h3>
					<p class="custom-para">Furthermore, if you need to buy a phone or want to sell your older one, Xtreme Wireless offers the best sell phone on cash and the best deals on buying the cellphone. So visit us today and get your instant quote right away!
 </p>

					<h3 class="custom-h3">Best mobile repair solutions</h3>
					<p class="custom-para">So, why would you come to us? Xtreme Wireless provides the best smartphone repair services and other device repairs. Our expert team will not take much of your time as they know the device’s importance for you. Our repairs are quick, satisfactory, and competitively cost-effective. Contact Us for more details!
</p>

					
                 </div>
            </div>
        </div>
    </section>
    <br>

    <section class="projects-section instant-cash-section mb-5" style="background-image: url(images/background/inventory.jpg);background-color:unset;padding: 0 0;">
        <div class="outer-container">
                <div class="watch-more" style="background-color:unset;">
                <div class="auto-container clearfix">
                    <div class="title-box">
                        <h3>Buy new & Certified Pre-owned devices</h3>
                    </div>
                    <div class="btn-box">
                        <a href="all-models-variations" class="theme-btn btn-style-three">View Inventory</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Services Section -->
   <!-- Process Section -->
    <section class="process-section" style="background-image: url(images/background/whychooseus_bg.jpg);">
        <div class="auto-container"> 
            <div class="sec-title text-center">
                <h2>Why to choose Xtreme Wireless?</h2>
            </div>               
            <div class="row">
                <!-- Process Block -->
                <div class="process-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="icon-box mb-2">
                            <!--<span class="icon la la-wrench"></span>-->
                            <img src="images/icons/hassel.png" alt="Hassle free warranty">
                        </div>
                        <h4>Hassle free warranty</h4>
                        <div class="text">The repairs we do are covered by 30 days warranty without any inconvenience</div>
                    </div>
                </div>

                <!-- Process Block -->
                <div class="process-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner-box">
                        <div class="icon-box mb-2">
                            <!--<span class="icon la la-unlock-alt"></span>-->
                            <img src="images/icons/premium.png" alt="Preimum Quality Parts">
                        </div>
                        <h4>Premium Quality Parts</h4>
                        <div class="text">Our aim is to provide the best quality fixes. That’s why we have premium quality parts in stock.</div>
                    </div>
                </div>

                <!-- Process Block -->
                <div class="process-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                    <div class="inner-box">
                        <div class="icon-box mb-2">
                            <!--<span class="icon la la-plane"></span>-->
                            <img src="images/icons/turn.png" alt="Fast Turnaround">
                        </div>
                        <h4>Fast Turnaround</h4>
                        <div class="text">The repair experts at our store strive hard to get your devices fixed as soon as possible.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Process Section -->

<section class="services-section-two">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>What Our Customers Say About Us?</h2>
            </div>
            <div class="services-carousel owl-carousel owl-theme">
                <div class="service-block-two">
                    <div class="inner-box reviews-container">
                                            <article class="review-box clearfix">
                                         <!-- <figure class="rev-thumb"><img src="images/resource/review-thumb-1.jpg" alt="" style="max-width:70px;"></figure> -->
                                                <div class="rev-content">  
                                                <div class="rev-info"><span>Steve The king</span></div>    
                                                    <div class="rating"><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span></div>
                                                    <div class="rev-text"><p class="addReadMore showlesscontent">
                                                    Amazing job on my iPhone 8 Plus. Had a cracked lcd screen and they repaired it within an hour. Must go and get your devices fixed asap! Great customer service as well!. Much respect!
                                                    </p></div>
                                                </div>
                                            </article>
                    </div>
                </div>

                <div class="service-block-two">
                    <div class="inner-box reviews-container">
                                            <article class="review-box clearfix">
                                                <!-- <figure class="rev-thumb"><img src="images/resource/review-thumb-1.jpg" alt="" style="max-width:70px;"></figure> -->
                                                <div class="rev-content">    
                                                <div class="rev-info"><span>Sarah</span></div>    
                                                    <div class="rating"><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span></div>
                                                    <div class="rev-text"><p class="addReadMore showlesscontent">
                                                    Bobby was incredible to work with!! He handled our phone with care and replaced the screen in only an hour! It was an easy, painless process.
                                                    </p></div>
                                                </div>
                                            </article>
                    </div>
                </div>

                <div class="service-block-two">
                    <div class="inner-box reviews-container">
                                            <article class="review-box clearfix">
                                                <!-- <figure class="rev-thumb"><img src="images/resource/review-thumb-1.jpg" alt="" style="max-width:70px;"></figure> -->
                                                <div class="rev-content">  
                                                <div class="rev-info"><span>dennis luther</span></div>    
                                                    <div class="rating"><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span></div>
                                                    <div class="rev-text"><p class="addReadMore showlesscontent">
                                                    Brandon was very helpful getting my wife and I the exact phones we wanted, and for great prices! He even shipped them to us since we live out of state. Highly recommend Xtreme Wireless!
                                                    </p></div>
                                                </div>
                                            </article>
                    </div>
                </div>


                <div class="service-block-two">
                    <div class="inner-box reviews-container">
                                            <article class="review-box clearfix">
                                                <!-- <figure class="rev-thumb"><img src="images/resource/review-thumb-1.jpg" alt="" style="max-width:70px;"></figure> -->
                                                <div class="rev-content">   
                                                <div class="rev-info"><span>Skylar Luther</span></div>     
                                                    <div class="rating"><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span></div>
                                                    <div class="rev-text"><p class="addReadMore showlesscontent">
                                                    Love Xtreme wireless! Brandon goes above and beyond for his customers! I told him I wanted a specific IPhone 13 Pro, and he immediately found one and shipped it to my door within a few days.
                                                    </p></div>
                                                </div>
                                            </article>
                    </div>
                </div>

                <div class="service-block-two">
                    <div class="inner-box reviews-container">
                                            <article class="review-box clearfix">
                                             <!-- <figure class="rev-thumb"><img src="images/resource/review-thumb-1.jpg" alt="" style="max-width:70px;"></figure> -->
                                                <div class="rev-content">    
                                                <div class="rev-info"><span>Roger Brito</span></div>    
                                                    <div class="rating"><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span></div>
                                                    <div class="rev-text"><p class="addReadMore showlesscontent">
                                                    Highly recommend bringing in your devices here Vs anywhere else! Great quality work & AFFORDABLE prices! Super friendly staff & if I could rate higher than 5 stars I would. Can’t beat the $5 & $10 bins as well!
                                                    </p></div>
                                                </div>
                                            </article>
                    </div>
                </div>

                <div class="service-block-two">
                    <div class="inner-box reviews-container">
                                            <article class="review-box clearfix">
                                               <!-- <figure class="rev-thumb"><img src="images/resource/review-thumb-1.jpg" alt="" style="max-width:70px;"></figure> -->
                                                <div class="rev-content"> 
                                                <div class="rev-info"><span>carole favata</span></div>       
                                                    <div class="rating"><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span></div>
                                                    <div class="rev-text"><p class="addReadMore showlesscontent">
                                                   Bobby was very knowledgeable, efficient & friendly. In & out in 30 minutes with new screen & phone case :))) Highly recommend Extreme Wireless. Such a great experience. Thank you Bobby!!!  :)
                                                    </p></div>
                                                </div>
                                            </article>
                </div>
                </div>
            </div>
        </div>
    </section>    

    <!-- Call Back Section -->
    <section class="projects-section instant-cash-section mb-5 mt-5" style="background-image: url(images/background/instant-cash.jpg);background-color:unset;padding: 0 0;">
        <div class="outer-container">
                <div class="watch-more" style="background-color:unset;">
                <div class="auto-container clearfix">
                    <div class="title-box">
                        <h3>Get instant cash for your unwanted devices</h3>
                    </div>
                    <div class="btn-box">
                        <a href="sell" class="theme-btn btn-style-three">Sell your device</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--End Call Back Section -->

    <!-- Main Footer -->
   @include('layouts.footer')
    <!-- End Main Footer -->
</div>  
<!--End pagewrapper-->
<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="la la-angle-double-up"></span></div>
<script src="js/jquery.js"></script> 
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--Revolution Slider-->
<script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="js/main-slider-script.js"></script>
<!--End Revolution Slider-->
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
$('.owl-carousel').owlCarousel({
    autoplay: true,
    /*center: true,*/
    loop: true,
    infinite:true,
    nav: false,
    rtl: true,
    dots:false,
    items: 4,
    autoplayTimeout:4000,
autoplayHoverPause:true,
  });
</script>
<script>
function AddReadMore() {
    //This limit you can set after how much characters you want to show Read More.
    var carLmt = 150;
    // Text to show when text is collapsed
    var readMoreTxt = " ... Read More";
    // Text to show when text is expanded
    var readLessTxt = " Read Less";


    //Traverse all selectors with this class and manupulate HTML part to show Read More
    $(".addReadMore").each(function() {
        if ($(this).find(".firstSec").length)
            return;

        var allstr = $(this).text();
        if (allstr.length > carLmt) {
            var firstSet = allstr.substring(0, carLmt);
            var secdHalf = allstr.substring(carLmt, allstr.length);
            var strtoadd = firstSet + "<span class='SecSec'>" + secdHalf + "</span><span class='readMore'  title='Click to Show More'>" + readMoreTxt + "</span><span class='readLess' title='Click to Show Less'>" + readLessTxt + "</span>";
            $(this).html(strtoadd);
        }

    });
    //Read More and Read Less Click Event binding
    $(document).on("click", ".readMore,.readLess", function() {
        $(this).closest(".addReadMore").toggleClass("showlesscontent showmorecontent");
    });
}
$(function() {
    //Calling function after Page Load
    AddReadMore();
});
</script>
<script type='text/javascript'>
  // Listen for messages sent from the iFrame
  var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
  var eventer = window[eventMethod];
  var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
  
  eventer(messageEvent,function(e) {
    // If the message is a resize frame request
    if (e.data.indexOf('resize::') != -1) {
      var height = e.data.replace('resize::', '');
      document.getElementById('edh-iframe').style.height = height+'px';
    }
  } ,false);
</script>
</body>
</html>