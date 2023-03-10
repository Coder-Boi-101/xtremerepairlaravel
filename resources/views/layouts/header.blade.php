<header class="main-header header-style-two">
        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="clearfix">
                    
                    <div class="logo-outer">
                        <div class="logo"><a href="index"><img src="{{asset('images/bmr-logo.png')}}" style="" alt="" title=""></a></div>
                    </div>
                    
                    <div class="upper-right clearfix hide-mobile">
                        
                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="la la-map-marker"></span></div>
                            <ul>
                                <li><span>Visit Us</span></li>
                                <li><a href="https://bit.ly/3UqXQd8" target="_blank">
                                4810 US Hwy 98 N, Lakeland<br> FL 33809
                                </a></li>
                            </ul>
                        </div>

                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="la la-clock-o"></span></div>
                            <ul>
                                <li><span>Mon - Fri </span> 10:00AM to 07:00PM</li>
                                <li><span>Sat</span> 11:00AM to 05:00PM</li>
                                <li><span>Sun</span> Closed</li>
                            </ul>
                        </div>

                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="la la-phone"></span></div>
                            <ul>
                                <li><span> <b> Call Us </b></span>  </li>
                                <li><a href="tel:(863) 397-1062">(863) 397-1062</a></li>
                            </ul>
                        </div>

                        <!--Info Box-->
                        <div class="upper-column info-box btn-box">
                            <a href="/get-instant-quote" class="theme-btn btn-style-four blink">Instant Repair</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Header Upper -->

        <!--Header-lower-->
        <div class="header-lower">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-dark">
                            <div class="navbar-header">
                                <!-- Toggle Button -->      
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu-1"></span>
                                </button>
                            </div>
                            
                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">

							<?php
								if(basename($_SERVER['PHP_SELF']) == 'index' || basename($_SERVER['PHP_SELF']) == '' || basename($_SERVER['PHP_SELF']) == 'thankyou') {
                                    // echo var_dump(basename($_SERVER['PHP_SELF']));
?>			
									<li class="current"><a href="/">Home</a></li>
                                    <li class=""><a href="/about">About Us</a></li>
                                    <li class="dropdown"><a href="#">Repair Services</a>
                                        <ul>
                                            <li><a href="/get-instant-quote"><span style="text-transform:none;">i</span>Phone Repair</a></li>
                                            <li><a href="/get-instant-quote">Smartphone Repair</a></li>
                                            <li><a href="/get-instant-quote">Tablet Repair</a></li>
                                            <li><a href="/get-instant-quote">Computer/Laptop Repair</a></li>
                                            <li><a href="/get-instant-quote">Gaming Console Repair</a></li>
                                            <li><a href="/get-instant-quote">Drone</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/buy">We Sell</a></li>
                                    <li><a href="/sell">We Buy</a></li>
                                    <li><a href="/contact">Contact</a></li>
							<?php
							} 
							elseif(basename($_SERVER['PHP_SELF']) == 'about') {
							?>
									<li><a href="/">Home</a></li>
                                    <li class="current"><a href="/about">About Us</a></li>
                                    <li class="dropdown"><a href="#">We Fix</a>
                                        <ul>
                                            <li><a href="/get-instant-quote"><span style="text-transform:none;">i</span>Phone Repair</a></li>
                                            <li><a href="/get-instant-quote">Smartphone Repair</a></li>
                                            <li><a href="/get-instant-quote">Tablet Repair</a></li>
                                            <li><a href="/get-instant-quote">Computer/Laptop Repair</a></li>
                                            <li><a href="/get-instant-quote">Gaming Console Repair</a></li>
                                            <li><a href="/get-instant-quote">Drone</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/buy">We Sell</a></li>
                                    <li><a href="/sell">We Buy</a></li>
                                    <li><a href="/contact">Contact</a></li>
							<?php
							} 
							elseif(basename($_SERVER['PHP_SELF']) == 'repair' || basename($_SERVER['PHP_SELF']) == 'get-instant-quote') {
							?>
									<li><a href="/">Home</a></li>
                                    <li><a href="/about">About Us</a></li>
                                    <li class="dropdown current"><a href="#">We Fix</a>
                                        <ul>
                                            <li><a href="/get-instant-quote"><span style="text-transform:none;">i</span>Phone Repair</a></li>
                                            <li><a href="/get-instant-quote">Smartphone Repair</a></li>
                                            <li><a href="/get-instant-quote">Tablet Repair</a></li>
                                            <li><a href="/get-instant-quote">Computer/Laptop Repair</a></li>
                                            <li><a href="/get-instant-quote">Gaming Console Repair</a></li>
                                            <li><a href="/get-instant-quote">Drone</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/buy">We Sell</a></li>
                                    <li><a href="/sell">We Buy</a></li>
                                    <li><a href="/contact">Contact</a></li>
							<?php
							} 
							elseif(basename($_SERVER['PHP_SELF']) == 'sell' || basename($_SERVER['PHP_SELF']) == 'sell-models' || basename($_SERVER['PHP_SELF']) == 'sell-brands' || basename($_SERVER['PHP_SELF']) == 'buy-sell' || basename($_SERVER['PHP_SELF']) == 'sell-model-view' || basename($_SERVER['PHP_SELF']) == 'sell-confirm') {
							?>
									<li><a href="/">Home</a></li>
                                    <li><a href="/about">About Us</a></li>
                                    <li class="dropdown"><a href="#">We Fix</a>
                                        <ul>
                                            <li><a href="/get-instant-quote"><span style="text-transform:none;">i</span>Phone Repair</a></li>
                                            <li><a href="/get-instant-quote">Smartphone Repair</a></li>
                                            <li><a href="/get-instant-quote">Tablet Repair</a></li>
                                            <li><a href="/get-instant-quote">Computer/Laptop Repair</a></li>
                                            <li><a href="/get-instant-quote">Gaming Console Repair</a></li>
                                            <li><a href="/get-instant-quote">Drone</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/buy">We Sell</a></li>
                                    <li class="current"><a href="/sell">We Buy</a></li>
                                    <li><a href="/contact">Contact</a></li>
							<?php
							}
                            elseif(basename($_SERVER['PHP_SELF']) == 'buy' || basename($_SERVER['PHP_SELF']) == 'buy-models' || basename($_SERVER['PHP_SELF']) == 'buy-brands' ||  basename($_SERVER['PHP_SELF']) == 'buy-confirm' ||  basename($_SERVER['PHP_SELF']) == 'all-models-variations') {
							?>
									<li><a href="/">Home</a></li>
                                    <li><a href="/about">About Us</a></li>
                                    <li class="dropdown"><a href="#">We Fix</a>
                                        <ul>
                                            <li><a href="/get-instant-quote"><span style="text-transform:none;">i</span>Phone Repair</a></li>
                                            <li><a href="/get-instant-quote">Smartphone Repair</a></li>
                                            <li><a href="/get-instant-quote">Tablet Repair</a></li>
                                            <li><a href="/get-instant-quote">Computer/Laptop Repair</a></li>
                                            <li><a href="/get-instant-quote">Gaming Console Repair</a></li>
                                            <li><a href="/get-instant-quote">Drone</a></li>
                                        </ul>
                                    </li>
                                    <li class="current"><a href="/buy">We Sell</a></li>
                                    <li><a href="/sell">We Buy</a></li>
                                    <li><a href="/contact">Contact</a></li>
							<?php
							} 
							elseif(basename($_SERVER['PHP_SELF']) == 'contact') {
							?>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/about">About Us</a></li>
                                    <li class="dropdown"><a href="#">We Fix</a>
                                        <ul>
                                            <li><a href="/get-instant-quote"><span style="text-transform:none;">i</span>Phone Repair</a></li>
                                            <li><a href="/get-instant-quote">Smartphone Repair</a></li>
                                            <li><a href="/get-instant-quote">Tablet Repair</a></li>
                                            <li><a href="/get-instant-quote">Computer/Laptop Repair</a></li>
                                            <li><a href="/get-instant-quote">Gaming Console Repair</a></li>
                                            <li><a href="/get-instant-quote">Drone</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/buy">We Sell</a></li>
                                    <li><a href="/sell">We Buy</a></li>
                                    <li class="current"><a href="/contact">Contact</a></li>
							<?php
							} 
                            else
                            { ?>
                                    <li  class=""><a href="/">Home</a></li>
                                    <li><a href="/about">About Us</a></li>
                                    <li class="dropdown"><a href="#">We Fix</a>
                                        <ul>
                                            <li><a href="/get-instant-quote"><span style="text-transform:none;">i</span>Phone Repair</a></li>
                                            <li><a href="/get-instant-quote">Smartphone Repair</a></li>
                                            <li><a href="/get-instant-quote">Tablet Repair</a></li>
                                            <li><a href="/get-instant-quote">Computer/Laptop Repair</a></li>
                                            <li><a href="/get-instant-quote">Gaming Console Repair</a></li>
                                            <li><a href="/get-instant-quote">Drone</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/buy">We Sell</a></li>
                                    <li><a href="/sell">We Buy</a></li>
                                    <li><a href="/contact">Contact</a></li>
                        <?php
                            }
							?>
                                    <li class="hide-desktop"><a href="/get-instant-quote">Get Instant Quote</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->

                        <!-- Outer Box -->
                        <div class="outer-box">
                            <ul class="social-icon-three clearfix">
                                <!--<li><a href="https://www.facebook.com/sellphoneclinic" target="_blank"><i class="la la-facebook-official"></i></a></li>-->
                                <!-- <li><a href="#"><i class="la la-instagram"></i></a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!-- Sticky Header -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="/" title=""><img src="{{asset('images/bmr-logo.png')}}" style="" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                            <ul class="navigation clearfix">
                                <?php
								if(basename($_SERVER['PHP_SELF']) == 'index' || basename($_SERVER['PHP_SELF']) == '' || basename($_SERVER['PHP_SELF']) == 'thankyou') {
							?>			
									<li  class="current"><a href="/">Home</a></li>
                                    <li><a href="/about">About Us</a></li>
                                    <li class="dropdown"><a href="#">We Fix</a>
                                        <ul>
                                            <li><a href="/get-instant-quote"><span style="text-transform:none;">i</span>Phone Repair</a></li>
                                            <li><a href="/get-instant-quote">Smartphone Repair</a></li>
                                            <li><a href="/get-instant-quote">Tablet Repair</a></li>
                                            <li><a href="/get-instant-quote">Computer/Laptop Repair</a></li>
                                            <li><a href="/get-instant-quote">Gaming Console Repair</a></li>
                                            <li><a href="/get-instant-quote">Drone</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/buy">We Sell</a></li>
                                    <li><a href="/sell">We Buy</a></li>
                                    <li><a href="/contact">Contact</a></li>
							<?php
							} 
							elseif(basename($_SERVER['PHP_SELF']) == 'about') {
							?>
									<li class=""><a href="/">Home</a></li>
                                    <li class="current"><a href="/about">About Us</a></li>
                                    <li class="dropdown"><a href="#">We Fix</a>
                                        <ul>
                                            <li><a href="/get-instant-quote"><span style="text-transform:none;">i</span>Phone Repair</a></li>
                                            <li><a href="/get-instant-quote">Smartphone Repair</a></li>
                                            <li><a href="/get-instant-quote">Tablet Repair</a></li>
                                            <li><a href="/get-instant-quote">Computer/Laptop Repair</a></li>
                                            <li><a href="/get-instant-quote">Gaming Console Repair</a></li>
                                            <li><a href="/get-instant-quote">Drone</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/buy">We Sell</a></li>
                                    <li><a href="/sell">We Buy</a></li>
                                    <li><a href="/contact">Contact</a></li>
							<?php
							} 
							elseif(basename($_SERVER['PHP_SELF']) == 'repair' || basename($_SERVER['PHP_SELF']) == 'get-instant-quote') {
							?>
									<li  class=""><a href="/">Home</a></li>
                                    <li><a href="/about">About Us</a></li>
                                    <li class="dropdown current"><a href="#">We Fix</a>
                                        <ul>
                                            <li><a href="/get-instant-quote"><span style="text-transform:none;">i</span>Phone Repair</a></li>
                                            <li><a href="/get-instant-quote">Smartphone Repair</a></li>
                                            <li><a href="/get-instant-quote">Tablet Repair</a></li>
                                            <li><a href="/get-instant-quote">Computer/Laptop Repair</a></li>
                                            <li><a href="/get-instant-quote">Gaming Console Repair</a></li>
                                            <li><a href="/get-instant-quote">Drone</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/buy">We Sell</a></li>
                                    <li><a href="/sell">We Buy</a></li>
                                    <li><a href="/contact">Contact</a></li>
							<?php
							} 
							elseif(basename($_SERVER['PHP_SELF']) == 'sell' || basename($_SERVER['PHP_SELF']) == 'sell-models' || basename($_SERVER['PHP_SELF']) == 'sell-brands' || basename($_SERVER['PHP_SELF']) == 'buy-sell' || basename($_SERVER['PHP_SELF']) == 'sell-model-view' || basename($_SERVER['PHP_SELF']) == 'sell-confirm') {
							?>
									<li  class=""><a href="/">Home</a></li>
                                    <li><a href="/about">About Us</a></li>
                                    <li class="dropdown"><a href="#">We Fix</a>
                                        <ul>
                                            <li><a href="/get-instant-quote"><span style="text-transform:none;">i</span>Phone Repair</a></li>
                                            <li><a href="/get-instant-quote">Smartphone Repair</a></li>
                                            <li><a href="/get-instant-quote">Tablet Repair</a></li>
                                            <li><a href="/get-instant-quote">Computer/Laptop Repair</a></li>
                                            <li><a href="/get-instant-quote">Gaming Console Repair</a></li>
                                            <li><a href="/get-instant-quote">Drone</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/buy">We Sell</a></li>
                                    <li class="current"><a href="/sell">We Buy</a></li>
                                    <li><a href="/contact">Contact</a></li>
							<?php
							}
                            elseif(basename($_SERVER['PHP_SELF']) == 'buy' || basename($_SERVER['PHP_SELF']) == 'buy-models' || basename($_SERVER['PHP_SELF']) == 'buy-brands' ||  basename($_SERVER['PHP_SELF']) == 'buy-confirm' ||  basename($_SERVER['PHP_SELF']) == 'all-models-variations') {
							?>
									<li  class=""><a href="/">Home</a></li>
                                    <li><a href="/about">About Us</a></li>
                                    <li class="dropdown"><a href="#">We Fix</a>
                                        <ul>
                                            <li><a href="/get-instant-quote"><span style="text-transform:none;">i</span>Phone Repair</a></li>
                                            <li><a href="/get-instant-quote">Smartphone Repair</a></li>
                                            <li><a href="/get-instant-quote">Tablet Repair</a></li>
                                            <li><a href="/get-instant-quote">Computer/Laptop Repair</a></li>
                                            <li><a href="/get-instant-quote">Gaming Console Repair</a></li>
                                            <li><a href="/get-instant-quote">Drone</a></li>
                                        </ul>
                                    </li>
                                    <li class="current"><a href="/buy">We Sell</a></li>
                                    <li><a href="/sell">We Buy</a></li>
                                    <li><a href="/contact">Contact</a></li>
							<?php
							} 
							elseif(basename($_SERVER['PHP_SELF']) == 'contact') {
							?>
                                    <li  class=""><a href="/">Home</a></li>
                                    <li><a href="/about">About Us</a></li>
                                    <li class="dropdown"><a href="#">We Fix</a>
                                        <ul>
                                            <li><a href="/get-instant-quote"><span style="text-transform:none;">i</span>Phone Repair</a></li>
                                            <li><a href="/get-instant-quote">Smartphone Repair</a></li>
                                            <li><a href="/get-instant-quote">Tablet Repair</a></li>
                                            <li><a href="/get-instant-quote">Computer/Laptop Repair</a></li>
                                            <li><a href="/get-instant-quote">Gaming Console Repair</a></li>
                                            <li><a href="/get-instant-quote">Drone</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/buy">We Sell</a></li>
                                    <li><a href="/sell">We Buy</a></li>
                                    <li class="current"><a href="/contact">Contact</a></li>
							<?php
							} 
							?>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div><!-- End Sticky Menu -->
    </header>