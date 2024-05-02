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
<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]--> 

</head>

<body>
  <div class="page-wrapper"> 
  
    <!-- Preloader -->
    <div class="preloader"></div> 
    <div class="search-backdrop"></div>
    <!-- Main Header-->
    <header class="main-header header-style-two alternate">
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
                            <button class="hidden-bar-opener"><span class="icon"><img src="images/icons/menu-icon.svg" alt=""></span></button>
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
                <div class="logo"><a href="index.html" title="Treker"><img src="images/logo.svg" alt="" title="Treker"></a></div>
            </div>
            <!-- .Side-menu -->
            <div class="side-menu">
                 <ul class="navigation clearfix">
                    <li class="dropdown"><a href="index.html">Home</a>
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
                    <li class="current dropdown"><a href="#">Pages</a>
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
                        <div class="prod-thumb"><a href="#"><img src="images/resource/shop/shop-thumb-1.jpg" alt=""></a></div>
                        <div class="remove-item"><a href="#"><i class="far fa-times"></i></a></div>
                        <div class="prod-title"><a href="#">Smart Air Bag Travel</a></div>
                        <div class="quantity-box">
                            <div class="item-quantity">
                                <input class="qty-spinner" type="text" value="1" name="quantity">
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

    <!--Page Info-->
    <section class="page-info">
        <div class="auto-container">
            <div class="links">
                <a href="index.html">Home</a> &ensp;<i class="fa fa-caret-right"></i>&ensp; <a href="trekking.html">Destinasi</a> &ensp;<i class="fa fa-caret-right"></i>&ensp; <span class="current">Bogor History Walking Tour</span>
            </div>
        </div>
    </section>

    <!-- Banner Section -->
    <section class="packages-banner" style="background-image: url(../images/background/bogor-walking-1.jpg);">
        <div class="auto-container">
			<ul class="banner-list">
				<li><span class="icon"><img src="{{ asset('images/icons/location.svg') }}" alt="" /></span>Bogor, Jawa Barat</li>
			</ul>
		</div>
    </section>
    <!--End Banner Section -->

	<!-- Package Detail Section -->
	<section class="package-detail-section">
		<div class="auto-container">
		
			<!-- Upper Box -->
			<div class="upper-box">
				<div class="clearfix">
					<div class="pull-left">
						<h4>Bogor Historycal Walking Tour</h4>
					</div>
					<div class="pull-right">
						<div class="price">IDR 120.000<span>/Person</span></div>
					</div>
				</div>
			</div>
			
			<!-- Package Info Box -->
			<div class="package-info-box">
				<div class="inner-container d-flex justify-content-between align-items-center">
					
					<!-- Package Info Block -->
					<div class="package-info-block">
						<div class="inner-box">
							<div class="icon"><img src="{{ asset('images/icons/duration.svg') }}" alt="" /></div>
							<strong>Durasi</strong>
							3 Jam
						</div>
					</div>
					
					<!-- Package Info Block -->
					<div class="package-info-block">
						<div class="inner-box">
							<div class="icon"><img src="{{ asset('images/icons/team-group.svg') }}" alt="" /></div>
							<strong>Group Size</strong>
							15 Orang
						</div>
					</div>
					
					<!-- Package Info Block -->
					<div class="package-info-block">
						<div class="inner-box">
							<div class="icon"><img src="{{ asset('images/icons/hill.svg') }}" alt="" /></div>
							<strong>Panjang Tour</strong>
							4 KM
						</div>
					</div>
					
				</div>
			</div>
			<!-- End Package Info Box -->
			
			<div class="row clearfix">
				<!-- Content Column -->
				<div class="content-column col-xl-8 col-lg-7 col-md-12 col-sm-12">
					<h5>Tentang Bogor Historycal Walking Tour</h5>
					<p>Di Tour Seru ini, kamu akan menelusuri Istana Bogor yang megah, saksi bisu sejarah panjang Indonesia, menyaksikan kemegahan Kebun Raya Bogor, taman botani tertua di Indonesia, berpetualang di Museum Zoologi, rumah bagi koleksi fauna yang luar biasa, menjelajahi Museum Geologi, mempelajari rahasia perut bumi yang menakjubkan, merasakan atmosfer perjuangan para pahlawan, dan menikmati kuliner khas Bogor yang lezat di sela-sela perjalanan.</p>
					<p>Lebih dari sekadar tour biasa, Tour Sejarah Bogor ini akan membuka matamu terhadap kekayaan sejarah dan budaya Bogor, mengajakmu menjelajahi tempat-tempat bersejarah yang unik dan menarik, memberikanmu kesempatan untuk belajar dari para pemandu yang berpengalaman, dan menciptakan kenangan tak terlupakan bersama teman dan keluarga. Jangan lewatkan kesempatan ini! Segera daftar Tour Sejarah Bogor bersama Innovation Tour dan bersiaplah untuk liburan yang edukatif dan seru!</p>
					<div class="feature-box">
						<h5>Fitur</h5>
						<ul class="feature-list">
							<li>Gratis Download Foto Saat Tour</li>
							<li>Aktivitas dan Pengalaman Interaktif</li>
							<li>Keamanan dan Kenyamnan Terjamin</li>
							<li>Komitmen pada Tour yang Sedang Berlangsung</li>
						</ul>
					</div>
					<div class="facility-box">
						<h5>Fasilitas</h5>
						<div class="row clearfix">
							<div class="column col-lg-4 col-md-4 col-sm-12">
								<div class="facility-option"><span class="icon"><img src="{{ asset('images/icons/tour-guide.svg') }}" alt="" /></span> Pemandu Wisata</div>
							</div>
							<div class="column col-lg-4 col-md-4 col-sm-12">
								<div class="facility-option"><span class="icon"><img src="{{ asset('images/icons/kitchen-tool.svg') }}" alt="" /></span> Mineral & Snack</div>
							</div>
							<div class="column col-lg-4 col-md-4 col-sm-12">
								<div class="facility-option"><span class="icon"><img src="{{ asset('images/icons/kitchen-tool.svg') }}" alt="" /></span> Mencicipi Makanan Khas Bogor</div>
							</div>
							<div class="column col-lg-4 col-md-4 col-sm-12">
								<div class="facility-option"><span class="icon"><img src="{{ asset('images/icons/ticket.svg') }}" alt="" /></span> Tiket Masuk Kebun Raya Bogor & Museum Zoologi</div>
							</div>
						</div>
					</div>
					
					<!-- Itinerary Box -->
					<div class="itinerary-box">
						<h5>Destinasi</h5>
						<div class="days-outer">
						
							<!-- Day Box -->
							<div class="day-box">
								<div class="title">Stasiun Bogor</div>
								<div class="day-text">Leaving them to be a high-valued target for robbery, assault, and more. There could be threats made against executives and even bribery and blackmail from a member of the public or disgruntled employees. When it comes to other VIPs</div>
							</div>
							
							<!-- Day Box -->
							<div class="day-box">
								<div class="title">Taman Topi</div>
								<div class="day-text">Leaving them to be a high-valued target for robbery, assault, and more. There could be threats made against executives and even bribery and blackmail from a member of the public or disgruntled employees. When it comes to other VIPs</div>
							</div>
							
							<!-- Day Box -->
							<div class="day-box">
								<div class="title">Gereja Katedral Bogor St. Perawan Maria</div>
								<div class="day-text">Leaving them to be a high-valued target for robbery, assault, and more. There could be threats made against executives and even bribery and blackmail from a member of the public or disgruntled employees. When it comes to other VIPs</div>
							</div>
							
							<!-- Day Box -->
							<div class="day-box">
								<div class="title">Hotel Salak Heritage</div>
								<div class="day-text">Leaving them to be a high-valued target for robbery, assault, and more. There could be threats made against executives and even bribery and blackmail from a member of the public or disgruntled employees. When it comes to other VIPs</div>
							</div>

                            <!-- Day Box -->
							<div class="day-box">
								<div class="title">Istana Bogor</div>
								<div class="day-text">Leaving them to be a high-valued target for robbery, assault, and more. There could be threats made against executives and even bribery and blackmail from a member of the public or disgruntled employees. When it comes to other VIPs</div>
							</div>

                            <!-- Day Box -->
							<div class="day-box">
								<div class="title">Gereja Zebaoth</div>
								<div class="day-text">Leaving them to be a high-valued target for robbery, assault, and more. There could be threats made against executives and even bribery and blackmail from a member of the public or disgruntled employees. When it comes to other VIPs</div>
							</div>

                            <!-- Day Box -->
							<div class="day-box">
								<div class="title">Museum Nasional Sejarah Indonesia</div>
								<div class="day-text">Leaving them to be a high-valued target for robbery, assault, and more. There could be threats made against executives and even bribery and blackmail from a member of the public or disgruntled employees. When it comes to other VIPs</div>
							</div>

                            <!-- Day Box -->
							<div class="day-box">
								<div class="title">Lawang Suryakencana</div>
								<div class="day-text">Leaving them to be a high-valued target for robbery, assault, and more. There could be threats made against executives and even bribery and blackmail from a member of the public or disgruntled employees. When it comes to other VIPs</div>
							</div>

                            <!-- Day Box -->
							<div class="day-box">
								<div class="title">Kebun Raya Bogor & Museum Zoologi</div>
								<div class="day-text">Leaving them to be a high-valued target for robbery, assault, and more. There could be threats made against executives and even bribery and blackmail from a member of the public or disgruntled employees. When it comes to other VIPs</div>
							</div>
						</div>
					</div>
					<!-- End Itinerary Box -->
					
					<!-- Gallery Box -->
					<div class="gallery-box">
						<h5>Gallery</h5>
						<div class="single-item-carousel owl-carousel owl-theme">
							<div class="slide">
								<div class="image">
									<img src="{{ asset('images/resource/gallery.jpg') }}" alt="" />
								</div>
							</div>
							<div class="slide">
								<div class="image">
									<img src="{{ asset('images/resource/gallery.jpg') }}" alt="" />
								</div>
							</div>
							<div class="slide">
								<div class="image">
									<img src="{{ asset('images/resource/gallery.jpg') }}" alt="" />
								</div>
							</div>
						</div>
					</div>
					
				</div>
				<!-- Sidebar Column -->
				<div class="sidebar-column col-xl-4 col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
					
						<!-- Booking Widget -->
						<div class="sidebar-widget booking-widget" style="background-image: url(images/background/booking-bg.jpg);">
							<h5>Book this Treks</h5>
							
							<!-- Booking Form -->
							<div class="booking-form">
								
								<!-- Contact Form -->
								<form method="post" action="sendemail.php" id="contact-form">
									
									<div class="form-group">
										<input type="text" name="username" placeholder="Full Name" required>
                                        <span class="icon fal fa-user fa-fw"></span>
									</div>
									
									<div class="form-group">
										<input type="email" name="email" placeholder="Email" required>
                                        <span class="icon fal fa-envelope fa-fw"></span>
									</div>
									
									<div class="form-group">
										<input type="text" name="phone" placeholder="Phone *" required>
                                        <span class="icon fal fa-phone fa-fw"></span>
									</div>
									
									<div class="form-group">
										<input type="text" class="datepicker" name="time" placeholder="DD - MM - YYYY" required>
                                        <span class="icon fal fa-calendar fa-fw"></span>
									</div>
									
									<div class="form-group">
										<input type="text" name="time" placeholder="Guest" required>
										<div class="item-quantity">
											<div class="quantity-spinner">
												<button type="button" class="minus"><span class="fa fa-minus"></span></button>
												<input type="text" name="product" value="2" class="prod_qty" readonly />
												<button type="button" class="plus"><span class="fa fa-plus"></span></button>
											</div>
										</div>
									</div>
									
									<div class="form-group">
										<button class="theme-btn send-btn"><span class="txt">Send Now <i class="fa fa-angle-right"></i></span></button>
									</div>
									
								</form>
									
							</div>
							<!-- End Booking Form -->
							
						</div>
						
						<!-- Follow Widget -->
						<div class="sidebar-widget follow-widget">
							<div class="sidebar-title">
								<h5>Follow us</h5>
							</div>
							<ul class="social-list">
								<li class="facebook"><span class="icon fab fa-facebook-f fa-fw"></span> <strong>1250M +</strong> Followers</li>
								<li class="twitter"><span class="icon fab fa-twitter fa-fw"></span> <strong>1250M +</strong> Followers</li>
								<li class="youtube"><span class="icon fab fa-youtube fa-fw"></span> <strong>1250M +</strong> Followers</li>
								<li class="linkedin"><span class="icon fab fa-linkedin-in fa-fw"></span> <strong>1250M +</strong> Followers</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</section>
	<!-- End Package Detail Section -->
	
	
    <!--Main Footer-->
    <footer class="footer-two">
        <div class="bg-layer" style="background-image: url(images/background/footer-bg.png') }});"></div>
        <div class="upper-section">
            <div class="auto-container">

                <div class="row clearfix">

                    <div class="footer-column col-xl-4 col-lg-12 col-md-12 col-sm-12">
                        <!--Logo-->
                        <div class="footer-logo">
                            <div class="logo"><a href="index.html" title="Treker"><img src="{{ asset('images/logo.svg') }}" alt="" title="Treker"></a></div>
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
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon"><img src="{{ asset('images/icons/arrow-up.svg') }}" alt="" title="Go To Top"></span></div>

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