<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>WAHYU MELKI TRAVEL</title>
<!-- Stylesheets -->
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link rel="shortcut icon" href="{{ asset('images/favicon.png')}}" type="image/x-icon">
<link rel="icon" href="{{ asset('images/favicon.png')}}" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                         <div class="logo"><a href="index.html" title="Treker"><img src="{{asset('images/logo.svg')}}" alt="" title="Treker"></a></div>
                    </div>

                    <div class="nav-box clearfix">
                        <!--Nav Outer-->
                        <div class="nav-outer clearfix">         
                            <nav class="main-menu">
                                <ul class="navigation clearfix">
                                    <li class="current dropdown"><a href="index.html">Home</a>
                                        <ul>
                                            <li><a href="index.html">Home 01</a></li>
                                            <li><a href="index-2.html">Home 02</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="about.html">About Us</a>
                                        <ul>
                                            <li><a href="team.html">Our Team</a></li>
                                            <li><a href="team-member.html">Team Member</a></li>
                                            <li><a href="faq.html">FAQs</a></li>
                                            <li><a href="gallery.html">Gallery</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="shop.html">Shop</a>
                                        <ul>
                                            <li><a href="shop.html">Our Shop</a></li>
                                            <li><a href="product-single.html">Product Details</a></li>
                                            <li><a href="wishlist.html">My Wishlist</a></li>
                                            <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="signup.html">Signup</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="reset-password.html">Forgot Password</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="destinations.html">Destinations</a></li>
                                    <li><a href="trekking.html">Trekking</a></li>
                                    <li class="dropdown"><a href="#">Pages</a>
                                        <ul>
                                            <li><a href="activities.html">Activities</a></li>
                                            <li><a href="destinations-2.html">Destinations 02</a></li>
                                            <li><a href="tours.html">Tours</a></li>
                                            <li><a href="packages.html">Packages 01</a></li>
                                            <li><a href="packages-2.html">Packages 02</a></li>
                                            <li><a href="booking.html">Booking</a></li>
                                            <li><a href="terms-conditions.html">Terms & Conditions</a></li>
                                            <li><a href="error-page.html">404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="blog.html">News</a>
                                        <ul>
                                            <li><a href="blog.html">Our Blog</a></li>
                                            <li><a href="blog-2.html">Blog Classic</a></li>
                                            <li><a href="blog-single.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                            <!-- Main Menu End-->
                        </div>
                        <!--Nav Outer End-->

                        <div class="links-box clearfix">
                            <div class="link search-btn search-toggle"><span class="icon far fa-search"></span></div>
                            <div class="link fav-btn"><a href="#"><span class="icon far fa-heart"></span><span class="count">02</span></a></div>
                            <div class="link cart-btn"><a href="#" class="clearfix"><div class="cart-info"><span class="icon far fa-shopping-cart"></span>00 Items</div></a></div>
                        </div>

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

    <!--Search Backdrop-->
    <div class="search-backdrop"></div>

    
    <!--Menu Backdrop-->
    <div class="menu-backdrop"></div>

    <!-- Hidden Navigation Bar -->
    <section class="hidden-bar">
        <!-- Hidden Bar Wrapper -->
        <div class="hidden-bar-wrapper">
            <div class="hidden-bar-closer"><span class="icon"><svg class="icon-close" role="presentation" viewBox="0 0 16 14"><path d="M15 0L1 14m14 0L1 0" stroke="currentColor" fill="none" fill-rule="evenodd"></path></svg></span></div>
            <div class="nav-logo-box">
                <div class="logo"><a href="index.html" title="Treker"><img src="{{asset('images/logo.svg')}}" alt="" title="Treker"></a></div>
            </div>
            <!-- .Side-menu -->
            <div class="side-menu">
                 <ul class="navigation clearfix">
                    <li class="current dropdown"><a href="index.html">Home</a>
                        <ul>
                            <li><a href="index.html">Home 01</a></li>
                            <li><a href="index-2.html">Home 02</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="about.html">About Us</a>
                        <ul>
                            <li><a href="team.html">Our Team</a></li>
                            <li><a href="team-member.html">Team Member</a></li>
                            <li><a href="faq.html">FAQs</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="shop.html">Shop</a>
                        <ul>
                            <li><a href="shop.html">Our Shop</a></li>
                            <li><a href="product-single.html">Product Details</a></li>
                            <li><a href="wishlist.html">My Wishlist</a></li>
                            <li><a href="shopping-cart.html">Shopping Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="signup.html">Signup</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="reset-password.html">Forgot Password</a></li>
                        </ul>
                    </li>
                    <li><a href="destinations.html">Destinations</a></li>
                    <li><a href="trekking.html">Trekking</a></li>
                    <li class="dropdown"><a href="#">Pages</a>
                        <ul>
                            <li><a href="activities.html">Activities</a></li>
                            <li><a href="destinations-2.html">Destinations 02</a></li>
                            <li><a href="tours.html">Tours</a></li>
                            <li><a href="packages.html">Packages 01</a></li>
                            <li><a href="packages-2.html">Packages 02</a></li>
                            <li><a href="booking.html">Booking</a></li>
                            <li><a href="terms-conditions.html">Terms & Conditions</a></li>
                            <li><a href="error-page.html">404 Page</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="blog.html">News</a>
                        <ul>
                            <li><a href="blog.html">Our Blog</a></li>
                            <li><a href="blog-2.html">Blog Classic</a></li>
                            <li><a href="blog-single.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div><!-- /.Side-menu -->
            
            <div class="links-box clearfix">
                <div class="clearfix">
                    <div class="link"><a href="login.html" class="theme-btn btn-style-one"><span>Login<i class="icon far fa-angle-right"></i></span></a></div>
                    <div class="link"><a href="signup.html" class="theme-btn btn-style-two"><span>Sign Up<i class="icon far fa-angle-right"></i></span></a></div>
                </div>
            </div>
        
        </div><!-- / Hidden Bar Wrapper -->
    </section>
    <!-- / Hidden Bar -->

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
                        <div class="prod-thumb"><a href="#"><img src="{{asset('images/resource/shop/shop-thumb-1.jpg')}}" alt=""></a></div>
                        <div class="remove-item"><a href="#"><i class="far fa-times"></i></a></div>
                        <div class="prod-title"><a href="#">Smart Air Bag Travel</a></div>
                        <div class="quantity-box">
                            <div class="item-quantity">
                                <input title="quantity" class="qty-spinner" type="text" value="1" name="quantity">
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
                <div class="left"><a href="#" class="theme-btn btn-style-one"><span>View Cart</span></a></div>
                <div class="right"><a href="#" class="theme-btn btn-style-two"><span>Checkout</span></a></div>
            </div>
        </div>
    </div>

    <!-- Banner Section -->
    <section class="banner-two">
        
        <div class="banner-container">
            <div class="banner-slider-box">
                <!--Slide Item-->
                <div class="slide-item">
                    <div class="floated-icon left"><img src="{{asset('images/main-slider/banner-stones-left.svg')}}" alt="" title=""></div>
                    <div class="floated-icon right"><img src="{{asset('images/main-slider/banner-stones-right.svg')}}" alt="" title=""></div>
                    <div class="bg-image-1"><img src="{{asset('images/main-slider/banner-image-4.svg')}}" alt="" title=""></div>
                    <div class="auto-container">
                      <div class="content-box">
                            <div class="bg-image-2"><img src="{{asset('images/main-slider/banner-image-3.svg')}}" alt="" title=""></div>
                            <div class="content">
                                <div class="clearfix">
                                    <div class="inner">
                                        <h2>Tentukan perjalan</h2>
                                        <h1><span>Terbaik mu</span></h1>
                                        <div class="text">Their house is a museum where people come to see ‘em. They really are a scream the Addams Family. These days are all Happy and Free. These days are all share them with me oh baby. Their house is a museum where people come to see ‘em. They really.</div>
                                        <div class="links-box clearfix">
                                            <div class="link"><a href="#" class="theme-btn btn-style-two"><span>View All Tours<i class="icon"><img src="{{asset('images/icons/logo-icon.svg')}}" alt="" title=""></i></span></a></div>
                                            <div class="link"><a href="#" class="theme-btn btn-style-one"><span>Read More<i class="icon far fa-angle-right"></i></span></a></div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="banner-image">
                                <div class="image"><img src="{{asset('images/main-slider/banner-image-2.svg')}}" alt="" title=""></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!--Why Section-->
    <section class="why-two">
        <div class="auto-container">

            <div class="title-box centered">
                <div class="subtitle">We Are Awesome</div>
                <h2><i class="bg-vector"></i><span>Why Choose Treker</span></h2>
            </div>

            <div class="content-box">
                <div class="row clearfix">
                    <div class="why-block-two col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box"><img src="{{asset('images/resource/icon-1.svg')}}" alt=""></div>
                            <h4>Diverse Destinations</h4>
                            <div class="text">Richly varied landscapes, luxury accommodation Travel.</div>
                        </div>
                    </div>
                    <div class="why-block-two col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box"><img src="{{asset('images/resource/icon-2.svg')}}" alt=""></div>
                            <h4>Value for Money</h4>
                            <div class="text">Richly varied landscapes, luxury accommodation Travel.</div>
                        </div>
                    </div>
                    <div class="why-block-two col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box"><img src="{{asset('images/resource/icon-4.svg')}}" alt=""></div>
                            <h4>Fast Booking</h4>
                            <div class="text">Richly varied landscapes, luxury accommodation Travel.</div>
                        </div>
                    </div>
                    <div class="why-block-two col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box"><img src="{{asset('images/resource/icon-3.svg')}}" alt=""></div>
                            <h4>Beautiful Places</h4>
                            <div class="text">Richly varied landscapes, luxury accommodation Travel.</div>
                        </div>
                    </div>
                    <div class="why-block-two col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box"><img src="{{asset('images/resource/icon-6.svg')}}" alt=""></div>
                            <h4>Passionate Travel</h4>
                            <div class="text">Richly varied landscapes, luxury accommodation Travel.</div>
                        </div>
                    </div>
                    <div class="why-block-two col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box"><img src="{{asset('images/resource/icon-5.svg')}}" alt=""></div>
                            <h4>Support Team</h4>
                            <div class="text">Richly varied landscapes, luxury accommodation Travel.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--About Us Section-->
    <section class="about-two">
        <div class="bg-layer" style="background-image: url(images/background/pattern-1.png')}});"></div>
        <div class="floated-icon left"><img src="{{asset('images/resource/about-stone-two.svg')}}" alt="" title=""></div>
        <div class="auto-container">
            <div class="row clearfix">
                <!--Text Col-->
                <div class="text-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="title-box">
                            <div class="subtitle">About Treker</div>
                            <h2><i class="bg-vector"></i><span>World Best Travel Agency</span></h2>
                            <div class="text">Since 2014, we’ve helped more than 500,000 people of all ages enjoy the best outdoor experience of their lives. Whether it’s for one day or a two-week vacation, close to home or a foreign land.</div>
                        </div>
                        <div class="lower-box">
                            <div class="lower-inner clearfix">
                                <div class="text-content">
                                    <ul>
                                        <li>Ratione voluptatem.sequi nesciunt.</li>
                                        <li>Ratione voluptatem.</li>
                                        <li>Ratione voluptatem sequi.</li>
                                    </ul>
                                </div>
                                <div class="image-box">
                                    <img src="{{asset('images/resource/about-image-2.jpg')}}" alt="" title="">
                                    <a href="https://www.youtube.com/watch?v=0xhr0j877bI" class="theme-btn lightbox-image overlink"><span class="icon fa fa-play"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Image Col-->
                <div class="image-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="image">
                            <img src="{{asset('images/resource/about-image-2.png')}}" alt="" title="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Trending Destinations Section-->
    <section class="trending-two">
        <div class="auto-container">

            <div class="title-box">
                <div class="subtitle">Top Destinations</div>
                <h2><i class="bg-vector"></i><span>Trending Destinations</span></h2>
            </div>

            <div class="carousel-box">
                <div class="trending-carousel owl-theme owl-carousel">
                    <!--Block-->
                    <div class="dest-block-two">
                        <div class="inner-box">
                            <div class="image-box"><a href="#"><img src="{{asset('images/resource/gallery-7.jpg')}}" alt=""></a></div>
                            <div class="hvr-box">
                                <div class="cap-box">
                                    <div class="cap-inner clearfix">
                                        <h4><a href="#">Rajasthan</a></h4>
                                        <div class="tour-count"><span>15 Tours</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Block-->
                    <div class="dest-block-two">
                        <div class="inner-box">
                            <div class="image-box"><a href="#"><img src="{{asset('images/resource/gallery-8.jpg')}}" alt=""></a></div>
                            <div class="hvr-box">
                                <div class="cap-box">
                                    <div class="cap-inner clearfix">
                                        <h4><a href="#">Rajasthan</a></h4>
                                        <div class="tour-count"><span>15 Tours</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Block-->
                    <div class="dest-block-two">
                        <div class="inner-box">
                            <div class="image-box"><a href="#"><img src="{{asset('images/resource/gallery-9.jpg')}}" alt=""></a></div>
                            <div class="hvr-box">
                                <div class="cap-box">
                                    <div class="cap-inner clearfix">
                                        <h4><a href="#">Rajasthan</a></h4>
                                        <div class="tour-count"><span>15 Tours</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Block-->
                    <div class="dest-block-two">
                        <div class="inner-box">
                            <div class="image-box"><a href="#"><img src="{{asset('images/resource/gallery-7.jpg')}}" alt=""></a></div>
                            <div class="hvr-box">
                                <div class="cap-box">
                                    <div class="cap-inner clearfix">
                                        <h4><a href="#">Rajasthan</a></h4>
                                        <div class="tour-count"><span>15 Tours</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Block-->
                    <div class="dest-block-two">
                        <div class="inner-box">
                            <div class="image-box"><a href="#"><img src="{{asset('images/resource/gallery-8.jpg')}}" alt=""></a></div>
                            <div class="hvr-box">
                                <div class="cap-box">
                                    <div class="cap-inner clearfix">
                                        <h4><a href="#">Rajasthan</a></h4>
                                        <div class="tour-count"><span>15 Tours</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Block-->
                    <div class="dest-block-two">
                        <div class="inner-box">
                            <div class="image-box"><a href="#"><img src="{{asset('images/resource/gallery-9.jpg')}}" alt=""></a></div>
                            <div class="hvr-box">
                                <div class="cap-box">
                                    <div class="cap-inner clearfix">
                                        <h4><a href="#">Rajasthan</a></h4>
                                        <div class="tour-count"><span>15 Tours</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Products Section-->
    <section class="products-section">
        <div class="floated-icon left"><img src="{{asset('images/resource/stones-left.svg')}}" alt="" title=""></div>
        <div class="floated-icon right"><img src="{{asset('images/resource/stones-right.svg')}}" alt="" title=""></div>
        <div class="auto-container">

            <div class="title-box centered">
                <div class="subtitle">Shop Now</div>
                <h2><i class="bg-vector"></i><span>Featured Trekking Products</span></h2>
            </div>

            <div class="row clearfix">
                <!--Block-->
                <div class="prod-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="why-block">
                            <div class="image-box">
                                <div class="image"><a href="#"><img src="{{asset('images/resource/shop/prod-1.jpg')}}" alt=""></a></div>
                                <div class="hvr-box">
                                    <div class="hvr-inner">
                                        <div class="hvr-content">
                                            <div class="link"><a href="#" class="theme-btn"><i class="far fa-shopping-cart"></i> Add To Cart</a></div>
                                            <div class="link"><a href="#" class="theme-btn"><i class="far fa-bars"></i> Details</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-fav"><a href="#" class="theme-btn"><i class="far fa-heart"></i></a></div>
                            </div>
                            <div class="lower-box">
                                <h5><a href="#">Smart Air Bag Travel</a></h5>
                                <div class="price"><span>$225.00</span></div>
                            </div>
                        </div>

                    </div>
                </div>

                <!--Block-->
                <div class="prod-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="why-block">
                            <div class="image-box">
                                <div class="image"><a href="#"><img src="{{asset('images/resource/shop/prod-2.jpg')}}" alt=""></a></div>
                                <div class="hvr-box">
                                    <div class="hvr-inner">
                                        <div class="hvr-content">
                                            <div class="link"><a href="#" class="theme-btn"><i class="far fa-shopping-cart"></i> Add To Cart</a></div>
                                            <div class="link"><a href="#" class="theme-btn"><i class="far fa-bars"></i> Details</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-fav"><a href="#" class="theme-btn"><i class="far fa-heart"></i></a></div>
                            </div>
                            <div class="lower-box">
                                <h5><a href="#">Travel Suitcase Bag</a></h5>
                                <div class="price"><span>$225.00</span></div>
                            </div>
                        </div>

                    </div>
                </div>

                <!--Block-->
                <div class="prod-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="why-block">
                            <div class="image-box">
                                <div class="image"><a href="#"><img src="{{asset('images/resource/shop/prod-3.jpg')}}" alt=""></a></div>
                                <div class="hvr-box">
                                    <div class="hvr-inner">
                                        <div class="hvr-content">
                                            <div class="link"><a href="#" class="theme-btn"><i class="far fa-shopping-cart"></i> Add To Cart</a></div>
                                            <div class="link"><a href="#" class="theme-btn"><i class="far fa-bars"></i> Details</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-fav"><a href="#" class="theme-btn"><i class="far fa-heart"></i></a></div>
                            </div>
                            <div class="lower-box">
                                <h5><a href="#">Travel Light Suitcase</a></h5>
                                <div class="price"><span>$225.00</span></div>
                            </div>
                        </div>

                    </div>
                </div>

                <!--Block-->
                <div class="prod-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="why-block">
                            <div class="image-box">
                                <div class="image"><a href="#"><img src="{{asset('images/resource/shop/prod-4.jpg')}}" alt=""></a></div>
                                <div class="hvr-box">
                                    <div class="hvr-inner">
                                        <div class="hvr-content">
                                            <div class="link"><a href="#" class="theme-btn"><i class="far fa-shopping-cart"></i> Add To Cart</a></div>
                                            <div class="link"><a href="#" class="theme-btn"><i class="far fa-bars"></i> Details</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-fav"><a href="#" class="theme-btn"><i class="far fa-heart"></i></a></div>
                            </div>
                            <div class="lower-box">
                                <h5><a href="#">Smart Travel Gadgets</a></h5>
                                <div class="price"><span>$225.00</span></div>
                            </div>
                        </div>

                    </div>
                </div>

                <!--Block-->
                <div class="prod-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="why-block">
                            <div class="image-box">
                                <div class="image"><a href="#"><img src="{{asset('images/resource/shop/prod-5.jpg')}}" alt=""></a></div>
                                <div class="hvr-box">
                                    <div class="hvr-inner">
                                        <div class="hvr-content">
                                            <div class="link"><a href="#" class="theme-btn"><i class="far fa-shopping-cart"></i> Add To Cart</a></div>
                                            <div class="link"><a href="#" class="theme-btn"><i class="far fa-bars"></i> Details</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-fav"><a href="#" class="theme-btn"><i class="far fa-heart"></i></a></div>
                            </div>
                            <div class="lower-box">
                                <h5><a href="#">Set of Black Silk Pillow</a></h5>
                                <div class="price"><span>$225.00</span></div>
                            </div>
                        </div>

                    </div>
                </div>

                <!--Block-->
                <div class="prod-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="why-block">
                            <div class="image-box">
                                <div class="image"><a href="#"><img src="{{asset('images/resource/shop/prod-6.jpg')}}" alt=""></a></div>
                                <div class="hvr-box">
                                    <div class="hvr-inner">
                                        <div class="hvr-content">
                                            <div class="link"><a href="#" class="theme-btn"><i class="far fa-shopping-cart"></i> Add To Cart</a></div>
                                            <div class="link"><a href="#" class="theme-btn"><i class="far fa-bars"></i> Details</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-fav"><a href="#" class="theme-btn"><i class="far fa-heart"></i></a></div>
                            </div>
                            <div class="lower-box">
                                <h5><a href="#">Travel Slipping Support</a></h5>
                                <div class="price"><span>$225.00</span></div>
                            </div>
                        </div>

                    </div>
                </div>

                <!--Block-->
                <div class="prod-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="why-block">
                            <div class="image-box">
                                <div class="image"><a href="#"><img src="{{asset('images/resource/shop/prod-7.jpg')}}" alt=""></a></div>
                                <div class="hvr-box">
                                    <div class="hvr-inner">
                                        <div class="hvr-content">
                                            <div class="link"><a href="#" class="theme-btn"><i class="far fa-shopping-cart"></i> Add To Cart</a></div>
                                            <div class="link"><a href="#" class="theme-btn"><i class="far fa-bars"></i> Details</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-fav"><a href="#" class="theme-btn"><i class="far fa-heart"></i></a></div>
                            </div>
                            <div class="lower-box">
                                <h5><a href="#">Travelling Black Suitcase</a></h5>
                                <div class="price"><span>$225.00</span></div>
                            </div>
                        </div>

                    </div>
                </div>

                <!--Block-->
                <div class="prod-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="why-block">
                            <div class="image-box">
                                <div class="image"><a href="#"><img src="{{asset('images/resource/shop/prod-8.jpg')}}" alt=""></a></div>
                                <div class="hvr-box">
                                    <div class="hvr-inner">
                                        <div class="hvr-content">
                                            <div class="link"><a href="#" class="theme-btn"><i class="far fa-shopping-cart"></i> Add To Cart</a></div>
                                            <div class="link"><a href="#" class="theme-btn"><i class="far fa-bars"></i> Details</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-fav"><a href="#" class="theme-btn"><i class="far fa-heart"></i></a></div>
                            </div>
                            <div class="lower-box">
                                <h5><a href="#">Coffee Travel Mug</a></h5>
                                <div class="price"><span>$225.00</span></div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="see-more-link"><a href="#" class="theme-btn btn-style-one"><span>View All Products <i class="icon"><img src="{{asset('images/icons/logo-icon.svg')}}" alt="" title=""></i></span></a></div>
        </div>
    </section>

    <!--Popular Section-->
    <section class="popular-section style-two">
        <div class="bg-layer" style="background-image: url(images/background/image-4.jpg')}});"></div>
        <div class="auto-container">
            <div class="title-box centered">
                <div class="subtitle">Modern & Beautiful</div>
                <h2><i class="bg-vector"></i><span>Our Most Popular Trekking</span></h2>
            </div>
            <div class="carousel-box">
                <div class="popular-carousel owl-theme owl-carousel">
                    <!--Block-->
                    <div class="trek-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="image"><a href="#"><img src="{{asset('images/resource/f-image-1.jpg')}}" alt="" title=""></a></div>
                                <div class="price"><span>$120</span></div>
                                <div class="info">
                                    <span class="i-block"><i class="icon far fa-clock"></i> 5 days</span> &ensp; | &ensp; <span class="i-block">259P, Himalaya Ag</span>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h4><a href="#">Moscow Red City Land</a></h4>
                                <div class="ratings clearfix">
                                    <div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star empty"></i></div>
                                    <div class="rev"><a href="#">05 Review</a></div>
                                </div>
                                <div class="text">Richly varied landscapes, luxurious accommodation and a wide range of wild experiences await you. </div>
                            </div>
                            <div class="bottom-box clearfix">
                                <div class="more-link"><a href="#" class="theme-btn"><span>View Details <i class="icon"><img src="{{asset('images/icons/logo-icon.svg')}}" alt=""></i></span></a></div>
                                <div class="video-link"><a href="#" class="theme-btn"><i class="icon far fa-video-camera"></i></a></div>
                            </div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="trek-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="image"><a href="#"><img src="{{asset('images/resource/f-image-2.jpg')}}" alt="" title=""></a></div>
                                <div class="price"><span>$120</span></div>
                                <div class="info">
                                    <span class="i-block"><i class="icon far fa-clock"></i> 5 days</span> &ensp; | &ensp; <span class="i-block">259P, Himalaya Ag</span>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h4><a href="#">Yellowstone & Mt Rushm</a></h4>
                                <div class="ratings clearfix">
                                    <div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star empty"></i></div>
                                    <div class="rev"><a href="#">05 Review</a></div>
                                </div>
                                <div class="text">Richly varied landscapes, luxurious accommodation and a wide range of wild experiences await you. </div>
                            </div>
                            <div class="bottom-box clearfix">
                                <div class="more-link"><a href="#" class="theme-btn"><span>View Details <i class="icon"><img src="{{asset('images/icons/logo-icon.svg')}}" alt=""></i></span></a></div>
                                <div class="video-link"><a href="#" class="theme-btn"><i class="icon far fa-video-camera"></i></a></div>
                            </div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="trek-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="image"><a href="#"><img src="{{asset('images/resource/f-image-3.jpg')}}" alt="" title=""></a></div>
                                <div class="price"><span>$120</span></div>
                                <div class="info">
                                    <span class="i-block"><i class="icon far fa-clock"></i> 5 days</span> &ensp; | &ensp; <span class="i-block">259P, Himalaya Ag</span>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h4><a href="#">Los Angeles to San Franc</a></h4>
                                <div class="ratings clearfix">
                                    <div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star empty"></i></div>
                                    <div class="rev"><a href="#">05 Review</a></div>
                                </div>
                                <div class="text">Richly varied landscapes, luxurious accommodation and a wide range of wild experiences await you. </div>
                            </div>
                            <div class="bottom-box clearfix">
                                <div class="more-link"><a href="#" class="theme-btn"><span>View Details <i class="icon"><img src="{{asset('images/icons/logo-icon.svg')}}" alt=""></i></span></a></div>
                                <div class="video-link"><a href="#" class="theme-btn"><i class="icon far fa-video-camera"></i></a></div>
                            </div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="trek-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="image"><a href="#"><img src="{{asset('images/resource/f-image-1.jpg')}}" alt="" title=""></a></div>
                                <div class="price"><span>$120</span></div>
                                <div class="info">
                                    <span class="i-block"><i class="icon far fa-clock"></i> 5 days</span> &ensp; | &ensp; <span class="i-block">259P, Himalaya Ag</span>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h4><a href="#">Moscow Red City Land</a></h4>
                                <div class="ratings clearfix">
                                    <div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star empty"></i></div>
                                    <div class="rev"><a href="#">05 Review</a></div>
                                </div>
                                <div class="text">Richly varied landscapes, luxurious accommodation and a wide range of wild experiences await you. </div>
                            </div>
                            <div class="bottom-box clearfix">
                                <div class="more-link"><a href="#" class="theme-btn"><span>View Details <i class="icon"><img src="{{asset('images/icons/logo-icon.svg')}}" alt=""></i></span></a></div>
                                <div class="video-link"><a href="#" class="theme-btn"><i class="icon far fa-video-camera"></i></a></div>
                            </div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="trek-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="image"><a href="#"><img src="{{asset('images/resource/f-image-2.jpg')}}" alt="" title=""></a></div>
                                <div class="price"><span>$120</span></div>
                                <div class="info">
                                    <span class="i-block"><i class="icon far fa-clock"></i> 5 days</span> &ensp; | &ensp; <span class="i-block">259P, Himalaya Ag</span>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h4><a href="#">Yellowstone & Mt Rushm</a></h4>
                                <div class="ratings clearfix">
                                    <div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star empty"></i></div>
                                    <div class="rev"><a href="#">05 Review</a></div>
                                </div>
                                <div class="text">Richly varied landscapes, luxurious accommodation and a wide range of wild experiences await you. </div>
                            </div>
                            <div class="bottom-box clearfix">
                                <div class="more-link"><a href="#" class="theme-btn"><span>View Details <i class="icon"><img src="{{asset('images/icons/logo-icon.svg')}}" alt=""></i></span></a></div>
                                <div class="video-link"><a href="#" class="theme-btn"><i class="icon far fa-video-camera"></i></a></div>
                            </div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="trek-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="image"><a href="#"><img src="{{asset('images/resource/f-image-3.jpg')}}" alt="" title=""></a></div>
                                <div class="price"><span>$120</span></div>
                                <div class="info">
                                    <span class="i-block"><i class="icon far fa-clock"></i> 5 days</span> &ensp; | &ensp; <span class="i-block">259P, Himalaya Ag</span>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h4><a href="#">Los Angeles to San Franc</a></h4>
                                <div class="ratings clearfix">
                                    <div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star empty"></i></div>
                                    <div class="rev"><a href="#">05 Review</a></div>
                                </div>
                                <div class="text">Richly varied landscapes, luxurious accommodation and a wide range of wild experiences await you. </div>
                            </div>
                            <div class="bottom-box clearfix">
                                <div class="more-link"><a href="#" class="theme-btn"><span>View Details <i class="icon"><img src="{{asset('images/icons/logo-icon.svg')}}" alt=""></i></span></a></div>
                                <div class="video-link"><a href="#" class="theme-btn"><i class="icon far fa-video-camera"></i></a></div>
                            </div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="trek-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="image"><a href="#"><img src="{{asset('images/resource/f-image-1.jpg')}}" alt="" title=""></a></div>
                                <div class="price"><span>$120</span></div>
                                <div class="info">
                                    <span class="i-block"><i class="icon far fa-clock"></i> 5 days</span> &ensp; | &ensp; <span class="i-block">259P, Himalaya Ag</span>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h4><a href="#">Moscow Red City Land</a></h4>
                                <div class="ratings clearfix">
                                    <div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star empty"></i></div>
                                    <div class="rev"><a href="#">05 Review</a></div>
                                </div>
                                <div class="text">Richly varied landscapes, luxurious accommodation and a wide range of wild experiences await you. </div>
                            </div>
                            <div class="bottom-box clearfix">
                                <div class="more-link"><a href="#" class="theme-btn"><span>View Details <i class="icon"><img src="{{asset('images/icons/logo-icon.svg')}}" alt=""></i></span></a></div>
                                <div class="video-link"><a href="#" class="theme-btn"><i class="icon far fa-video-camera"></i></a></div>
                            </div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="trek-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="image"><a href="#"><img src="{{asset('images/resource/f-image-2.jpg')}}" alt="" title=""></a></div>
                                <div class="price"><span>$120</span></div>
                                <div class="info">
                                    <span class="i-block"><i class="icon far fa-clock"></i> 5 days</span> &ensp; | &ensp; <span class="i-block">259P, Himalaya Ag</span>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h4><a href="#">Yellowstone & Mt Rushm</a></h4>
                                <div class="ratings clearfix">
                                    <div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star empty"></i></div>
                                    <div class="rev"><a href="#">05 Review</a></div>
                                </div>
                                <div class="text">Richly varied landscapes, luxurious accommodation and a wide range of wild experiences await you. </div>
                            </div>
                            <div class="bottom-box clearfix">
                                <div class="more-link"><a href="#" class="theme-btn"><span>View Details <i class="icon"><img src="{{asset('images/icons/logo-icon.svg')}}" alt=""></i></span></a></div>
                                <div class="video-link"><a href="#" class="theme-btn"><i class="icon far fa-video-camera"></i></a></div>
                            </div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="trek-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="image"><a href="#"><img src="{{asset('images/resource/f-image-3.jpg')}}" alt="" title=""></a></div>
                                <div class="price"><span>$120</span></div>
                                <div class="info">
                                    <span class="i-block"><i class="icon far fa-clock"></i> 5 days</span> &ensp; | &ensp; <span class="i-block">259P, Himalaya Ag</span>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h4><a href="#">Los Angeles to San Franc</a></h4>
                                <div class="ratings clearfix">
                                    <div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star empty"></i></div>
                                    <div class="rev"><a href="#">05 Review</a></div>
                                </div>
                                <div class="text">Richly varied landscapes, luxurious accommodation and a wide range of wild experiences await you. </div>
                            </div>
                            <div class="bottom-box clearfix">
                                <div class="more-link"><a href="#" class="theme-btn"><span>View Details <i class="icon"><img src="{{asset('images/icons/logo-icon.svg')}}" alt=""></i></span></a></div>
                                <div class="video-link"><a href="#" class="theme-btn"><i class="icon far fa-video-camera"></i></a></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--Main Footer-->
    <footer class="footer-two">
        <div class="bg-layer" style="background-image: url(images/background/footer-bg.png')}});"></div>
        <div class="upper-section">
            <div class="auto-container">

                <div class="row clearfix">

                    <div class="footer-column col-xl-4 col-lg-12 col-md-12 col-sm-12">
                        <!--Logo-->
                        <div class="footer-logo">
                            <div class="logo"><a href="index.html" title="Treker"><img src="{{asset('images/logo.svg')}}" alt="" title="Treker"></a></div>
                        </div>
                        <div class="footer-text">Treker was founded in 1991 by a group of safety-focused professionals who created The Wingman Standard for rigorously vetting air charter operators.</div>
                        <div class="social-links">
                            <ul class="clearfix">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="big-column col-xl-8 col-lg-12 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <div class="footer-column col-lg-3 col-md-4 col-sm-12">
                                <h6>Exlopre Treker</h6>
                                <div class="links">
                                    <ul>
                                        <li><a href="#">Account</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Affilitate</a></li><li><a href="#">Program</a></li>
                                        <li><a href="#">Our Partner</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="footer-column col-lg-3 col-md-4 col-sm-12">
                                <h6>Quick lInks</h6>
                                <div class="links">
                                    <ul>
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">News & press</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">FAQs</a></li>
                                        <li><a href="#">Careers</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="info-block col-lg-6 col-md-4 col-sm-12">
                                <h6>Address</h6>
                                <div class="info">
                                    <ul>
                                        <li>Europe 45 Gloucester Road London DT1M 3BF <a href="tel:+44(0)2036715709">+44 (0)20 3671 5709</a></li>
                                        <li>Europe 45 Gloucester Road London DT1M 3BF <a href="tel:+44(0)2036715709">+44 (0)20 3671 5709</a></li>
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
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon"><img src="{{asset('images/icons/arrow-up.svg')}}" alt="" title="Go To Top"></span></div>
{{-- href="{{ asset('css/bootstrap.css') }}" --}}
<script src="{{asset('js/jquery.js') }}"></script>
<script src="{{asset('js/popper.min.js') }}"></script>
<script src="{{asset('js/bootstrap.min.js') }}"></script>
<script src="{{asset('js/jquery-ui.js') }}"></script>
<script src="{{asset('js/jquery.fancybox.js') }}"></script>
<script src="{{asset('js/bxslider.js') }}"></script>
<script src="{{asset('js/touchspin.js') }}"></script>
<script src="{{asset('js/owl.js') }}"></script>
<script src="{{asset('js/wow.js') }}"></script>
<script src="{{asset('js/custom-script.js') }}"></script>
</body>
</html>