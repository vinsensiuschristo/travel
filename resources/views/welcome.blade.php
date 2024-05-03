<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Inovation Travel</title>
<!-- Stylesheets -->
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link rel="shortcut icon" href="{{ asset('images/favicon.png')}}" type="image/x-icon">
<link rel="icon" href="{{ asset('images/favicon.png')}}" type="image/x-icon">
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
                        <div class="logo"><a href="{{ route('menu.index') }}" title="Inovation Travel"><img src="{{ asset('images/InovationTour.png') }}" alt="" title="Inovation Travel"></a></div>
                    </div>

                    <div class="nav-box clearfix">
                        <!--Nav Outer-->
                        <div class="nav-outer clearfix">         
                            <nav class="main-menu">
                                <ul class="navigation clearfix">
                                    <li class="current"><a href="{{ route('menu.index') }}">Home</a>
                                    </li>
                                    <li><a href="{{ route('menu.about-us') }}">About Us</a>
                                    </li>
                                    <li><a href="{{ route('menu.destination') }}">Destinations</a></li>
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
                                        <div class="text">Jangan mau terjebak di liburan membosankan yang akan terlupakan dalam seminggu.  Pilih Inovation Tour dan rasakan perbedaannya. Kami adalah agen travel yang akan membuatmu jatuh cinta pada traveling lagi.</div>
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
                {{-- <div class="subtitle">We Are Awesome</div> --}}
                <h2><i class="bg-vector"></i><span>Kenapa Inovation Tour ?</span></h2>
            </div>

            <div class="content-box">
                <div class="row clearfix">
                    <div class="why-block-two col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box"><img src="{{asset('images/resource/icon-1.svg')}}" alt=""></div>
                            <h4>Beragam Lokasi</h4>
                            <div class="text">Dunia terlalu luas untuk dilewati begitu saja! Ayo gaspol liburan ke tempat idamanmu!</div>
                        </div>
                    </div>
                    <div class="why-block-two col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box"><img src="{{asset('images/resource/icon-2.svg')}}" alt=""></div>
                            <h4>Murah di Kantong</h4>
                            <div class="text">Dompet tipis tapi pengin jalan-jalan? Tenang, kita punya paket liburan nggak bikin kantong jebol!</div>
                        </div>
                    </div>
                    <div class="why-block-two col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box"><img src="{{asset('images/resource/icon-4.svg')}}" alt=""></div>
                            <h4>Proses Cepat & Tidak Ribet</h4>
                            <div class="text">Booking liburan cepet kaya pesan pizza! Cuma klik & bayar, trus packing koper!</div>
                        </div>
                    </div>
                    <div class="why-block-two col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box"><img src="{{asset('images/resource/icon-3.svg')}}" alt=""></div>
                            <h4>Tempat yang Indah</h4>
                            <div class="text">Ingin foto Instagramable yang kece? Kami punya destinasi dengan view yang bikin kamu pangling!
                            </div>
                        </div>
                    </div>
                    <div class="why-block-two col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box"><img src="{{asset('images/resource/icon-6.svg')}}" alt=""></div>
                            <h4>Pengalaman yang Mengesankan</h4>
                            <div class="text">Liburan ga cuma jalan-jalan, tapi juga pengalaman yang bikin nagih! Yuk, ciptakan momen tak terlupakan bersama kami!</div>
                        </div>
                    </div>
                    <div class="why-block-two col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box"><img src="{{asset('images/resource/icon-5.svg')}}" alt=""></div>
                            <h4>Pekerja yang Supportif</h4>
                            <div class="text">Layanan bintang lima, harga kaki lima! Nikmati pengalaman liburan terbaik bersama tim yang ramah & super helpful!</div>
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
                            <div class="subtitle">Inovation Tour</div>
                            <h2><i class="bg-vector"></i><span>Be Different, Travel Different</span></h2>
                            <div class="text">Innovation Tour adalah travel agency baru yang didirikan di tahun 2024 oleh lulusan pariwisata yang penuh semangat. Kami menawarkan liburan unik dan anti-mainstream dengan berbagai aktivitas seru dan pengalaman budaya lokal yang autentik.
                            </div>
                        </div>
                        <div class="lower-box">
                            <div class="lower-inner clearfix">
                                <div class="text-content">
                                    <ul>
                                        <li>Petualangan dengan berbagai aktivitas seru.</li>
                                        <li>Bisa pelajari budaya lokal</li>
                                        <li>Pengalaman Baru</li>
                                        <li>Cicipi kuliner khas</li>
                                        <li>Dapatkan Cerita Otentik</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Image Col-->
                <div class="image-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="image">
                            <img src="{{asset('images/resource/main-image.jpg')}}" alt="" title="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Popular Section-->
    <section class="popular-section style-two">
        <div class="bg-layer" style="background-image: url(images/background/image-4.jpg')}});"></div>
        <div class="auto-container">
            <div class="title-box centered">
                <h2><i class="bg-vector"></i><span>Destinasi Kami</span></h2>
            </div>
            <div class="carousel-box">
                <div class="popular-carousel owl-theme owl-carousel">
                    <!--Block-->
                    <div class="trek-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="image"><a href="{{ route('bogor-walking-tour') }}"><img src="{{asset('images/resource/bogor-copy.jpg')}}" alt="" title=""></a></div>
                                <div class="price"><span>IDR 120.000</span></div>
                                <div class="info">
                                    <span class="i-block"><i class="icon far fa-clock"></i> 3 Jam</span> &ensp; | &ensp; <span class="i-block">Bogor Kota</span>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h4><a href="{{ route('bogor-walking-tour') }}">Bogor History Walking Tour</a></h4>
                                <div class="text">Yuk, rasakan petualangan baru di Bogor bersama Innovation Tour! Gabung Tour Sejarah & Alam Bogor dan bersiaplah untuk menjelajahi jejak masa lalu yang memukau dan merasakan sejuknya Kota Bogor.</div>
                            </div>
                            <div class="bottom-box clearfix">
                                <div class="more-link"><a href="{{ route('bogor-walking-tour') }}" class="theme-btn"><span>Details <i class="icon"><img src="{{asset('images/icons/logo-icon.svg')}}" alt=""></i></span></a></div>
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