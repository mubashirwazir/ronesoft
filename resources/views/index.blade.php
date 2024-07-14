@extends('layouts.app')

@section('content')

    {{-- <!-- Main Wrapper Start --> --}}
    <div class="wrapper">
        <!-- Header Start -->
        @include('layouts.header')

        <!-- Header End -->
        <!-- Main Content Wrapper Start -->
        <main class="main-content-wrapper p-2">
            <!-- Slider area Start -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

            <section class="ms-3 me-3 homepage-slider mb-10pt">
                <div class="element-carousel">
                    <div class="d-flex align-items-center">
                        <div class="container slider-container">
                            <div class="row g-0 ps-5 pt-5 pb-5">
                                <div class="col-lg-6 col-sm-12">
                                    <div class="slider-content mt-3">
                                        <h1 class="heading__primary mb-3pt6">
                                            <i class="fas fa-quote-left text-secondary"></i><br>
                                            @lang('text.slider_title')
                                        </h1>
                                        <p class="text-white fs-1">
                                            Get back to doing what you do best and leave your Procurement Management and Buying activities to us.
                                        </p>
                                        <p class="text-white fs-1">
                                            @lang('text.slider_description1')
                                           <a href="register" class="  fw-bold text-decoration-underline1">Sign Up</a>
                                           @lang('text.slider_description2')
                                        </p>
                                        <a href="https://calendly.com/rslgary/ronesoft-demo" class="btn btn-primary fw-bold mb-3">
                                            @lang('text.btn_text')
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 d-flex justify-content-center align-items-center">
                                    <img src="assets/img/slider/2.png" alt="Professional Team" class="img-fluid slider-image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="p-3"></div>
            {{-- Feature section --}}
            <section class="features-section pt-5 pb-5 mt-5 ">
                <div class="container bg-base">
                    <div class="container">
                        <div class=" mb-4 pt-5">
                            <h2 class="heading__secondary">Spend more time on your core business</h2>
                            <p class="fs-1">Try our Procurement and Category Management Service for every business. You focus on the results. We manage the hard work with our tools and analytics so you can Buy Smarter
                                <a href="#" class="text-dark text-underline fw-bold text-decoration-underline1">Explore all features.</a>
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mb-4">
                              <div class="card p-4 bg-base">
                                <div class="row g-0">
                                  <div class="col-2">
                                    <img src="assets/img/icons/16852407.png" class="img-fluid w-100" alt="">
                                  </div>
                                  <div class="col-10 card-body">
                                    <h2 class="fw-bold h2-responsive">All Supplier Information in one place.</h2>
                                    <p class="card-text">Centralize your data and eliminate multiple spreadsheets.</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">
                              <div class="card p-4 bg-base">
                                <div class="row g-0">
                                  <div class="col-2">
                                    <img src="assets/img/icons/16852407.png" class="img-fluid w-100" alt="">
                                  </div>
                                  <div class="col-10 card-body">
                                    <h2 class="fw-bold h2-responsive">Categories, Products and Services in one place.</h2>
                                    <p class="card-text">Centralize your data and eliminate multiple spreadsheets.</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">
                              <div class="card p-4 bg-base">
                                <div class="row g-0">
                                  <div class="col-2">
                                    <img src="assets/img/icons/16852407.png" class="img-fluid w-100" alt="">
                                  </div>
                                  <div class="col-10 card-body">
                                    <h2 class="fw-bold h2-responsive">Buy Smarter. Analytics and Insight</h2>
                                    <p class="card-text">Trend analysis, identify optimization opportunities, smart reporting.</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </section>
            <!-- Buy Smarter  Area Start -->
            <section class="about-area mb--9pt4">
                <div class="container p-5">
                    <div class="row g-2 text-center d-flex align-items-stretch">
                        <div class="col-md-6">
                            <div class="bg-base m-4 p-5 pb-0 mb-0 rounded d-flex flex-column h-100">
                                <h1 class="heading__secondary_2 ">
                                    <a href="register" class="text-decoration-underline">Try our Service for free</a>
                                </h1>
                                <p class="fs-1">Access all our service features for 14 days, then decide.</p>
                                <p class="fw-bold text-center fs-1">Or</p>
                                <p class="fs-1">
                                    <a href="https://xchecker.ronesoft.com/registration" class="text-dark fw-bold text-decoration-underline1">Register Here</a>
                                    to self manage your account on our platform, xChecker.
                                </p>
                                <img src="assets/img/buysmarter/3.webp" alt="" class="img-fluid mb-4 mt-auto">
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="bg-black text-light m-4 p-5 pb-0 mb-0 rounded d-flex flex-column h-100 ">
                                <h2 class="heading__secondary_2 mb-30">
                                    <span class="heading__secondary--main text-light">For Business Owners Procurement <span class="heading__secondary--sub">Managers Operators</span></span>
                                </h2>
                                <p class="fs-1">Expand your team’s capabilities without disruption to business</p>
                                <p class="fs-1">Get instant results from xChecker next generation procurement platform without the burden of learning yet another software.</p>
                                <p class="fs-1">Get access to pre-negotiated products and services pricing where available.</p>
                                <p class="fs-1 fw-bold">Gain smart insight and Buy Smarter.</p>
                                <img src="assets/img/buysmarter/4.png" alt="" class="img-fluid mx-auto mt-auto">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Buy Smarter Area End -->
            <!-- Buy Smarter  Area Start -->
            <section class="about-area mb-9pt4">
                <div class="container p-5">
                    <div class="row g-2  d-flex align-items-stretch">
                        <div class="col-md-6 p-2">
                            <div class="buy-smarter m-4 p-5 pb-0 mb-0 rounded h-100">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front p-5">
                                            <h1 class="heading__secondary fs-1 text-start">Do Simple RFQ or Complex RFP (RFx)</h1>
                                            <p class="text-start ms-4 fs-1">
                                                <i class="fas fa-hand-holding-usd" style="color: #28a745;"></i> Simple RFQs (multiple bids and a buy)<br>
                                                <i class="fas fa-file-contract" style="color: #007bff;"></i> Complex bids (company-specific tenders)<br>
                                                <i class="fas fa-envelope" style="color: #dc3545;"></i> No more emails, spreadsheets, and texting
                                            </p>
                                        </div>
                                        <div class="flip-card-back">
                                            <img src="assets/img/graph/4.png" alt="Graph Image" class="card-img-top w-75 img-fluid rounded">
                                        </div>
                                    </div>
                                </div>
                                <img src="assets/img/buysmarter/1.webp" alt="" class="img-fluid pt-5 mx-auto mt-auto">
                            </div>
                        </div>

                        <div class="col-md-6 p-2">
                            <div class="bg-black m-4 p-5 pb-0 mb-0 rounded h-100 d-flex flex-column justify-content-between"> <!-- Added flex-column and justify-content-between -->
                                <div>
                                    <h3 class="heading__secondary fs-1 text-start pt-5 text-light">We support small and large businesses.</h3>
                                    <p class="text-light fs-1">Keep your business a step ahead with "xChecker Procurement software.</p>
                                    <p class="text-light fs-1">Procurement Specialists Explore Partner Program:</p>
                                    <a href="regsiter_procurement" class="btn btn-warning btn-lg mb-4">Register Here</a> <!-- Updated button class for better styling -->

                                </div>
                                <div>
                                    <img src="assets/img/team/4.png" alt="" class="img-fluid w-75 p-5 ms-4 rounded-circle text-center ">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="p-5 m-3"></div>

            <!-- Buy Smarter Area End -->
           <!-- Services Area Start -->
<section class=" mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="display-2  fw-bold text-decoration-underline1">xChecker, Buy Smarter</h2>
            </div>
        </div>
        <div class="image-container position-relative ">
            <img src="assets/img/background/2.jpg" alt="" class="img-fluid">
            <div class="overlay"></div>
        </div>
        <div class="row overlap-container justify-content-center">
            <div class="col-md-5 d-flex align-items-stretch">
                <div class="card text-center shadow-lg m-3 pt-4 pb-4 w-100">
                    <img src="assets/img/icons/1.png" alt="Service" class="card-img-top img-fluid w-25 mx-auto">
                    <a href="single-service.html" class="item-overlay"></a>
                    <div class="card-body service__info">
                        <h3 class="card-title  mt-3 fs-1">Monthly Reporting/Savings</h3>
                        <span class="card-subtitle service__category fs-1"></span>

                        <span class="card-subtitle fs-1"></span>
                        <p class="card-text mt-3 fs-1">
                            Measure actual monthly savings <br>
                            Automated savings reporting <br>
                            Understand pricing trends <br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-5 d-flex align-items-stretch">
                <div class="card text-center shadow-lg m-3 pt-4 pb-4 w-100">
                    <img src="assets/img/icons/2.png" alt="Service" class="card-img-top img-fluid w-25 mx-auto">
                    <a href="single-service.html" class="item-overlay"></a>
                    <div class="card-body ">
                        <h3 class="card-title  mt-3 fs-1">Price Trend Convergence/Divergence</h3>
                        <span class="card-subtitle service__category fs-1"></span>
                        <p class="card-text mt-3 fs-1">
                            Advanced analytics <br>
                            Technical charts <br>
                            Smarter decisions
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Services Area End -->
 <!-- Issue -->
 <section >
<div class="container">
 <div class="update-news ">
    <div class="row">
        <div class="col-md-6 mb-4 mb-md-0"> <!-- Add margin bottom for smaller screens -->
            <div class="contact-widget">
                <h2 class="heading__secondary mb-4">
                    <span class="heading__secondary--main text-white">Issue and Expedite Purchase Orders</span>
                </h2>
                <p class="m-0 fs-1 text-white">
                    No more manual Purchase Orders <br>
                    Instantly Sync Offers and Purchase Orders <br>
                    Track and Monitor Purchase Orders to delivery <br>
                    No conflict between Offer and Purchase
                </p>
            </div>
        </div>
        <div class="col-md-6 mb-sm-45 pe-5">
            <img src="assets/img/graph/3.png" alt="" class="img-fluid  mx-auto d-block"> <!-- Center the image on small screens -->
        </div>
    </div>

    </div>
</div>
</section>
<!-- Form Section -->
{{-- <section class="mb-5">
    <div class="container ">
        <div class="row">
            <div class="col-lg-5 col-md-6 offset-lg-1 mb-4 mb-md-0"> <!-- Add margin bottom for smaller screens -->
                <div class="container contact-widget">
                    <h2 class="heading__secondary mb-4">
                        <span class="heading__secondary--main">Issue and Expedite Purchase Orders</span>
                    </h2>
                    <p class="m-0 fs-1">
                        No more manual Purchase Orders <br>
                        Instantly Sync Offers and Purchase Orders <br>
                        Track and Monitor Purchase Orders to delivery <br>
                        No conflict between Offer and Purchase
                    </p>
                    <a href="tel:+01223566678"><strong></strong></a>
                </div>
            </div>
            <div class="col-md-6 mb-sm-45 pe-5">
                <img src="assets/img/graph/3.png" alt="" class="img-fluid w-75 mx-auto d-block"> <!-- Center the image on small screens -->
            </div>
        </div>
    </div>
</section> --}}

         <div class="p-5 m-5"></div>
            <section class="mb-5 mt-5 p-3">
                <div class="container mt-5 mb-5 ">
                    <div class="row  container">
                        <div class="col-1"></div>
                      <div class="col-md-5 ">
                        <h2 class="heading__secondary mb--30">
                            <span class="heading__secondary--main">Try xChecker for free</span>
                            <span class="heading__secondary--sub mt2">$0 Per month</span>
                        </h2>

                          <ul class="list-unstyled fs-1">
                            <li>✓ Access xChecker features</li>
                            <li>✓ Setup your account</li>
                            <li>✓ No credit card required</li>
                            <li>✓ Cancel any time</li>
                          </ul>
                          <p class="pb-4">Access all xChecker features for 14 days, then decide.</p>
                          <a href="register" class="fs-2 btn-light btn-sm p-3 mb-5">Start free trial now</a>
                          <span class="ms-4 text-secondary me-4 fs-1 fw-bold ">Or</span>
                          <a href="features" class="fs-2 btn-light btn-sm p-3 mb-5 ">Explore all features</a>

                      </div>
                      <div class="col-md-6 text-center mt-4">
                           <img src="assets\img\buysmarter\6.png" alt="" class="img-fluid">
                      </div>
                    </div>
                  </div>
            </section>

            <div class="p-3"></div>

            <!-- Feature Area Start -->
            <section class="feature-area mb--9pt5 mt-5 p-5">
                <div class="container">
                    <div class="row g-0 gutter-lg-30 justify-content-center m-5">
                        <div class="col-md-12  mb-5">
                            <h1 class="heading__secondary">@lang('text.business_support_title')</h1>
                            <p class="fs-1">@lang('text.business_support_description')</p>
                        </div>

                        <div class="col-xl-4 col-md-6 mb-sm-45 ">
                            <div class="card m-4 shadow">
                                <div class="feature text-center">
                                    <div class="feature__icon">
                                        <img src="assets\img\industry\3.jpg" class="rounded mt-3" alt="">
                                    </div>
                                    <div class="feature__info">
                                        <h3 class="feature__title">@lang('text.construction')</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 mb-sm-45">
                            <div class="card m-4 shadow">
                                <div class="feature text-center">
                                    <div class="feature__icon">
                                        <img src="assets\img\industry\2.jpg" class="rounded mt-3" alt="">
                                    </div>
                                    <div class="feature__info">
                                        <h3 class="feature__title">@lang('text.manufacturing')</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 mb-sm-45">
                            <div class="card m-4 shadow">
                                <div class="feature text-center">
                                    <div class="feature__icon">
                                        <img src="assets\img\industry\1.jpg" class="rounded mt-3 " class="img-fluid w-75" alt="">
                                    </div>
                                    <div class="feature__info">
                                        <h3 class="feature__title">@lang('text.agriculture')</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 mb-sm-45">
                            <div class="card m-4 shadow">
                                <div class="feature text-center">
                                    <div class="feature__icon">
                                        <img src="assets\img\industry\4.jpg" class="rounded mt-3 img-fluid" alt="">
                                    </div>
                                    <div class="feature__info">
                                        <h3 class="feature__title">@lang('text.distribution')</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 mb-sm-45">
                            <div class="card m-4 shadow">
                                <div class="feature text-center">
                                    <div class="feature__icon">
                                        <img src="assets\img\industry\5.jpg" class="rounded mt-3" alt="">
                                    </div>
                                    <div class="feature__info">
                                        <h3 class="feature__title">@lang('text.resources')</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 mb-sm-45">
                            <div class="card m-4 shadow">
                                <div class="feature text-center">
                                    <div class="feature__icon">
                                        <img src="assets\img\industry\6.jpg" class="rounded mt-3" alt="">
                                    </div>
                                    <div class="feature__info">
                                        <h3 class="feature__title">@lang('text.processing')</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

             <!-- Welcome Area Start -->
             <section class="welcome-area mb--9pt5  p-5">
                <div class="container">
                    <div class="row g-0 gutter-lg-30 justify-content-center m-5">
                        <div class="col-md-12 ms-5 mb-1">
                            <h1 class="heading__secondary">Spend more time on your core business</h1>
                        </div>

                        <div class="col-xl-7 col-md-7 mb-sm-45 ">
                            <img src="assets/img/buysmarter/8.png" alt="" class="img-fluid">

                        </div>

                        <div class="col-md-5 mx-auto d-flex flex-column justify-content-center">
                            <p class="pb-4 fs-1">Keep your business a step ahead with xChecker Procurement software.</p>
                            <p class="pb-4 fs-1">Procurement Specialists Explore Partner Program:</p>
                            <a href="procurement-register" class="text-center w-50 fs-2 btn-light btn-sm p-3 mb-5">Register Here</a>
                        </div>

                    </div>
                </div>
            </section>


        </main>
        <!-- Main Content Wrapper End -->

        <!-- Footer Start-->
       @include('layouts.footer')
        <!-- Footer End-->

        <!-- OffCanvas Menu Start -->
        <div class="offcanvas-menu-wrapper" id="offcanvasMenu">
            <div class="offcanvas-menu-inner">
                <a href="" class="btn-close">
                    <img src="assets/img/icons/icon-cross.png" alt="Cross">
                </a>
                <nav class="offcanvas-navigation">
                    <ul class="offcanvas-menu">
                        <li class="menu-item-has-children active">
                            <a href="#">
                                <span class="mm-text">Home</span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="index.html">
                                        <span class="mm-text">Homepage 01</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index-02.html">
                                        <span class="mm-text">Homepage 02</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="about-us.html">
                                <span class="mm-text">About</span>
                            </a>
                        </li>
                        <li>
                            <a href="services.html">
                                <span class="mm-text">Services</span>
                            </a>
                        </li>
                        <li>
                            <a href="our-projects.html">
                                <span class="mm-text">Projects</span>
                            </a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="blog.html">
                                <span class="mm-text">Blog</span>
                            </a>
                            <ul class="sub-menu">
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        <span class="mm-text">Blog</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="blog-left-sidebar.html">Blog Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog.html">Blog Right Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog-01-column.html">Blog 01 column</a>
                                        </li>
                                        <li>
                                            <a href="blog-02-columns.html">Blog 02 columns</a>
                                        </li>
                                        <li>
                                            <a href="blog-03-columns.html">Blog 03 columns</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        <span class="mm-text">Blog Details</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="blog-details-audio.html">Audio Blog Details</a>
                                        </li>
                                        <li>
                                            <a href="blog-details-gallery.html">Gallery Blog Details</a>
                                        </li>
                                        <li>
                                            <a href="blog-details-image.html">image Blog Details</a>
                                        </li>
                                        <li>
                                            <a href="blog-details-video.html">Video Blog Details</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="contact.html">
                                <span class="mm-text">Contact Us</span>
                            </a>
                        </li>
                    </ul>
                    <div class="site-info vertical">
                        <div class="site-info__item">
                            <a href="tel:+01223566678"><strong>+01 2235 666 78</strong></a>
                            <a href="mailto:Support@contixs.com">Support@contixs.com</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- OffCanvas Menu End -->

        <!-- Global Overlay Start -->
        <div class="global-overlay"></div>
        <!-- Global Overlay End -->

        <!-- Global Overlay Start -->
        <a class="scroll-to-top" href=""><i class="fa fa-angle-up"></i></a>
        <!-- Global Overlay End -->
    </div>
    <!-- Main Wrapper End -->

    @endsection

