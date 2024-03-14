<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Skytech Solutions </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/backtotop.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ui-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->


    <!-- pre loader area start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <!-- loading content here -->
            </div>
        </div>
    </div>
    <!-- pre loader area end -->

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

    <header class="p-relative">
      <div class="tp-header-area header-area-space p-relative pt-20 pb-50 d-none d-xl-block"
         data-background="{{ asset('assets/img/bg/header-bg.jpg') }}">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-3 col-lg-6 col-md-6 col-6">
                  <div class="logo">
                     <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo/logo-3.png') }}" alt="Skytech Solutions"></a>
                  </div>
               </div>
               <div class="col-xl-9">
                  <div class="tp-contact-wapper d-flex justify-content-end">
                     <div class="tp-header-contact d-none d-xl-block pr-40">
                        <div class="tp-header-contact-icon d-flex align-items-center">
                           <div><a href="#"><i class="fas fa-phone"></i></a></div>
                           <div class="tp-header-icon-info">
                              <label>Make a call</label>
                              <a href="tel:+243970045413">
                                 +243 970 045 413
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="tp-header-contact d-none d-xl-block">
                        <div class="tp-header-contact-icon d-flex align-items-center">
                           <div><a href="#"><i class="fal fa-envelope-open"></i></a></div>
                           <div class="tp-header-icon-info">
                              <label>Email Us</label>
                              <a href="mailto:info@skytechsolutions-drc.com">
                                 info@skytechsolutions-drc.com
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="tp-header-right ml-30">
                        <a href="#" class="tp-btn-simelar ml-20 d-none d-md-block">Contact Us</a>
                        <a href="#" class="tp-menu-toggle tp-header-icon2 ml-20 d-xl-none"><i class="far fa-bars"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- for lg header  -->
      </div>
      <div class="tp-header-menu-area d-none d-xl-block">
         <div class="container">
            <div class="header-inner white-bg">
               <div class="row g-0 align-items-center">
                  <div class="col-xl-9">
                     <div class="tp-main-menu-2">
                        <nav id="mobile-menu">
                           <ul>
                              <li><a href="#">Home</a></li>
                              <li><a href="#">About</a></li>
                              <li><a href="#">Services</a></li>
                              <li><a href="#">Shop</a></li>
                              <li><a href="#">Contact</a></li>
                           </ul>
                        </nav>
                     </div>
                  </div>
                  <div class="col-xl-3  d-xl-block">

                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- mobile menu start -->
      <div class="tp-header-2-mobile-area d-block d-xl-none" data-background="{{ asset('assets/img/bg/header-bg.jpg') }}">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-6">
                  <div class="logo">
                     <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo/logo2.png') }}" alt="Skytech Solutions"></a>
                  </div>
               </div>
               <div class="col-6">
                  <div class="tp-header-right ml-30">
                     <a href="#" class="tp-btn-simelar ml-20 d-none d-md-block">Contact us</a>
                     <a href="#" class="tp-menu-toggle tp-header-icon2 ml-20 d-xl-none"><i class="far fa-bars"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- mobile menu start -->
   </header>
   @yield('content')
    <div class="tp-sidebar-menu ">
        <button class="sidebar-close"><i class="fal fa-times"></i></button>
        <div class="side-logo mb-20">
            <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo/logo.png') }}" alt="Skytech Solutions"></a>
        </div>
        <div class="mobile-menu">
            <div class="sidebar-title">
                <h3>CONTACT US</h3>
            </div>
            <ul class="sidebar-list">
                <li>1313, Av. Ndjamena, Lubumbashi, RDC</li>
                <li><a href="tel:+243970045413">+243 970 045 413</a></li>
            </ul>
        </div>
    </div>
    <div class="body-overlay"></div>


    <!-- footer-area-start -->
    <footer>
        <div class="footer-widget-area footer-bg pt-90 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget footer-col-1 mb-50">
                            <h3 class="footer-widget-title">About Us</h3>
                            <p>We provide high-level Security Systems, Retail Security Solution,
                                Building Automation, Home Automation, Audio Visual Systems,
                                IT & Telecommunications, ICT & other Low Voltage Systems
                                for commercial, government and industrial sectors
                                throughout the entire south region of the DRC.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget footer-col-2 mb-50">
                            <h3 class="footer-widget-title">Get In Touch</h3>
                            <div class="footer-contact">
                                <div class="footer-contact-item">
                                    <p>1313, Av. Ndjamena, <br>
                                        Lubumbashi, RDC</p>
                                </div>
                                <div class="footer-contact-item">
                                    <p><a href="tel:+243970045413">+243 970 045 413</a><br>
                                        </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget footer-col-3 mb-50">
                            <h3 class="footer-widget-title">Main Pages</h3>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Shop</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget footer-col-4 mb-50">
                            <h3 class="footer-widget-title">Get Newsletter</h3>
                            <p>Sign up today for hints, tips & the
                                latest product news</p>
                            <div class="footer-subscribe">
                                <input type="email" placeholder="Email address">
                                <button type="submit"> <i class="far fa-envelope-open"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area theme-bg pt-20 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-7 text-lg-start col-12 text-center ">
                        <div class="copyright-text">
                            <p>Copyright © 2023. Developed with ❤ by <span><a target="_blank" href="https://kreativetouch.agency">Kreative Touch</a></span>.</p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 text-lg-end col-12 text-center ">
                        <div class="footer-menu">
                            <ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->

    <!-- JS here -->
    <script src="{{ asset('assets/js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-bundle.js') }}"></script>
    <script src="{{ asset('assets/js/meanmenu.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/backtotop.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/counterup.js') }}"></script>
    <script src="{{ asset('assets/js/isotope-pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded-pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
