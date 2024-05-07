<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Inovation Travel</title>
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
<!--[if lt IE 9]><script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js') }}"></script><![endif]--> 

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
                        <div class="logo"><a href="{{ route('menu.index') }}" title="Inovation Travel"><img src="{{ asset('images/new-icon.png') }}" alt="" title="Inovation Travel"></a></div>
                      </div>
  
                      <div class="nav-box clearfix">
                          <!--Nav Outer-->
                        <div class="nav-outer clearfix">         
                            <nav class="main-menu">
                                <ul class="navigation clearfix">
                                    <li><a href="{{ route('menu.index') }}">Home</a>
                                    </li>
                                    <li><a href="{{ route('menu.about-us') }}">About Us</a>
                                    </li>
                                    <li><a href="{{ route('menu.destination') }}">Destinations</a></li>
                                    <li class="current"><a href="{{ route('menu.booking') }}">Booking</a></li>
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
                  <div class="logo"><a href="{{ route('menu.index') }}" title="Treker"><img src="images/logo.svg" alt="" title="Treker"></a></div>
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
  
      <!-- Banner Section -->
      <section class="inner-banner">
          <div class="image-layer" style="background-image: url(images/background/banner-aboutus.png);"></div>
          <div class="auto-container">
              <div class="content-box">
                  <h2>Booking</h2>
                  <div class="bread-crumb">
                      <ul class="clearfix">
                          <li><span class="icon-home fa fa-home"></span><a href="index.html">Home</a></li>
                          <li class="current">Booking</li>
                      </ul>
                  </div>
              </div>
          </div>
      </section>
      <!--End Banner Section -->
  
      <!--Booking Section-->
      <section class="booking-section">

        <!--IF ERROR-->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!--END IF ERROR-->

          <div class="floated-icon left"><img src="images/resource/stones-left.svg" alt="" title=""></div>
          <div class="floated-icon right"><img src="images/resource/stones-right-3.svg" alt="" title=""></div>
          <div class="auto-container">
              <div class="title-box centered">
                  <h2><span>Booking Perjalananmu</span></h2>
                  <div class="text">Hubungi kami dan bersiaplah untuk pengalaman touring yang lebih baik dalam hidup Anda. Carilah kesempatan untuk merasakan pengalaman yang berbeda. </div>
              </div>
              <div class="form-box site-form">
                  <div class="booking-form">
                      <form method="post" action="{{ route('booking.sending-email') }}">
                        @csrf
                          <div class="row clearfix">
                              <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                  <div class="f-label">Nama <i>*</i></div>
                                  <div class="field-inner">
                                      <input type="text" name="nama" value="" placeholder="Masukan Nama Anda" required>
                                  </div>
                              </div>
                              <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                  <div class="f-label">Email <i>*</i></div>
                                  <div class="field-inner">
                                      <input type="email" name="email" value="" placeholder="Masukan Email Anda" required>
                                  </div>
                              </div>
                              <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                  <div class="f-label">Nomor Telepon <i>*</i></div>
                                  <div class="field-inner">
                                      <input type="text" name="nomor_telepon" value="" placeholder="08xxxxxxxxxx" required>
                                  </div>
                              </div>
                              <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                  <div class="f-label">Paket Perjalanan <i>*</i></div>
                                  <div class="field-inner">
                                      <select name="paket">
                                          <option value="kebun_raya">Paket Kebun Raya Bogor</option>
                                      </select>
                                      <span class="alt-icon far fa-angle-down"></span>
                                  </div>
                              </div>
                              <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                  <div class="f-label">Jam <i>*</i></div>
                                  <div class="field-inner">
                                      <select name="jam">
                                          <option value="10:00">10:00</option>
                                          <option value="11:00">11:00</option>
                                          <option value="12:00">12:00</option>
                                          <option value="13:00">13:00</option>
                                          <option value="14:00">14:00</option>
                                          <option value="15:00">15:00</option>
                                          <option value="16:00">16:00</option>
                                          <option value="17:00">17:00</option>
                                      </select>
                                      <span class="alt-icon far fa-angle-down"></span>
                                  </div>
                              </div>
                              <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                  <div class="f-label">Tanggal Keberangkatan <i>*</i></div>
                                  <div class="field-inner">
                                      <input type="text" class="datepicker" name="tanggal_keberangkatan" value="" placeholder="" required>
                                      <span class="alt-icon fal fa-calendar fa-fw"></span>
                                  </div>
                              </div>
                              <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                  <div class="f-label">Jumlah Peserta (Dewasa) <i>*</i></div>
                                  <div class="field-inner">
                                      <input type="text" name="peserta_dewasa" value="" placeholder="" required>
                                  </div>
                              </div>
                              <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                  <div class="f-label">Jumlah Peserta (Anak - Anak) <i>*</i></div>
                                  <div class="field-inner">
                                      <input type="text" name="peserta_anak" value="" placeholder="" required>
                                  </div>
                              </div>
                              <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                  <button type="submit" class="theme-btn btn-style-two"><span>Booking<i class="icon far fa-angle-right"></i></span></button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </section>
  
      <!--FAQs Section-->
      <section class="faq-one alternate">
          <div class="floated-icon left"><img src="images/resource/floated-icon-right-2.svg" alt="" title=""></div>
          <div class="floated-icon right"><img src="images/resource/stones-right-3.svg" alt="" title=""></div>
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
                                          <div class="text">One of the major benefits of trekking is that it improves your physical health immensely. Spending multiple hours on the trail, climbing around boulders, rock hopping and ascending hills gives your whole body a workout, improving your strength, agility and cardio fitness.</div>
                                      </div>
                                  </div>
                              </div>
                              <!--Block-->
                              <div class="accordion block">
                                  <div class="acc-btn">What do I need to carry? <i class="fa-regular fa-angle-down"></i></div>
                                  <div class="acc-content">
                                      <div class="content">
                                          <div class="text">One of the major benefits of trekking is that it improves your physical health immensely. Spending multiple hours on the trail, climbing around boulders, rock hopping and ascending hills gives your whole body a workout, improving your strength, agility and cardio fitness.</div>
                                      </div>
                                  </div>
                              </div>
                              <!--Block-->
                              <div class="accordion block">
                                  <div class="acc-btn">How concerned should I be about the altitude? <i class="fa-regular fa-angle-down"></i></div>
                                  <div class="acc-content">
                                      <div class="content">
                                          <div class="text">One of the major benefits of trekking is that it improves your physical health immensely. Spending multiple hours on the trail, climbing around boulders, rock hopping and ascending hills gives your whole body a workout, improving your strength, agility and cardio fitness.</div>
                                      </div>
                                  </div>
                              </div>
                              <!--Block-->
                              <div class="accordion block">
                                  <div class="acc-btn">What do we eat and drink while on trek? <i class="fa-regular fa-angle-down"></i></div>
                                  <div class="acc-content">
                                      <div class="content">
                                          <div class="text">One of the major benefits of trekking is that it improves your physical health immensely. Spending multiple hours on the trail, climbing around boulders, rock hopping and ascending hills gives your whole body a workout, improving your strength, agility and cardio fitness.</div>
                                      </div>
                                  </div>
                              </div>
  
                          </div>
                      </div>
                  </div>
                  <!--Text Col-->
                  <div class="text-col col-lg-6 col-md-12 col-sm-12">
                      <div class="inner wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
                          <div class="accordion-box clearfix">
                              <!--Block-->
                              <div class="accordion block">
                                  <div class="acc-btn">What is Trekking? <i class="fa-regular fa-angle-down"></i></div>
                                  <div class="acc-content">
                                      <div class="content">
                                          <div class="text">One of the major benefits of trekking is that it improves your physical health immensely. Spending multiple hours on the trail, climbing around boulders, rock hopping and ascending hills gives your whole body a workout, improving your strength, agility and cardio fitness.</div>
                                      </div>
                                  </div>
                              </div>
                              <!--Block-->
                              <div class="accordion block active-block">
                                  <div class="acc-btn active">What do I need to carry? <i class="fa-regular fa-angle-down"></i></div>
                                  <div class="acc-content">
                                      <div class="content">
                                          <div class="text">One of the major benefits of trekking is that it improves your physical health immensely. Spending multiple hours on the trail, climbing around boulders, rock hopping and ascending hills gives your whole body a workout, improving your strength, agility and cardio fitness.</div>
                                      </div>
                                  </div>
                              </div>
                              <!--Block-->
                              <div class="accordion block">
                                  <div class="acc-btn">How concerned should I be about the altitude? <i class="fa-regular fa-angle-down"></i></div>
                                  <div class="acc-content">
                                      <div class="content">
                                          <div class="text">One of the major benefits of trekking is that it improves your physical health immensely. Spending multiple hours on the trail, climbing around boulders, rock hopping and ascending hills gives your whole body a workout, improving your strength, agility and cardio fitness.</div>
                                      </div>
                                  </div>
                              </div>
                              <!--Block-->
                              <div class="accordion block">
                                  <div class="acc-btn">What do we eat and drink while on trek? <i class="fa-regular fa-angle-down"></i></div>
                                  <div class="acc-content">
                                      <div class="content">
                                          <div class="text">One of the major benefits of trekking is that it improves your physical health immensely. Spending multiple hours on the trail, climbing around boulders, rock hopping and ascending hills gives your whole body a workout, improving your strength, agility and cardio fitness.</div>
                                      </div>
                                  </div>
                              </div>
  
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
                            <div class="logo"><a href="index.html" title="Treker"><img src="images/logo.svg" alt="" title="Treker"></a></div>
                        </div>
                        <div class="footer-text">Inovation Tour didirikan pada tahun 2024 oleh para pecinta traveling. Kami ingin Anda merasakan petualangan yang tak terlupakan dengan berbagai pilihan wisata yang unik dan seru</div>
                        <div class="social-links">
                            <ul class="clearfix">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.instagram.com/inovationtour.official/"><i class="fab fa-instagram"></i></a></li>
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
                                        <li><a href="{{ route('menu.destination') }}">Destination</a></li>
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
  <div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon"><img src="images/icons/arrow-up.svg" alt="" title="Go To Top"></span></div>
  
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