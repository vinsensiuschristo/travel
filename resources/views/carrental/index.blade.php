<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>PiknikEdu</title>
<!-- Stylesheets -->
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link rel="shortcut icon" href="{{ asset('images/new-icon.png')}}" type="image/x-icon">
<link rel="icon" href="{{ asset('images/new-icon.png')}}" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]--> 

</head>

<body>
  <div class="page-wrapper"> 
  
    <!-- Preloader -->
    <div class="preloader"></div> 
    <div class="search-backdrop"></div>
    <!-- Main Header-->
    <header class="main-header header-style-two">
        <!-- Header Upper -->
        <div class="header-upper">        
            <div class="auto-container">
                <!-- Main Box -->
                <div class="main-box clearfix">
                    <!--Logo-->
                    <div class="logo-box">
                        <div class="logo"><a href="{{ route('menu.index') }}" title="PiknikEdu"><img src="{{ asset('images/new-icon.png') }}" alt="" title="PiknikEdu"></a></div>
                    </div>

                    <div class="nav-box clearfix">
                        <!--Nav Outer-->
                        <div class="nav-outer clearfix">         
                            <nav class="main-menu">
                                <ul class="navigation clearfix">
                                    <li><a href="{{ route('menu.index') }}">Home</a></li>
                                    <li class="current"><a href="{{ route('menu.about-us') }}">About Us</a></li>
                                    <li class="dropdown"><a href="#">Destinations</a>
                                        <ul>
                                            <li><a href="{{ route('menu.inter-destination') }}">International Destination</a></li>
                                            <li><a href="{{ route('menu.local-destination') }}">Local Destination</a></li>
                                        </ul>
                                    </li>
                                    <li class="current"><a href="{{ route('menu.car-rental') }}">Car Rental</a></li>
                                    <li><a href="{{ route('menu.booking') }}">Booking</a></li>
                                    <li><a href="{{ route('menu.contact-us') }}">Contact</a></li>
                                </ul>
                            </nav>
                            <!-- Main Menu End-->
                        </div>
                        <!--Nav Outer End-->

                        <!-- Hidden Nav Toggler -->
                        <div class="nav-toggler">
                            <button title="menu-icon" class="hidden-bar-opener"><span class="icon"><img src="{{asset('images/icons/menu-icon.svg')}}" alt=""></span></button>
                        </div>

                    </div>

                    <!-- End Header Upper -->
                    <div class="search-box">
                        <div class="outer-container">
                            <div class="inner-box">
                                <div class="form-box">
                                    <div class="s-close-btn"><span class="icon far fa-times"></span></div>
                                    <span class="s-icon fa fa-search"></span>
                                    <form method="post" action="index.html">
                                        <div class="form-group">
                                            <input type="search" name="search" value="" placeholder="Search Here" required="">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!--End Main Header -->

    <!-- Hidden Navigation Bar -->
    <section class="hidden-bar">
        <!-- Hidden Bar Wrapper -->
        <div class="hidden-bar-wrapper">
            <div class="hidden-bar-closer"><span class="icon"><svg class="icon-close" role="presentation" viewBox="0 0 16 14"><path d="M15 0L1 14m14 0L1 0" stroke="currentColor" fill="none" fill-rule="evenodd"></path></svg></span></div>
            <div class="nav-logo-box">
                <div class="logo"><a href="index.html" title="Treker"><img src="{{asset('images/new-icon.png')}}" alt="" title="Treker"></a></div>
            </div>
            <!-- .Side-menu -->
            <div class="side-menu">
                <ul class="navigation clearfix">
                    <li><a href="{{ route('menu.index') }}">Home</a></li>
                    <li><a href="{{ route('menu.about-us') }}">About Us</a></>
                    <li class="dropdown"><a href="#">Destinations</a>
                        <ul>
                            <li><a href="{{ route('menu.inter-destination') }}">International Destination</a></li>
                            <li><a href="{{ route('menu.local-destination') }}">Local Destination</a></li>
                        </ul>
                    </li>
                    <li class="current"><a href="{{ route('menu.car-rental') }}">Car Rental</a></li>
                    <li><a href="{{ route('menu.booking') }}">Booking</a></li>
                    <li><a href="{{ route('menu.contact-us') }}">Contact</a></li>
                </ul>
            </div><!-- /.Side-menu -->
        
        </div><!-- / Hidden Bar Wrapper -->
    </section>

            <div class="cart-backdrop"></div>
            <!--Cart Sidebar-->
            <div class="cart-sidebar">
                <div class="cart-side-inner">
                    <div class="cart-side-header">
                        <div class="closer-btn"><span>Close</span></div>
                        <h5>Shopping Cart</h5>
                    </div>
                    <div class="prod-box">
                        <div class="prod-block">
                            <div class="prod-inner">
                                <div class="prod-thumb">
                                    <a href="#"><img src="images/resource/shop/shop-thumb-1.jpg" alt="" /></a>
                                </div>
                                <div class="remove-item">
                                    <a href="#"><i class="far fa-times"></i></a>
                                </div>
                                <div class="prod-title"><a href="#">Smart Air Bag Travel</a></div>
                                <div class="quantity-box">
                                    <div class="item-quantity">
                                        <input class="qty-spinner" type="text" value="1" name="quantity" />
                                    </div>
                                </div>
                                <div class="calculations">1 x <span>$225.00</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lower-content">
                    <div class="count clearfix">
                        <span class="ttl">Subtotal</span>
                        <span class="dtl">$225.00</span>
                    </div>
                    <div class="links clearfix">
                        <div class="left">
                            <a href="#" class="theme-btn btn-style-one"><span>View Cart</span></a>
                        </div>
                        <div class="right">
                            <a href="#" class="theme-btn btn-style-two"><span>Checkout</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Banner Section -->
            <section class="inner-banner">
                <div class="image-layer" style="background-image: url(images/background/car-rental-banner.png);"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h2>Car Rental</h2>
                        <div class="bread-crumb">
                            <ul class="clearfix">
                                <li><span class="icon-home fa fa-home"></span><a href="index.html">Home</a></li>
                                <li class="current">Car Rental</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!--End Banner Section -->

            <!--Trekking Section-->
            <section class="trekking-section">
                <div class="floated-icon left"><img src="images/resource/hills-image-2.svg" alt="" title="" /></div>
                <div class="floated-icon right"><img src="images/resource/stones-right.svg" alt="" title="" /></div>
                <div class="floated-icon right-2"><img src="images/resource/floated-icon-right-2.svg" alt="" title="" /></div>
                <div class="auto-container">
                    <div class="title-box centered">
                        <h2><span>Seru-Seruan Tanpa Drama, Mobil Udah Ada!</span></h2>
                        <div class="text">
                            Weekend vibes? Road trip goals? Atau acara dadakan? Mobil kita bikin semuanya jadi gampang. Cuma satu klik, langsung jalan!
                        </div>
                    </div>
                    <!--MixitUp Galery-->
                    <div class="mixitup-gallery">
                        <!--Filter-->
                        <div class="gallery-filters centered clearfix">
                            <ul class="filter-tabs filter-btns clearfix">
                                <li class="active filter" data-role="button" data-filter="all">All Types</li>
                                <li class="filter" data-role="button" data-filter=".suv">SUV</li>
                                <li class="filter" data-role="button" data-filter=".mpv">MPV</li>
                                <li class="filter" data-role="button" data-filter=".hatchback">Hatchback</li>
                                <li class="filter" data-role="button" data-filter=".hiace">Hiace</li>
                            </ul>
                        </div>
                        <div class="filter-list row clearfix">
                            <!--Block-->
                            <div class="trek-block-one style-two mix all suv col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <div class="image">
                                            <a href="#"><img src="images/resource/f-image-1.jpg" alt="" title="" /></a>
                                        </div>
                                        <div class="price"><span>$120</span></div>
                                        <div class="info">
                                            <span class="i-block"><i class="icon far fa-clock"></i> 5 days</span> &ensp; | &ensp; <span class="i-block">SUV</span>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="#">Toyota Fortuner</a></h4>
                                        <div class="text">Dengan ground clearance tinggi dan performa tangguh, SUV siap membawa Anda ke medan yang lebih menantang.</div>
                                    </div>
                                    <div class="bottom-box clearfix">
                                        <div class="more-link">
                                            <a href="#" class="theme-btn">
                                                <span>
                                                    View Details <i class="icon"><img src="images/icons/logo-icon.svg" alt="" /></i>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="video-link">
                                            <a href="#" class="theme-btn"><i class="icon far fa-video-camera"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Block-->
                            <div class="trek-block-one style-two mix all mpv col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <div class="image">
                                            <a href="#"><img src="images/resource/f-image-2.jpg" alt="" title="" /></a>
                                        </div>
                                        <div class="price"><span>$120</span></div>
                                        <div class="info">
                                            <span class="i-block"><i class="icon far fa-clock"></i> 5 days</span> &ensp; | &ensp; <span class="i-block">259P, Himalaya Ag</span>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="#">Toyota Avanza</a></h4>
                                        <div class="text"> Desain interior yang fleksibel memungkinkan Anda mengatur konfigurasi kursi sesuai kebutuhan, sehingga Anda bisa membawa lebih banyak</div>
                                    </div>
                                    <div class="bottom-box clearfix">
                                        <div class="more-link">
                                            <a href="#" class="theme-btn">
                                                <span>
                                                    View Details <i class="icon"><img src="images/icons/logo-icon.svg" alt="" /></i>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="video-link">
                                            <a href="#" class="theme-btn"><i class="icon far fa-video-camera"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Block-->
                            <div class="trek-block-one style-two mix all mpv col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <div class="image">
                                            <a href="#"><img src="images/resource/f-image-3.jpg" alt="" title="" /></a>
                                        </div>
                                        <div class="price"><span>$120</span></div>
                                        <div class="info">
                                            <span class="i-block"><i class="icon far fa-clock"></i> 5 days</span> &ensp; | &ensp; <span class="i-block">259P, Himalaya Ag</span>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="#">Wuling Confero</a></h4>
                                        <div class="ratings clearfix">
                                            <div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star empty"></i></div>
                                            <div class="rev"><a href="#">05 Review</a></div>
                                        </div>
                                        <div class="text">Desain interior yang fleksibel memungkinkan Anda mengatur </div>
                                    </div>
                                    <div class="bottom-box clearfix">
                                        <div class="more-link">
                                            <a href="#" class="theme-btn">
                                                <span>
                                                    View Details <i class="icon"><img src="images/icons/logo-icon.svg" alt="" /></i>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="video-link">
                                            <a href="#" class="theme-btn"><i class="icon far fa-video-camera"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Block-->
                            <div class="trek-block-one style-two mix all suv col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <div class="image">
                                            <a href="#"><img src="images/resource/f-image-1.jpg" alt="" title="" /></a>
                                        </div>
                                        <div class="price"><span>$120</span></div>
                                        <div class="info">
                                            <span class="i-block"><i class="icon far fa-clock"></i> 5 days</span> &ensp; | &ensp; <span class="i-block">SUV</span>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="#">Toyota Fortuner</a></h4>
                                        <div class="text">Dengan ground clearance tinggi dan performa tangguh, SUV siap membawa Anda ke medan yang lebih menantang.</div>
                                    </div>
                                    <div class="bottom-box clearfix">
                                        <div class="more-link">
                                            <a href="#" class="theme-btn">
                                                <span>
                                                    View Details <i class="icon"><img src="images/icons/logo-icon.svg" alt="" /></i>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="video-link">
                                            <a href="#" class="theme-btn"><i class="icon far fa-video-camera"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Block-->
                            <div class="trek-block-one style-two mix all mpv col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <div class="image">
                                            <a href="#"><img src="images/resource/f-image-2.jpg" alt="" title="" /></a>
                                        </div>
                                        <div class="price"><span>$120</span></div>
                                        <div class="info">
                                            <span class="i-block"><i class="icon far fa-clock"></i> 5 days</span> &ensp; | &ensp; <span class="i-block">259P, Himalaya Ag</span>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="#">Toyota Avanza</a></h4>
                                        <div class="text"> Desain interior yang fleksibel memungkinkan Anda mengatur konfigurasi kursi sesuai kebutuhan, sehingga Anda bisa membawa lebih banyak</div>
                                    </div>
                                    <div class="bottom-box clearfix">
                                        <div class="more-link">
                                            <a href="#" class="theme-btn">
                                                <span>
                                                    View Details <i class="icon"><img src="images/icons/logo-icon.svg" alt="" /></i>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="video-link">
                                            <a href="#" class="theme-btn"><i class="icon far fa-video-camera"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Block-->
                            <div class="trek-block-one style-two mix all mpv col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <div class="image">
                                            <a href="#"><img src="images/resource/f-image-3.jpg" alt="" title="" /></a>
                                        </div>
                                        <div class="price"><span>$120</span></div>
                                        <div class="info">
                                            <span class="i-block"><i class="icon far fa-clock"></i> 5 days</span> &ensp; | &ensp; <span class="i-block">259P, Himalaya Ag</span>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="#">Wuling Confero</a></h4>
                                        <div class="ratings clearfix">
                                            <div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star empty"></i></div>
                                            <div class="rev"><a href="#">05 Review</a></div>
                                        </div>
                                        <div class="text">Desain interior yang fleksibel memungkinkan Anda mengatur </div>
                                    </div>
                                    <div class="bottom-box clearfix">
                                        <div class="more-link">
                                            <a href="#" class="theme-btn">
                                                <span>
                                                    View Details <i class="icon"><img src="images/icons/logo-icon.svg" alt="" /></i>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="video-link">
                                            <a href="#" class="theme-btn"><i class="icon far fa-video-camera"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Block-->
                            <div class="trek-block-one style-two mix all suv col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <div class="image">
                                            <a href="#"><img src="images/resource/f-image-1.jpg" alt="" title="" /></a>
                                        </div>
                                        <div class="price"><span>$120</span></div>
                                        <div class="info">
                                            <span class="i-block"><i class="icon far fa-clock"></i> 5 days</span> &ensp; | &ensp; <span class="i-block">SUV</span>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="#">Toyota Fortuner</a></h4>
                                        <div class="text">Dengan ground clearance tinggi dan performa tangguh, SUV siap membawa Anda ke medan yang lebih menantang.</div>
                                    </div>
                                    <div class="bottom-box clearfix">
                                        <div class="more-link">
                                            <a href="#" class="theme-btn">
                                                <span>
                                                    View Details <i class="icon"><img src="images/icons/logo-icon.svg" alt="" /></i>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="video-link">
                                            <a href="#" class="theme-btn"><i class="icon far fa-video-camera"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Block-->
                            <div class="trek-block-one style-two mix all mpv col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <div class="image">
                                            <a href="#"><img src="images/resource/f-image-2.jpg" alt="" title="" /></a>
                                        </div>
                                        <div class="price"><span>$120</span></div>
                                        <div class="info">
                                            <span class="i-block"><i class="icon far fa-clock"></i> 5 days</span> &ensp; | &ensp; <span class="i-block">259P, Himalaya Ag</span>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="#">Toyota Avanza</a></h4>
                                        <div class="text"> Desain interior yang fleksibel memungkinkan Anda mengatur konfigurasi kursi sesuai kebutuhan, sehingga Anda bisa membawa lebih banyak</div>
                                    </div>
                                    <div class="bottom-box clearfix">
                                        <div class="more-link">
                                            <a href="#" class="theme-btn">
                                                <span>
                                                    View Details <i class="icon"><img src="images/icons/logo-icon.svg" alt="" /></i>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="video-link">
                                            <a href="#" class="theme-btn"><i class="icon far fa-video-camera"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="load-more">
                            <a href="#" class="theme-btn btn-style-one"><span>Load More......</span></a>
                        </div>
                    </div>
                </div>
            </section>

            <!--FAQs Section-->
            <section class="faq-one tracking-page">
                <div class="floated-icon left"><img src="images/resource/stones-left.svg" alt="" title="" /></div>
                <div class="floated-icon right"><img src="images/resource/floated-icon-right-2.svg" alt="" title="" /></div>
                <div class="auto-container">
                    <div class="title-box centered">
                        <h2><span>Get Some Important Answer</span></h2>
                    </div>
                    <div class="row clearfix">
                        <!--Text Col-->
                        <div class="text-col col-lg-6 col-md-12 col-sm-12">
                            <div class="inner wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                                <div class="accordion-box clearfix">
                                    <!--Block-->
                                    <div class="accordion block active-block">
                                        <div class="acc-btn active">What is Trekking? <i class="fa-regular fa-angle-down"></i></div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">
                                                    One of the major benefits of trekking is that it improves your physical health immensely. Spending multiple hours on the trail, climbing around boulders, rock hopping and ascending hills
                                                    gives your whole body a workout, improving your strength, agility and cardio fitness.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="accordion block">
                                        <div class="acc-btn">What do I need to carry? <i class="fa-regular fa-angle-down"></i></div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">
                                                    One of the major benefits of trekking is that it improves your physical health immensely. Spending multiple hours on the trail, climbing around boulders, rock hopping and ascending hills
                                                    gives your whole body a workout, improving your strength, agility and cardio fitness.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="accordion block">
                                        <div class="acc-btn">How concerned should I be about the altitude? <i class="fa-regular fa-angle-down"></i></div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">
                                                    One of the major benefits of trekking is that it improves your physical health immensely. Spending multiple hours on the trail, climbing around boulders, rock hopping and ascending hills
                                                    gives your whole body a workout, improving your strength, agility and cardio fitness.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="accordion block">
                                        <div class="acc-btn">What do we eat and drink while on trek? <i class="fa-regular fa-angle-down"></i></div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">
                                                    One of the major benefits of trekking is that it improves your physical health immensely. Spending multiple hours on the trail, climbing around boulders, rock hopping and ascending hills
                                                    gives your whole body a workout, improving your strength, agility and cardio fitness.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Image Col-->
                        <div class="image-col col-lg-6 col-md-12 col-sm-12">
                            <div class="inner wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
                                <div class="image-box">
                                    <img src="images/resource/faq-image-1.svg" alt="" title="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--Main Footer-->
            <footer class="footer-two">
                <div class="bg-layer" style="background-image: url(images/background/footer-bg.png);"></div>
                <div class="upper-section">
                    <div class="auto-container">
                        <div class="row clearfix">
                            <div class="footer-column col-xl-4 col-lg-12 col-md-12 col-sm-12">
                                <!--Logo-->
                                <div class="footer-logo">
                                    <div class="logo">
                                        <a href="index.html" title="Treker"><img src="images/new-icon.png" alt="" title="Treker" /></a>
                                    </div>
                                </div>
                                <div class="footer-text">Inovation Tour didirikan pada tahun 2024 oleh para pecinta traveling. Kami ingin Anda merasakan petualangan yang tak terlupakan dengan berbagai pilihan wisata yang unik dan seru</div>
                                <div class="social-links">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/inovationtour.official/"><i class="fab fa-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="big-column col-xl-8 col-lg-12 col-md-12 col-sm-12">
                                <div class="row clearfix">
                                    <div class="footer-column col-lg-3 col-md-4 col-sm-12">
                                        <h6>Quick lInks</h6>
                                        <div class="links">
                                            <ul>
                                                <li><a href="{{ route('menu.index') }}">Home</a></li>
                                                <li><a href="{{ route('menu.about-us') }}">About Us</a></li>
                                                <li><a href="{{ route('menu.inter-destination') }}">International Destination</a></li>
                                                <li><a href="{{ route('menu.local-destination') }}">Local Destination</a></li>
                                                <li><a href="{{ route('menu.booking') }}">Booking</a></li>
                                                <li><a href="{{ route('menu.contact-us') }}">Contact</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="info-block col-lg-9 col-md-4 col-sm-12">
                                        <h6>Address</h6>
                                        <div class="info">
                                            <ul class="clearfix">
                                                <li>Perumahan Puri Hesti Insani Jl. Puri Hesti Insani No.Perumahan Blok B6, RT.17/RW.15, Mampir, Kec. Cileungsi, Kabupaten Bogor, Jawa Barat 16820</li>
                                            </ul>
                                        </div>

                                        <div class="social-links">
                                            <ul class="clearfix">
                                                <li>
                                                    <a href="https://wa.me/+6282213909746?text=INI%PESAN%DARI%INOVATION%TOUR" target="_blank" rel="noopener noreferrer"><i class="fab fa-whatsapp"></i></a>
                                                </li>
                                                <li>
                                                    <a href="https://wa.me/+6282213909746?text=INI%PESAN%DARI%INOVATION%TOUR" target="_blank" rel="noopener noreferrer"><i class="fas fa-phone"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="f-bottom">
                    <div class="auto-container">
                        <div class="inner clearfix">
                            <div class="copyright">Copyright &copy; 2022 Treker. All Rights Reserved. Designed by ThemeIM</div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!--End pagewrapper-->

        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target="html">
            <span class="icon"><img src="images/icons/arrow-up.svg" alt="" title="Go To Top" /></span>
        </div>

        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery-ui.js') }}"></script>
        <script src="{{ asset('js/jquery.fancybox.js') }}"></script>
        <script src="{{ asset('js/mixitup.js') }}"></script>
        <script src="{{ asset('js/touchspin.js') }}"></script>
        <script src="{{ asset('js/owl.js') }}"></script>
        <script src="{{ asset('js/wow.js') }}"></script>
        <script src="{{ asset('js/custom-script.js') }}"></script>
    </body>
</html>
