<?php
        session_start();
        include ('connect.php');
        header('Cache-Control: no-cache, no-store, must-revalidate');
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>BABALOLA - Delici - Restaurants</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">

</head>

<body>
  <div class="page-wrapper"> 
  
    <!-- Preloader -->
    <div class="loader-wrap">
        <div class="preloader">
            <div class="preloader-close">x</div>
            <div id="handle-preloader" class="handle-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                    <div class="txt-loading">
                        <span data-text-preloader="D" class="letters-loading">
                            D
                        </span>
                        <span data-text-preloader="E" class="letters-loading">
                            E
                        </span>
                        <span data-text-preloader="L" class="letters-loading">
                            L
                        </span>
                        <span data-text-preloader="I" class="letters-loading">
                            I
                        </span>
                        <span data-text-preloader="C" class="letters-loading">
                            C
                        </span>
                        <span data-text-preloader="I" class="letters-loading">
                            I
                        </span>
                    </div>
                </div>  
            </div>
        </div>
    </div>
    <!-- Preloader End -->
    
    <!-- Main Header-->
    <header class="main-header header-down">
        <div class="header-top">
            <div class="auto-container">
                <div class="inner clearfix">
                    <div class="top-left clearfix">
                        <ul class="top-info clearfix">
                            <li><i class="icon far fa-map-marker-alt"></i> M.Oyekunle st, Oyo, Kosobo, Ashamu layout, Nigeria.</li>
                            <li><i class="icon far fa-clock"></i> Daily : 8.00 am to 10.00 pm</li>
                        </ul>
                    </div>
                    <div class="top-right clearfix">
                        <ul class="top-info clearfix">
                            <li><a href="tel:+2349151409269"><i class="icon far fa-phone"></i> +2349151409269</a></li>
                            <li><a href="mailto:babmoh06@gmail.com"><i class="icon far fa-envelope"></i> babmoh06@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Upper -->
        <div class="header-upper">        
            <div class="auto-container">
                <!-- Main Box -->
                <div class="main-box clearfix">
                    <!--Logo-->
                    <div class="logo-box">
                         <div class="logo"><a href="#" title="Delici - Restaurants HTML Template"><img src="images/logo.jpg" alt="" title="Delici - Restaurants"></a></div>
                    </div>

                    <div class="nav-box clearfix">
                        <!--Nav Outer-->
                        <div class="nav-outer clearfix">         
                            <nav class="main-menu">
                                <ul class="navigation clearfix">
                                    <li class="current"><a href="index.html">Home</a>
                                    </li>
                                    <li class="dropdown has-mega-menu"><a href="#">Menus</a>
                                        <ul>
                                            <li>
                                                <div class="mega-menu">
                                                    <div class="menu-inner">
                                                        <div class="auto-container">
                                                            <div class="row clearfix">
                                                                <div class="menu-block col-lg-3 col-md-6 col-sm-6">
                                                                    <div class="image"><a href="#"><img src="images/resource/menu-image-1.jpg" alt=""></a></div>
                                                                    <div class="title"><a href="#">Menu list 1</a></div>
                                                                </div>
                                                                <div class="menu-block col-lg-3 col-md-6 col-sm-6">
                                                                    <div class="image"><a href="#"><img src="images/resource/menu-image-2.jpg" alt=""></a></div>
                                                                    <div class="title"><a href="#">Menu list 2</a></div>
                                                                </div>
                                                                <div class="menu-block col-lg-3 col-md-6 col-sm-6">
                                                                    <div class="image"><a href="#"><img src="images/resource/menu-image-3.jpg" alt=""></a></div>
                                                                    <div class="title"><a href="#">Menu list 3</a></div>
                                                                </div>
                                                                <div class="menu-block col-lg-3 col-md-6 col-sm-6">
                                                                    <div class="image"><a href="#"><img src="images/resource/menu-image-4.jpg" alt=""></a></div>
                                                                    <div class="title"><a href="#">Menu list 4</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Our chefs</a></li>
                                    <li class="dropdown"><a href="#">Pages</a>
                                        <ul>
                                            <li><a href="#">Dropdown Menu 1</a></li>
                                            <li><a href="#">Dropdown Menu 2</a></li>
                                            <li><a href="#">Dropdown Menu 3</a></li>
                                            <li class="dropdown"><a href="#">Dropdown Menu 4</a>
                                                <ul>
                                                    <li><a href="#">Dropdown Menu level 2</a></li>
                                                    <li><a href="#">Dropdown Menu level 2</a></li>
                                                    <li><a href="#">Dropdown Menu Level 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Dropdown Lorem 5</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </nav>
                            <!-- Main Menu End-->
                        </div>
                        <!--Nav Outer End-->

                        <div class="links-box clearfix">
                            <div class="link link-btn">
                                <a href="#" class="theme-btn btn-style-one clearfix">
                                    <span class="btn-wrap">
                                        <span class="text-one">find a table</span>
                                        <span class="text-two">find a table</span>
                                    </span>
                                </a>
                            </div>
                            <div class="link info-toggler">
                                <button class="info-btn">
                                    <span class="hamburger">
                                        <span class="top-bun"></span>
                                        <span class="meat"></span>
                                        <span class="bottom-bun"></span>
                                    </span>
                                </button>
                            </div>
                        </div>

                        <!-- Hidden Nav Toggler -->
                        <div class="nav-toggler">
                            <button class="hidden-bar-opener">
                                <span class="hamburger">
                                    <span class="top-bun"></span>
                                    <span class="meat"></span>
                                    <span class="bottom-bun"></span>
                                </span>
                            </button>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </header>
    <!--End Main Header -->
    
    <!--Menu Backdrop-->
    <div class="menu-backdrop"></div>

    <!-- Hidden Navigation Bar -->
    <section class="hidden-bar">
        <!-- Hidden Bar Wrapper -->
        <div class="inner-box">
            <div class="cross-icon hidden-bar-closer"><span class="far fa-close"></span></div>
            <div class="logo-box"><a href="#" title="Delici - Restaurants HTML Template"><img src="images/resource/sidebar-logo.png" alt="" title="Delici - Restaurants HTML Template"></a></div>
            
            <!-- .Side-menu -->
            <div class="side-menu">
                 <ul class="navigation clearfix">
                    <li class="current"><a href="#">Home</a>
                    </li>
                    <li class="dropdown"><a href="#">Menus</a>
                        <ul>
                            <li><a href="#">Menu List 1</a></li>
                            <li><a href="#">Menu List 2</a></li>
                            <li><a href="#">Menu List 3</a></li>
                            <li><a href="#">Menu List 4</a></li>
                        </ul>
                    </li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Our chefs</a></li>
                    <li class="dropdown"><a href="#">Pages</a>
                        <ul>
                            <li><a href="#">Dropdown Menu 1</a></li>
                            <li><a href="#">Dropdown Menu 2</a></li>
                            <li><a href="#">Dropdown Menu 3</a></li>
                            <li class="dropdown"><a href="#">Dropdown Menu 4</a>
                                <ul>
                                    <li><a href="#">Dropdown Menu level 2</a></li>
                                    <li><a href="#">Dropdown Menu level 2</a></li>
                                    <li><a href="#">Dropdown Menu Level 3</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Dropdown Lorem 5</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div><!-- /.Side-menu -->
            
            <h2>Visit Us</h2>
            <ul class="info">
                <li>M.Oyekunle st, Oyo, Kosobo, <br>Ashamu layout, Nigeria.</li>
                <li>Open: 9.30 am - 2.30pm</li>
                <li><a href="mailto:babmoh06@gmail.com">babmoh06@gmail.com</a></li>
            </ul>
            <div class="separator"><span></span></div>
            <div class="booking-info">
                <div class="bk-title">Booking request</div>
                <div class="bk-no"><a href="tel:+2349151409269">+2349151409269</a></div>
            </div>
        
        </div><!-- / Hidden Bar Wrapper -->
    </section>
    <!-- / Hidden Bar -->

    <!--Info Back Drop-->
    <div class="info-back-drop"></div>
    
    <!-- Hidden Bar -->
    <section class="info-bar">
        <div class="inner-box">
            <div class="cross-icon"><span class="far fa-close"></span></div>
            <div class="logo-box"><a href="#" title="Delici - Restaurants HTML Template"><img src="images/resource/sidebar-logo." alt="" title="Delici - Restaurants HTML Template"></a></div>
            <div class="image-box"><img src="images/resource/sidebar-image.jpg" alt="" title=""></div>

            <h2>Visit Us</h2>
            <ul class="info">
                <li>M.Oyekunle st, Oyo, Kosobo, <br>Ashamu layout, Nigeria.</li>
                <li>Open: 9.30 am - 2.30pm</li>
                <li><a href="mailto:babmoh06@gmail.com">babmoh06@gmail.com</a></li>
            </ul>
            <div class="separator"><span></span></div>
            <div class="booking-info">
                <div class="bk-title">Booking request</div>
                <div class="bk-no"><a href="tel:+2349151409269">+2349151409269</a></div>
            </div>
        </div>
    </section>
    <!--End Hidden Bar -->

    <!-- Banner Section -->
    <section class="banner-section">
        
        <div class="banner-container">
            <div class="banner-slider">
                <div class="swiper-wrapper">
                    <!--Slide Item-->
                    <div class="swiper-slide slide-item">
                        <div class="image-layer" style="background-image: url(images/main-slider/slider-1.jpg);"></div>
                        <div class="auto-container">
                          <div class="content-box">
                                <div class="content">
                                    <div class="clearfix">
                                        <div class="inner">
                                            <div class="subtitle"><span>delightful experience</span></div>
                                            <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div>
                                            <h1><span>Flavors Inspired by <br>the Seasons</span></h1>
                                            <div class="text">Come with family & feel the joy of mouthwatering food</div>
                                            <div class="links-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                                <div class="link">
                                                    <a href="#" class="theme-btn btn-style-two clearfix">
                                                        <span class="btn-wrap">
                                                            <span class="text-one">view our menu</span>
                                                            <span class="text-two">view our menu</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Slide Item-->
                    <div class="swiper-slide slide-item">
                        <div class="image-layer" style="background-image: url(images/main-slider/slider-2.jpg);"></div>
                        <div class="auto-container">
                          <div class="content-box">
                                <div class="content">
                                    <div class="clearfix">
                                        <div class="inner">
                                            <div class="subtitle"><span>amazing & delicious</span></div>
                                            <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div>
                                            <h1><span>Where every flavor <br>tells a story</span></h1>
                                            <div class="text">Come with family & feel the joy of mouthwatering food</div>
                                            <div class="links-box clearfix">
                                                <div class="link">
                                                    <a href="#" class="theme-btn btn-style-two clearfix">
                                                        <span class="btn-wrap">
                                                            <span class="text-one">view our menu</span>
                                                            <span class="text-two">view our menu</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Slide Item-->
                    <div class="swiper-slide slide-item">
                        <div class="image-layer" style="background-image: url(images/main-slider/slider-3.jpg);"></div>
                        <div class="auto-container">
                          <div class="content-box">
                                <div class="content">
                                    <div class="clearfix">
                                        <div class="inner">
                                            <div class="subtitle"><span>Tradational & Hygine</span></div>
                                            <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div>
                                            <h1><span>For the love of <br>delicious food</span></h1>
                                            <div class="text">Come with family & feel the joy of mouthwatering food</div>
                                            <div class="links-box clearfix">
                                                <div class="link">
                                                    <a href="#" class="theme-btn btn-style-two clearfix">
                                                        <span class="btn-wrap">
                                                            <span class="text-one">view our menu</span>
                                                            <span class="text-two">view our menu</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev"><span class="fal fa-angle-left"></span></div>
                <div class="swiper-button-next"><span class="fal fa-angle-right"></span></div>
            </div>
        </div>

        <div class="book-btn"><a href="#" class="theme-btn"><span class="icon"><img src="images/resource/book-icon-1.png" alt="" title=""></span><span class="txt">book a table</span></a></div>
    </section>
    <!--End Banner Section -->

    <!--We Offer Section-->
    <section class="we-offer-section">
        <div class="left-bot-bg"><img src="images/background/bg-1.png" alt="" title=""></div>
        <div class="right-top-bg"><img src="images/background/bg-2.png" alt="" title=""></div>
        <div class="auto-container">
            <div class="title-box centered">
                <div class="subtitle"><span>Flavors for royalty</span></div>
                <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div>
                <h2>We Offer Top Notch</h2>
                <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been the industrys standard dummy text ever.</div>
            </div>
            <div class="row justify-content-center clearfix">
                <!--Block-->
                <div class="offer-block col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="image"><a href="#"><img src="images/resource/offer-image-1.jpg" alt=""></a></div>
                        <h3><a href="#">Breakfast</a></h3>
                        <div class="more-link"><a href="#">view menu</a></div>
                    </div>
                </div>

                <!--Block-->
                <div class="offer-block col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                        <div class="image"><a href="#"><img src="images/resource/offer-image-2.jpg" alt=""></a></div>
                        <h3><a href="#">Appetizers</a></h3>
                        <div class="more-link"><a href="#">view menu</a></div>
                    </div>
                </div>

                <!--Block-->
                <div class="offer-block col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                        <div class="image"><a href="#"><img src="images/resource/offer-image-3.jpg" alt=""></a></div>
                        <h3><a href="#">Drinks</a></h3>
                        <div class="more-link"><a href="#">view menu</a></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--Story Section-->
    <section class="story-section">
        <div class="left-bg"><img src="images/background/bg-3.png" alt="" title=""></div>
        <div class="auto-container">
            <div class="row clearfix">
                <!--Col-->
                <div class="text-col col-xl-5 col-lg-5 col-md-12 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="title-box centered">
                            <div class="subtitle"><span>Our story</span></div>
                            <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div>
                            <h2>Every Flavor Tells a Story</h2>
                            <div class="text">Lorem Ipsum is simply dummy text of the printingand typesetting industry lorem Ipsum has been the industrys standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type specimen book It has survived not only five centuries, but also the leap into.</div>
                        </div>
                        <div class="booking-info">
                            <div class="bk-title">Book Through Call</div>
                            <div class="bk-no"><a href="tel:+2349151409269">+2349151409269</a></div>
                            
                            <div class="link-box">
                                <a href="#" class="theme-btn btn-style-two clearfix">
                                    <span class="btn-wrap">
                                        <span class="text-one">Read More</span>
                                        <span class="text-two">Read More</span>
                                    </span>
                                </a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!--Col-->
                <div class="image-col col-xl-7 col-lg-7 col-md-12 col-sm-12">
                    <div class="inner wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="round-stamp"><img src="images/resource/badge-1.png" alt=""></div>
                        <div class="images parallax-scene-1">
                            <div class="image" data-depth="0.15"><img src="images/resource/image-1.jpg" alt=""></div>
                            <div class="image" data-depth="0.30"><img src="images/resource/image-2.jpg" alt=""></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--Special Dish Section-->
    <section class="special-dish">
        <div class="bottom-image"><img src="images/resource/image-3.png" alt="" title=""></div>
        <div class="outer-container">
            <div class="row clearfix">
                <!--Col-->
                <div class="image-col col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="image-layer" style="background-image: url(images/background/image-1.jpg);"></div>
                        <div class="image"><img src="images/background/image-1.jpg" alt=""></div>
                    </div>
                </div>
                <!--Col-->
                <div class="content-col col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="right-bg"><img src="images/background/bg-4.png" alt="" title=""></div>
                    <div class="inner wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="title-box">
                            <span class="badge-icon"><img src="images/resource/badge-2.png" alt="" title=""></span>
                            <div class="subtitle"><span>Special dish</span></div>
                            <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div>
                            <h2>Lobster Tortellini</h2>
                            <div class="text">Lorem Ipsum is simply dummy text of the printingand typesetting industry lorem Ipsum has been the industrys standard dummy text ever since the when an unknown printer took a galley of type.</div>
                        </div>
                        <div class="price"><span class="old">N40,000.00</span> <span class="new">N30,000.00</span></div>
                        <div class="link-box">
                            <a href="#" class="theme-btn btn-style-two clearfix">
                                <span class="btn-wrap">
                                    <span class="text-one">view all menu</span>
                                    <span class="text-two">view all menu</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--Menu Section-->
    <section class="menu-section">
        <div class="left-bg"><img src="images/background/bg-5.png" alt="" title=""></div>
        <div class="right-bg"><img src="images/background/bg-6.png" alt="" title=""></div>
        <div class="auto-container">
            <div class="title-box centered">
                <div class="subtitle"><span>Special selection</span></div>
                <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div>
                <h2>Delicious Menu</h2>
            </div>

            <div class="tabs-box menu-tabs">
                <div class="buttons">
                    <ul class="tab-buttons clearfix">
                        <li class="tab-btn active-btn" data-tab="#tab-1"><span>MORNING</span></li>
                        <li class="tab-btn" data-tab="#tab-2"><span>WEEKDAY LUNCH</span></li>
                        <li class="tab-btn" data-tab="#tab-3"><span>DINNER</span></li>
                        <li class="tab-btn" data-tab="#tab-4"><span>WINES</span></li>
                    </ul>
                </div>
                <div class="tabs-content">
                    <!--Tab-->
                    <div class="tab active-tab" id="tab-1">
                        <div class="row clearfix">
                            <div class="menu-col col-lg-6 col-md-12 col-sm-12">
                                <div class="inner">
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img src="images/resource/menu-image-5.png" alt=""></a></div>
                                            <div class="title clearfix"><div class="ttl clearfix"><h5><a href="#">Greek Salad</a></h5></div><div class="price"><span>N35,000.50</span></div></div>
                                            <div class="text desc"><a href="#">Tomatoes, green bell pepper, sliced cucumber onion, olives, and feta cheese.</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img src="images/resource/menu-image-6.png" alt=""></a></div>
                                            <div class="title clearfix"><div class="ttl clearfix"><h5><a href="#">Lasagne <span class="s-info">SEASONAL</span></a></h5></div><div class="price"><span>N50,000.00</span></div></div>
                                            <div class="text desc"><a href="#">Vegetables, cheeses, ground meats, tomato sauce, seasonings and spices</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img src="images/resource/menu-image-7.png" alt=""></a></div>
                                            <div class="title clearfix"><div class="ttl clearfix"><h5><a href="#">Butternut Pumpkin</a></h5></div><div class="price"><span>N20,000.00</span></div></div>
                                            <div class="text desc"><a href="#">Typesetting industry lorem Lorem Ipsum is simply dummy text of the priand.</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-col col-lg-6 col-md-12 col-sm-12">
                                <div class="inner">
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img src="images/resource/menu-image-8.png" alt=""></a></div>
                                            <div class="title clearfix"><div class="ttl clearfix"><h5><a href="#">Tokusen Wagyu <span class="s-info">NEW</span></a></h5></div><div class="price"><span>N49,000.00</span></div></div>
                                            <div class="text desc"><a href="#">Vegetables, cheeses, ground meats, tomato sauce, seasonings and spices.</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img src="images/resource/menu-image-9.png" alt=""></a></div>
                                            <div class="title clearfix"><div class="ttl clearfix"><h5><a href="#">Olivas Rellenas</a></h5></div><div class="price"><span>N35,000.00</span></div></div>
                                            <div class="text desc"><a href="#">Avocados with crab meat, red onion, crab salad stuffed red bell pepper and  green bell pepper.</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img src="images/resource/menu-image-10.png" alt=""></a></div>
                                            <div class="title clearfix"><div class="ttl clearfix"><h5><a href="#">Opu Fish</a></h5></div><div class="price"><span>N59,000.00</span></div></div>
                                            <div class="text desc"><a href="#">Vegetables, cheeses, ground meats, tomato sauce, seasonings and spices</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Tab-->
                    <div class="tab" id="tab-2">
                        <div class="row clearfix">
                            <div class="menu-col col-lg-6 col-md-12 col-sm-12">
                                <div class="inner">
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img src="images/resource/menu-image-5.png" alt=""></a></div>
                                            <div class="title clearfix"><div class="ttl clearfix"><h5><a href="#">Greek Salad</a></h5></div><div class="price"><span>N35,000.50</span></div></div>
                                            <div class="text desc"><a href="#">Tomatoes, green bell pepper, sliced cucumber onion, olives, and feta cheese.</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img src="images/resource/menu-image-6.png" alt=""></a></div>
                                            <div class="title clearfix"><div class="ttl clearfix"><h5><a href="#">Lasagne <span class="s-info">SEASONAL</span></a></h5></div><div class="price"><span>N50,000.00</span></div></div>
                                            <div class="text desc"><a href="#">Vegetables, cheeses, ground meats, tomato sauce, seasonings and spices</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img src="images/resource/menu-image-7.png" alt=""></a></div>
                                            <div class="title clearfix"><div class="ttl clearfix"><h5><a href="#">Butternut Pumpkin</a></h5></div><div class="price"><span>N20,000.00</span></div></div>
                                            <div class="text desc"><a href="#">Typesetting industry lorem Lorem Ipsum is simply dummy text of the priand.</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-col col-lg-6 col-md-12 col-sm-12">
                                <div class="inner">
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img src="images/resource/menu-image-8.png" alt=""></a></div>
                                            <div class="title clearfix"><div class="ttl clearfix"><h5><a href="#">Tokusen Wagyu <span class="s-info">NEW</span></a></h5></div><div class="price"><span>N49,000.00</span></div></div>
                                            <div class="text desc"><a href="#">Vegetables, cheeses, ground meats, tomato sauce, seasonings and spices.</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img src="images/resource/menu-image-9.png" alt=""></a></div>
                                            <div class="title clearfix"><div class="ttl clearfix"><h5><a href="#">Olivas Rellenas</a></h5></div><div class="price"><span>N35,000.00</span></div></div>
                                            <div class="text desc"><a href="#">Avocados with crab meat, red onion, crab salad stuffed red bell pepper and  green bell pepper.</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img src="images/resource/menu-image-10.png" alt=""></a></div>
                                            <div class="title clearfix"><div class="ttl clearfix"><h5><a href="#">Opu Fish</a></h5></div><div class="price"><span>N59,000.00</span></div></div>
                                            <div class="text desc"><a href="#">Vegetables, cheeses, ground meats, tomato sauce, seasonings and spices</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Tab-->
                    <div class="tab" id="tab-3">
                        <div class="row clearfix">
                            <div class="menu-col col-lg-6 col-md-12 col-sm-12">
                                <div class="inner">
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img src="images/resource/menu-image-5.png" alt=""></a></div>
                                            <div class="title clearfix"><div class="ttl clearfix"><h5><a href="#">Greek Salad</a></h5></div><div class="price"><span>N35,000.50</span></div></div>
                                            <div class="text desc"><a href="#">Tomatoes, green bell pepper, sliced cucumber onion, olives, and feta cheese.</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img src="images/resource/menu-image-6.png" alt=""></a></div>
                                            <div class="title clearfix"><div class="ttl clearfix"><h5><a href="#">Lasagne <span class="s-info">SEASONAL</span></a></h5></div><div class="price"><span>N50,000.00</span></div></div>
                                            <div class="text desc"><a href="#">Vegetables, cheeses, ground meats, tomato sauce, seasonings and spices</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img src="images/resource/menu-image-7.png" alt=""></a></div>
                                            <div class="title clearfix"><div class="ttl clearfix"><h5><a href="#">Butternut Pumpkin</a></h5></div><div class="price"><span>N20,000.00</span></div></div>
                                            <div class="text desc"><a href="#">Typesetting industry lorem Lorem Ipsum is simply dummy text of the priand.</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-col col-lg-6 col-md-12 col-sm-12">
                                <div class="inner">
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img src="images/resource/menu-image-8.png" alt=""></a></div>
                                            <div class="title clearfix"><div class="ttl clearfix"><h5><a href="#">Tokusen Wagyu <span class="s-info">NEW</span></a></h5></div><div class="price"><span>N49,OOO.00</span></div></div>
                                            <div class="text desc"><a href="#">Vegetables, cheeses, ground meats, tomato sauce, seasonings and spices.</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img src="images/resource/menu-image-9.png" alt=""></a></div>
                                            <div class="title clearfix"><div class="ttl clearfix"><h5><a href="#">Olivas Rellenas</a></h5></div><div class="price"><span>N35,000.00</span></div></div>
                                            <div class="text desc"><a href="#">Avocados with crab meat, red onion, crab salad stuffed red bell pepper and  green bell pepper.</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img src="images/resource/menu-image-10.png" alt=""></a></div>
                                            <div class="title clearfix"><div class="ttl clearfix"><h5><a href="#">Opu Fish</a></h5></div><div class="price"><span>N59,000.00</span></div></div>
                                            <div class="text desc"><a href="#">Vegetables, cheeses, ground meats, tomato sauce, seasonings and spices</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Tab-->
                    <div class="tab" id="tab-4">
                        <div class="row clearfix">
                            <div class="menu-col col-lg-6 col-md-12 col-sm-12">
                                <div class="inner">
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img src="images/resource/menu-image-5.png" alt=""></a></div>
                                            <div class="title clearfix"><div class="ttl clearfix"><h5><a href="#">Greek Salad</a></h5></div><div class="price"><span>N35,000.50</span></div></div>
                                            <div class="text desc"><a href="#">Tomatoes, green bell pepper, sliced cucumber onion, olives, and feta cheese.</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img src="images/resource/menu-image-6.png" alt=""></a></div>
                                            <div class="title clearfix"><div class="ttl clearfix"><h5><a href="#">Lasagne <span class="s-info">SEASONAL</span></a></h5></div><div class="price"><span>N50,000.00</span></div></div>
                                            <div class="text desc"><a href="#">Vegetables, cheeses, ground meats, tomato sauce, seasonings and spices</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img src="images/resource/menu-image-7.png" alt=""></a></div>
                                            <div class="title clearfix"><div class="ttl clearfix"><h5><a href="#">Butternut Pumpkin</a></h5></div><div class="price"><span>N20,000.00</span></div></div>
                                            <div class="text desc"><a href="#">Typesetting industry lorem Lorem Ipsum is simply dummy text of the priand.</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-col col-lg-6 col-md-12 col-sm-12">
                                <div class="inner">
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img src="images/resource/menu-image-8.png" alt=""></a></div>
                                            <div class="title clearfix"><div class="ttl clearfix"><h5><a href="#">Tokusen Wagyu <span class="s-info">NEW</span></a></h5></div><div class="price"><span>N49,000.00</span></div></div>
                                            <div class="text desc"><a href="#">Vegetables, cheeses, ground meats, tomato sauce, seasonings and spices.</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img src="images/resource/menu-image-9.png" alt=""></a></div>
                                            <div class="title clearfix"><div class="ttl clearfix"><h5><a href="#">Olivas Rellenas</a></h5></div><div class="price"><span>N35,000.00</span></div></div>
                                            <div class="text desc"><a href="#">Avocados with crab meat, red onion, crab salad stuffed red bell pepper and  green bell pepper. Cucumber</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img src="images/resource/menu-image-10.png" alt=""></a></div>
                                            <div class="title clearfix"><div class="ttl clearfix"><h5><a href="#">Opu Fish</a></h5></div><div class="price"><span>N59,000.00</span></div></div>
                                            <div class="text desc"><a href="#">Vegetables, cheeses, ground meats, tomato sauce, seasonings and spices(also known as ATA-RODO)</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="open-timing">
                <div class="hours">During winter daily from <span class="theme_color">7:00 pm</span> to <span class="theme_color">9:00 pm</span></div>
                <div class="link-box">
                    <a href="#" class="theme-btn btn-style-two clearfix">
                        <span class="btn-wrap">
                            <span class="text-one">view all menu</span>
                            <span class="text-two">view all menu</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--Special Offer Section-->
    <section class="special-offer">
        <div class="outer-container">
            <div class="auto-container">
                <div class="title-box centered">
                    <div class="subtitle"><span>special offer</span></div>
                    <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div>
                    <h2>Best Specialties</h2>
                </div>
                <div class="dish-gallery-slider owl-theme owl-carousel">
                    <!--Slide Item-->
                    <div class="offer-block-two">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="images/resource/menu-image-11.jpg" alt=""></a></div>
                            <h4><a href="#">Greek Salad</a></h4>
                            <div class="text desc">Avocados with crab meat, red onion, crab salad red bell pepper...</div>
                            <div class="price">N100,000.00</div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="offer-block-two margin-top">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="images/resource/menu-image-12.jpg" alt=""></a></div>
                            <h4><a href="#">Tokusen Wagyu</a></h4>
                            <div class="text desc">Tomatoes, green bell pepper, sliced cucumber onion, olives...</div>
                            <div class="price">N89,000.00</div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="offer-block-two">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="images/resource/menu-image-13.jpg" alt=""></a></div>
                            <h4><a href="#">Butternut Pumpkin</a></h4>
                            <div class="text desc">Avocados with crab meat, red onion, crab salad stuffed bell pepper...</div>
                            <div class="price">N500M.00</div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="offer-block-two margin-top">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="images/resource/menu-image-14.jpg" alt=""></a></div>
                            <h4><a href="#">Opu Fish</a></h4>
                            <div class="text desc">Vegetables, cheeses, ground meats, tomato sauce, seasonings...</div>
                            <div class="price">N22,000.00</div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="offer-block-two">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="images/resource/menu-image-11.jpg" alt=""></a></div>
                            <h4><a href="#">Greek Salad</a></h4>
                            <div class="text desc">Avocados with crab meat, red onion, crab salad red bell pepper...</div>
                            <div class="price">N49,000.00</div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="offer-block-two margin-top">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="images/resource/menu-image-12.jpg" alt=""></a></div>
                            <h4><a href="#">Tokusen Wagyu</a></h4>
                            <div class="text desc">Tomatoes, green bell pepper, sliced cucumber onion, olives...</div>
                            <div class="price">N59,050.00</div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="offer-block-two">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="images/resource/menu-image-13.jpg" alt=""></a></div>
                            <h4><a href="#">Butternut Pumpkin</a></h4>
                            <div class="text desc">Avocados with crab meat, red onion, crab salad stuffed bell pepper...</div>
                            <div class="price">N25,000.00</div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="offer-block-two margin-top">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="images/resource/menu-image-14.jpg" alt=""></a></div>
                            <h4><a href="#">Opu Fish</a></h4>
                            <div class="text desc">Vegetables, cheeses, ground meats, tomato sauce, seasonings...</div>
                            <div class="price">N22,000.00</div>
                        </div>
                    </div>

                </div>
                
                <div class="lower-link-box text-center">
                    <a href="#" class="theme-btn btn-style-two clearfix">
                        <span class="btn-wrap">
                            <span class="text-one">view all menu</span>
                            <span class="text-two">view all menu</span>
                        </span>
                    </a>
                </div>
                
            </div>
        </div>
    </section>

    <!--Testimonials Section-->
    <section class="testimonials-section">
        <div class="image-layer" style="background-image: url(images/background/image-2.jpg);"></div>
        <div class="auto-container">
            <div class="carousel-box">
                <div class="testi-top owl-theme owl-carousel">
                    <div class="slide-item">
                        <div class="slide-content">
                            <div class="quotes">”</div>
                            <div class="text quote-text">I wanted to thank you for inviting me down for that amazing dinner the other night. The food was extraordinary.</div>
                        </div>
                    </div>
                    <div class="slide-item">
                        <div class="slide-content">
                            <div class="quotes">”</div>
                            <div class="text quote-text">I wanted to thank you for inviting me down for that amazing Breakfast this morning. The food was extraordinary.</div>
                        </div>
                    </div>
                    <div class="slide-item">
                        <div class="slide-content">
                            <div class="quotes">”</div>
                            <div class="text quote-text">I wanted to thank you for inviting me down for that amazing lunch this afthernoon. The food was extraordinary.</div>
                        </div>
                    </div>
                    <!-- <div class="slide-item">
                        <div class="slide-content">
                            <div class="quotes">”</div>
                            <div class="text quote-text">I wanted to thank you for inviting me down for that amazing dinner the other night. The food was extraordinary.</div>
                        </div>
                    </div>
                    <div class="slide-item">
                        <div class="slide-content">
                            <div class="quotes">”</div>
                            <div class="text quote-text">I wanted to thank you for inviting me down for that amazing dinner the other night. The food was extraordinary.</div>
                        </div>
                    </div>
                    <div class="slide-item">
                        <div class="slide-content">
                            <div class="quotes">”</div>
                            <div class="text quote-text">I wanted to thank you for inviting me down for that amazing dinner the other night. The food was extraordinary.</div>
                        </div>
                    </div> -->
                </div>
                <div class="separator"><span></span><span></span><span></span></div>
                <div class="thumbs-carousel-box">
                    <div class="testi-thumbs owl-theme owl-carousel">
                        <div class="slide-item">
                            <div class="image"><img src="images/resource/author-thumb-1.jpg"  alt=""></div>
                            <div class="auth-title">Sam Jhonson</div>
                        </div>
                        <div class="slide-item">
                            <div class="image"><img src="images/resource/author-thumb-2.jpg"  alt=""></div>
                            <div class="auth-title">Ian Botham</div>
                        </div>
                        <div class="slide-item">
                            <div class="image"><img src="images/resource/author-thumb-3.jpg"  alt=""></div>
                            <div class="auth-title">Dan Bitson</div>
                        </div>
                        <div class="slide-item">
                            <div class="image"><img src="images/resource/author-thumb-1.jpg"  alt=""></div>
                            <div class="auth-title">Sam Jhonson</div>
                        </div>
                        <div class="slide-item">
                            <div class="image"><img src="images/resource/author-thumb-2.jpg"  alt=""></div>
                            <div class="auth-title">Ian Botham</div>
                        </div>
                        <div class="slide-item">
                            <div class="image"><img src="images/resource/author-thumb-3.jpg"  alt=""></div>
                            <div class="auth-title">Dan Bitson</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Reservation Section-->
    <section class="reserve-section">
        <div class="auto-container">
            <div class="outer-box">
                <div class="row clearfix">
                    <div class="reserv-col col-lg-8 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="title">
                                <h2>Online Reservation</h2>
                                <div class="request-info">Booking request <a href="#">+2349151409269</a> or fill out the order form</div>
                            </div>
                            <div class="default-form reservation-form">
                                <form method="post" action="reservation-check.php">
                                    <div class="row clearfix">
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <div class="field-inner">
                                                <input type="text" name="fieldname" value="" placeholder="Your Name" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <div class="field-inner">
                                                <input type="number" name="fieldname" value="" placeholder="Phone Number" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <div class="field-inner">
                                                <span class="alt-icon far fa-user"></span>
                                                <select class="l-icon">
                                                    <option value="1">1 Person</option>
                                                    <option value ="2">2 Person</option>
                                                    <option value = "3">3 Person</option>
                                                    <option value ="4">4 Person</option>
                                                    <option value ="5">5 Person</option>
                                                    <option value ="6">6 Person</option>
                                                    <option value ="7" >7 Person</option>
                                                </select>
                                                <span class="arrow-icon far fa-angle-down"></span>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <div class="field-inner">
                                                <span class="alt-icon far fa-calendar"></span>
                                                <input class="l-icon datepicker" type="date" name="fieldname" value="" placeholder="DD-MM-YYYY" required readonly>
                                                <span class="arrow-icon far fa-angle-down"></span>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-4 col-md-12 col-sm-12">
                                            <div class="field-inner">
                                                <span class="alt-icon far fa-clock"></span>
                                                <select class="l-icon">
                                                    <option value ="8">08 : 00 am</option>
                                                    <option value ="9">09 : 00 am</option>
                                                    <option value ="10">10 : 00 am</option>
                                                    <option value ="11">11 : 00 am</option>
                                                    <option value ="12">12 : 00 pm</option>
                                                    <option value ="1">01 : 00 pm</option>
                                                    <option value ="2">02 : 00 pm</option>
                                                    <option value ="3">03 : 00 pm</option>
                                                    <option value ="4">04 : 00 pm</option>
                                                    <option value ="5">05 : 00 pm</option>
                                                    <option value ="6">06 : 00 pm</option>
                                                    <option value ="7">07 : 00 pm</option>
                                                    <option value ="8">08 : 00 pm</option>
                                                    <option value ="9">09 : 00 pm</option>
                                                    <option value ="10">10 : 00 pm</option>
                                                </select>
                                                <span class="arrow-icon far fa-angle-down"></span>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="field-inner">
                                                <!-- <input type="text" name="fieldname" value="" placeholder="Your Name" required> -->
                                                <textarea name="fieldname" placeholder="Message" required></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="field-inner">
                                                
                                                <button type="submit" class="theme-btn btn-style-one clearfix">
                                                    <span class="btn-wrap">
                                                        <span class="text-one">book a table</span>
                                                        <span class="text-two">book a table</span>
                                                    </span>
                                                </button>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="info-col col-lg-4 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="title">
                                <h2>Contact Us</h2>
                            </div>
                            <div class="data">
                                <div class="booking-info">
                                    <div class="bk-title">Booking request</div>
                                    <div class="bk-no"><a href="tel:+2349151409269">+2349151409269</a></div>
                                </div>
                                <div class="separator"><span></span></div>
                                <ul class="info">
                                    <li><strong>Location</strong><br>M.Oyekunle st, Oyo, Kosobo, Ashamu layout, Nigeria.</li>
                                    <li><strong>Lunch Time</strong><br>Monday to Sunday <br>11.00 am - 2.30pm</li>
                                    <li><strong>Dinner Time</strong><br>Monday to Sunday <br>05.00 pm - 10.00pm</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--Why Us Section-->
    <section class="why-us">
        <div class="left-bg"><img src="images/background/bg-8.png" alt="" title=""></div>
        <div class="right-bg"><img src="images/background/bg-7.png" alt="" title=""></div>
        <div class="auto-container">
            <div class="title-box centered">
                <div class="subtitle"><span>why choose us</span></div>
                <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div>
                <h2>Our Strength</h2>
            </div>
            <div class="row clearfix">
                <!--Block-->
                <div class="why-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="icon-box"><img src="images/resource/why-icon-1.png" alt=""></div>
                        <h4>Hygienic Food</h4>
                        <div class="text">Lorem Ipsum is simply dummy printing and typesetting.</div>
                    </div>
                </div>

                <!--Block-->
                <div class="why-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                        <div class="icon-box"><img src="images/resource/why-icon-2.png" alt=""></div>
                        <h4>Fresh Environment</h4>
                        <div class="text">Lorem Ipsum is simply dummy printing and typesetting.</div>
                    </div>
                </div>

                <!--Block-->
                <div class="why-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                        <div class="icon-box"><img src="images/resource/why-icon-3.png" alt=""></div>
                        <h4>Skilled Chefs</h4>
                        <div class="text">Lorem Ipsum is simply dummy printing and typesetting.</div>
                    </div>
                </div>

                <!--Block-->
                <div class="why-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="900ms">
                        <div class="icon-box"><img src="images/resource/why-icon-4.png" alt=""></div>
                        <h4>Event & Party</h4>
                        <div class="text">Lorem Ipsum is simply dummy printing and typesetting.</div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--Featured Links Section-->
    <section class="featured-links">
        <div class="outer-container">
            <div class="row clearfix">
                <!--Block-->
                <div class="link-block col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="text-block">
                            <div class="bl-inner">
                                <div class="content">
                                    <div class="subtitle">best menu</div>
                                    <h3>Special Dishes</h3>
                                    <div class="text">Lorem Ipsum is simply dummy printing.</div>
                                    <div class="link"><a href="#" class="theme-btn"><span>view menu</span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="image-box">
                            <div class="image-layer" style="background-image: url(images/resource/featured-1.jpg);"></div>
                            <div class="image"><img src="images/resource/featured-1.jpg" alt=""></div>
                        </div>
                    </div>
                </div>

                <!--Block-->
                <div class="link-block alternate col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                        <div class="image-box">
                            <div class="image-layer" style="background-image: url(images/resource/featured-2.jpg);"></div>
                            <div class="image"><img src="images/resource/featured-2.jpg" alt=""></div>
                        </div>
                        <div class="text-block">
                            <div class="bl-inner">
                                <div class="content">
                                    <div class="subtitle">Latest</div>
                                    <h3>Upcoming Events</h3>
                                    <div class="text">Simply dummy printing and setting.</div>
                                    <div class="link"><a href="#" class="theme-btn"><span>join event</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Block-->
                <div class="link-block col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="inner wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                        <div class="text-block">
                            <div class="bl-inner">
                                <div class="content">
                                    <div class="subtitle">selected</div>
                                    <h3>Chef Choice</h3>
                                    <div class="text">Dummy printing lorem Ipsum simply.</div>
                                    <div class="link"><a href="#" class="theme-btn"><span>view menu</span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="image-box">
                            <div class="image-layer" style="background-image: url(images/resource/featured-3.jpg);"></div>
                            <div class="image"><img src="images/resource/featured-3.jpg" alt=""></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--Team Section-->
    <section class="team-section">
        <div class="left-bg"><img src="images/background/bg-21.png" alt="" title=""></div>
        <div class="right-bg"><img src="images/background/bg-9.png" alt="" title=""></div>
        <div class="auto-container">
            <div class="title-box centered">
                <div class="subtitle"><span>experienced team</span></div>
                <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div>
                <h2>Meet Our Chef</h2>
            </div>
            <div class="row justify-content-center clearfix">
                <!--Block-->
                <div class="team-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="image">
                            <img src="images/resource/team-1.jpg" alt="">
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <!-- Social Box -->
                                    <ul class="social-box">
                                        <li><a href="#" class="fab fa-facebook-f"></a></li>
                                        <li><a href="#" class="fab fa-twitter"></a></li>
                                        <li><a href="#" class="fab fa-dribbble"></a></li>
                                        <li><a href="#" class="fab fa-linkedin"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <h3><a href="#">Willium Joe</a></h3>
                        <div class="designation">Master chef</div>
                        <div class="text desc">Lorem Ipsum is simply dummy printing and typeset industry lorem Ipsum has been the industrys.</div>
                    </div>
                </div>

                <!--Block-->
                <div class="team-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                        <div class="image">
                            <img src="images/resource/team-2.jpg" alt="">
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <!-- Social Box -->
                                    <ul class="social-box">
                                        <li><a href="#" class="fab fa-facebook-f"></a></li>
                                        <li><a href="#" class="fab fa-twitter"></a></li>
                                        <li><a href="#" class="fab fa-dribbble"></a></li>
                                        <li><a href="#" class="fab fa-linkedin"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <h3><a href="#">Steave Den</a></h3>
                        <div class="designation">Master chef</div>
                        <div class="text desc">Lorem Ipsum is simply dummy printing and typeset industry lorem Ipsum has been the industrys.</div>
                    </div>
                </div>

                <!--Block-->
                <div class="team-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                        <div class="image">
                            <img src="images/resource/team-3.jpg" alt="">
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <!-- Social Box -->
                                    <ul class="social-box">
                                        <li><a href="#" class="fab fa-facebook-f"></a></li>
                                        <li><a href="#" class="fab fa-twitter"></a></li>
                                        <li><a href="#" class="fab fa-dribbble"></a></li>
                                        <li><a href="#" class="fab fa-linkedin"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <h3><a href="#">Lily Sopy</a></h3>
                        <div class="designation">Master chef</div>
                        <div class="text desc">Lorem Ipsum is simply dummy printing and typeset industry lorem Ipsum has been the industrys.</div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--Intro Section-->
    <section class="intro-section">
        <div class="image-layer" style="background-image: url(images/background/image-3.jpg);"></div>
        <div class="auto-container">
            <div class="content-box">
                <div class="title-box centered">
                    <div class="subtitle"><span>amazing experience</span></div>
                    <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div>
                    <h2>Watch Our Video</h2>
                </div>
                <div class="play-btn"><a href="#" class="lightbox-image theme-btn"><span class="icon fal fa-play"><i class="ripple"></i></span></a></div>
                <div class="separator"><span></span><span></span><span></span></div>
                <h3>A modern restaurant with a menu that will make your mouth water.</h3>
                <div class="auth-title">Willium Joe - Master chef</div>
            </div>

            <div class="fact-counter">
                <div class="row clearfix">
                    <div class="fact-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner clearfix">
                            <div class="fact-count"><div class="count-box"><span class="count-text" data-stop="150" data-speed="2000">0</span><i>+</i></div></div>
                            <div class="fact-title">daily <br>order</div>
                        </div>
                    </div>
                    <div class="fact-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner clearfix">
                            <div class="fact-count"><div class="count-box"><span class="count-text" data-stop="82" data-speed="1500">0</span><i>+</i></div></div>
                            <div class="fact-title">Special <br>Dishes</div>
                        </div>
                    </div>
                    <div class="fact-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner clearfix">
                            <div class="fact-count"><div class="count-box"><span class="count-text" data-stop="35" data-speed="1000">0</span><i>+</i></div></div>
                            <div class="fact-title">expert <br>chef</div>
                        </div>
                    </div>
                    <div class="fact-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner clearfix">
                            <div class="fact-count"><div class="count-box"><span class="count-text" data-stop="10" data-speed="1000">0</span><i>+</i></div></div>
                            <div class="fact-title">awards <br>won</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--Recnt Updates Section-->
    <section class="news-section">
        <div class="auto-container">
            <div class="title-box centered">
                <div class="subtitle"><span>recent updates</span></div>
                <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div>
                <h2>Upcoming Event</h2>
            </div>
            <div class="row justify-content-center clearfix">
                <!--Block-->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="image-box">
                            <div class="date"><span>15/09/2022</span></div>
                            <div class="image"><a href="#"><img src="images/resource/news-2.jpg" alt=""></a></div>
                            <div class="over-content">
                                <div class="cat">Food, flavour</div>
                                <h4><a href="#">Flavour so good you’ll try to eat with your eyes.</a></h4>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Block-->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                        <div class="image-box">
                            <div class="date"><span>08/09/2022</span></div>
                            <div class="image"><a href="#"><img src="images/resource/news-1.jpg" alt=""></a></div>
                            <div class="over-content">
                                <div class="cat">healthy food</div>
                                <h4><a href="#">Flavour so good you’ll try to eat with your eyes.</a></h4>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Block-->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                        <div class="image-box">
                            <div class="date"><span>03/09/2022</span></div>
                            <div class="image"><a href="#"><img src="images/resource/news-3.jpg" alt=""></a></div>
                            <div class="over-content">
                                <div class="cat">recipie</div>
                                <h4><a href="#">Flavour so good you’ll try to eat with your eyes.</a></h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
            <div class="lower-link-box text-center">
                <a href="#" class="theme-btn btn-style-two clearfix">
                    <span class="btn-wrap">
                        <span class="text-one">view our blog</span>
                        <span class="text-two">view our blog</span>
                    </span>
                </a>
            </div>
            
        </div>
    </section>

    <!--Main Footer-->
    <footer class="main-footer">
        <div class="image-layer" style="background-image: url(images/background/image-4.jpg);"></div>
        <div class="upper-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Footer Col-->
                    <div class="footer-col info-col col-lg-6 col-md-12 col-sm-12">
                        <div class="inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="logo"><a href="#" title="Delici - Restaurants HTML Template"><img src="images/logo.jpg" alt="" title="Delici - Restaurants HTML Template"></a></div>
                                <div class="info">
                                    <ul>
                                        <li>M.Oyekunle st, Oyo, Kosobo, Ashamu layout, Nigeria.</li>
                                        <li><a href="mailto:babmoh06@gmail.com">babmoh06@gmail.com</a></li>
                                        <li><a href="tel:+2349151409269">Booking Request : +2349151409269</a></li>
                                        <li>Open : 09:00 am - 01:00 pm</li>
                                    </ul>
                                </div>
                                <div class="separator"><span></span><span></span><span></span></div>
                                <div class="newsletter">
                                    <h3>Get News & Offers</h3>
                                    <div class="text">Subscribe us & Get <span>25% Off.</span></div>
                                    <div class="newsletter-form">
                                        <form method="post" action="#">
                                            <div class="form-group">
                                                <span class="alt-icon far fa-envelope"></span>
                                                <input type="email" name="email" value="" placeholder="Your email" required>
                                                <button type="submit" class="theme-btn btn-style-one clearfix">
                                                    <span class="btn-wrap">
                                                        <span class="text-one">subscribe</span>
                                                        <span class="text-two">subscribe</span>
                                                    </span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Footer Col-->
                    <div class="footer-col links-col col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <ul class="links">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Menus</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Our chefs</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Footer Col-->
                    <div class="footer-col links-col last col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <ul class="links">
                                <li><a href="#">facebook</a></li>
                                <li><a href="#">instagram</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Youtube</a></li>
                                <li><a href="#">Google map</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>
<!--End pagewrapper--> 

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-up"></span></div>

<script src="js/jquery.js"></script>
<!-- <script src="js/popper.min.js"></script> -->
<!-- <script src="js/bootstrap.min.js"></script> -->
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/swiper.js"></script>
<script src="js/owl.js"></script>
<script src="js/appear.js"></script>
<script src="js/wow.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/custom-script.js"></script>
</body>
</html>