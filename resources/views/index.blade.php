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
            @if (session('success'))
            <script>
                alert("{{ session('success') }}");
            </script>
        @endif
            <section class="ms-3 me-3 homepage-slider mb-10pt">
                <div class="element-carousel">
                    <div class="d-flex align-items-center">
                        <div class="container slider-container">
                            <div class="row g-0 ps-5 pt-5 pb-5">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="slider-content mt-3 ">
                                        <div class="heading__primary mb-3pt6">
                                            <span class="heading__icon">
                                                <img src="assets/img/icons/3d-stripy-three-thick-black-lines.png" alt="" class="img-fluid icon-img">
                                            </span>
                                            <span class="heading__text">
                                               <h1 class="heading__primary"> @lang('text.slider_title')</h1>
                                               <p class="text-white fs-1 ">
                                            Get back to doing what you do best and leave your <br class="m-3"> Procurement Management and Buying activities to us.
                                        </p><p class="text-white fs-1 ">
                                            @lang('text.slider_description1')
                                            <a href="register" class="fw-bold text-decoration-underline1">Sign Up</a>
                                            @lang('text.slider_description2')
                                        </p>
                                        <a href="https://calendly.com/rslgary/ronesoft-demo" class="btn btn-primary fw-bold mb-3 ">
                                            @lang('text.btn_text')
                                        </a>
                                            </span>
                                        </div>



                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-center align-items-center mt-4 mt-lg-0">
                                    <img src="assets/img/slider/2.png" alt="Professional Team" class="img-fluid slider-image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="p-3"></div>
            {{-- Feature section --}}
            <section class="features-section pt-5 pb-5 mt-5">
                <div class="container bg-base">
                    <div class="container">
                        <div class="mb-4 pt-5 ">
                            <h2 class="heading__secondary">Spend more time on your core business</h2>
                            <p class="fs-1">
                                Try our Procurement and Category Management Service for every business. You focus on the results. We manage the hard work with our tools and analytics so you can Buy Smarter
                                <a href="features" class="text-dark text-underline fw-bold text-decoration-underline1">Explore all features.</a>
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card p-4 bg-base h-100">
                                    <div class="row g-0">
                                        <div class="col-2 d-flex align-items-center">
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
                                <div class="card p-4 bg-base h-100">
                                    <div class="row g-0">
                                        <div class="col-2 d-flex align-items-center">
                                            <img src="assets/img/icons/16852407.png" class="img-fluid w-100" alt="">
                                        </div>
                                        <div class="col-10 card-body">
                                            <h2 class="fw-bold h2-responsive">Categories, Products and Services in one place.</h2>
                                            <p class="card-text">For traceability, repeatability, and historical information.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card p-4 bg-base h-100">
                                    <div class="row g-0">
                                        <div class="col-2 d-flex align-items-center">
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
                        <div class="col-lg-6 col-md-12 mb-4">
                            <div class="bg-base m-4 p-5 pb-0 mb-0 rounded d-flex flex-column h-100">
                                <h1 class="heading__secondary_2">
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
                        <div class="col-lg-6 col-md-12 mb-4">
                            <div class="bg-black text-light m-4 p-5 pb-0 mb-0 rounded d-flex flex-column h-100">
                                <h2 class="heading__secondary_2 mb-30">
                                    <span class="heading__secondary--main text-light">For <br> Business Owners <br> Procurement Managers <br> Operators</span>
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
                        <div class="col-lg-6 col-md-12 p-2">
                            <div class="buy-smarter m-4 p-1 pb-0 mb-0 rounded h-100">
                                <div class="card  d-flex flex-column m-4 p-5">
                                    <div class="card-body">
                                        <h1 class=" heading__secondary card-title fs-1 text-start mb-3 mt-2">Do Simple RFQ or Complex RFP (RFx)</h1>
                                        <p class="card-text text-start ms-4 fs-1 mb-4">
                                            <i class="fas fa-hand-holding-usd" style="color: #28a745;"></i> Simple RFQs (multiple bids and a buy)<br>
                                            <i class="fas fa-file-contract" style="color: #007bff;"></i> Complex bids (company-specific tenders)<br>
                                            <i class="fas fa-envelope" style="color: #dc3545;"></i> No more emails, spreadsheets, and texting
                                        </p>
                                    </div>
                                </div>
                                <div class="card   d-flex flex-column m-4">
                                    <img src="assets/img/graph/4.png" alt="Graph Image" class="card-img-top w-75 img-fluid rounded mx-auto d-block">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12 p-2">
                            <div class="bg-black m-4 p-5 pb-0 mb-0 rounded h-100 d-flex flex-column justify-content-between"> <!-- Added flex-column and justify-content-between -->
                                <div>
                                    <h3 class="heading__secondary fs-1 text-start pt-5 text-light">We support small and large businesses.</h3>
                                    <p class="text-light fs-1">Keep your business a step ahead with "xChecker Procurement software.</p>
                                    <p class="text-light fs-1">Procurement Specialists, Explore Partner Program:</p>
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
            <div class="p-5 m-5"></div>
         <section class="mb-5 mt-5 p-3">
            <div class="container mt-5 mb-5">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <h2 class="heading__secondary mb--30">
                            <span class="heading__secondary--main">Try Procurement Service for free

                                </span>
                            <span class="heading__secondary--sub mt-2">Powered by xChecker</span>
                        </h2>
                        <p class="fs-1 fw-bold">$0 Per month</p>
                        <ul class="list-unstyled fs-1">
                            <li>✓ Access xChecker features</li>
                            <li>✓ Setup your account</li>
                            <li>✓ No credit card required</li>
                            <li>✓ Cancel any time</li>
                        </ul>
                        <p class="pb-4">Access all xChecker features for 14 days, then decide.</p>
                        <div class="d-flex flex-column flex-md-row align-items-center">
                            <a href="register" class="fs-3  btn-light btn-sm p-3 mb-3 mb-md-0">Start free trial now</a>
                            <span class="text-secondary text-center mx-4 fs-1 fw-bold">Or</span>
                            <a href="features" class="fs-3  btn-light btn-sm p-3 mb-3 mb-md-0">Explore all features</a>
                        </div>
                    </div>
                    <div class="col-md-6 text-center mt-4">
                        <img src="assets/img/buysmarter/6.png" alt="" class="img-fluid">
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
            <div class="col-lg-5 col-xxl-6 d-flex align-items-stretch">
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
            <div class="col-lg-5 col-xxl-6 d-flex align-items-stretch">
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
        <div class="col-lg-6 col-md-12 mb-4 mb-4 mb-md-0"> <!-- Add margin bottom for smaller screens -->
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
        <div class="col-lg-6 col-xxl-12 mb-4 mb-sm-45 pe-5">
            <img src="assets/img/graph/3.png" alt="" class="img-fluid  mx-auto d-block"> <!-- Center the image on small screens -->
        </div>
    </div>

    </div>
</div>
</section>
<div class="p-5 m-5"></div>
<!-- Form Section -->
<section class="mb-5">
    <div class="container ">
        <div class="row">

                <div class="col-12 text-center pb-5">
                    <h2 class="display-2  fw-bold text-decoration-underline1 ">Plans for every business
                    </h2>
                </div>

            <div class="col-lg-4 col-md-12 bg-black text-white  pt-5 pb-5 rounded m-5"> <!-- Add margin bottom for smaller screens -->
                <div class="container ">
                    <h2 class="heading__secondary mb-4 text-white">
                        <span class="heading__secondary--main">Procurement Service Powered by xChecker
                        </span>
                    </h2>
                    <p class="m-0 fs-1">
                        Select how much support hours you need each week. Switch plans anytime. <br>
                        <a href="features" class="fs-3  btn-light btn-sm p-3 mb-3 mb-md-0">Explore all features</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 mb-sm-45 ">
                <div class="text-center mb-4">
                    <h2 class=" mb--30 fs-1 ">
                        <span class="">Managed Procurement Services</span>
                        <span class="heading__secondary--sub mt2">(Fractional Procurement Specialist Service)</span>
                    </h2>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="pricing-plan">
                            <div class="pricing-header">
                                <h3 class="text-white">MPS 10</h3>
                                <p>up to 10 hours/week</p>
                            </div>
                            <div class="pricing-price">
                                $999/month
                            </div>
                            <div class="pricing-button">
                                <a href="https://buy.stripe.com/5kAaHx9QZ5ZL0F2aEG" class="text-dark text-decoration-underline1">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="pricing-plan">
                            <div class="pricing-header">
                                <h3 class="text-white">MPS 20</h3>
                                <p>up to 20 hours/week</p>
                                <span class="badge bg-warning">Most Popular</span>
                            </div>
                            <div class="pricing-price">
                                $1,999/month
                            </div>
                            <div class="pricing-button">
                                <a href="https://buy.stripe.com/bIY3f54wFdsdcnK4gj" class="text-dark text-decoration-underline1">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="pricing-plan">
                            <div class="pricing-header">
                                <h3 class="text-white">MPS 40</h3>
                                <p>up to 40 hours/week</p>
                            </div>
                            <div class="pricing-price">
                                $3,999/month
                            </div>
                            <div class="pricing-button">
                                <a href="https://buy.stripe.com/4gw6rh3sBgEp4Vi7sw" class="text-dark text-decoration-underline1">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <p>All pricing in US Dollars</p>
                </div>
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
                            <h1 class="heading__secondary">We welcome small and large business partners</h1>
                        </div>

                        <div class="col-xl-7 col-md-7 mb-sm-45 ">
                            <img src="assets/img/buysmarter/8.png" alt="" class="img-fluid">

                        </div>

                        <div class="col-md-5 mx-auto d-flex flex-column justify-content-center">
                            <p class="pb-4 fs-1">Keep your business a step ahead with xChecker Procurement software.</p>
                            <p class="pb-4 fs-1">Procurement Specialists, Explore Partner Program:</p>
                            <a href="regsiter_procurement" class="text-center w-50 fs-2 btn-light btn-sm p-3 mb-5">Register Here</a>
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

                            <li class="mainmenu__item">
                                <a href="/" class="mainmenu__link">
                                    <span data-hover="{{ __('text.home') }}" class="mm-text">{{ __('text.home') }}</span>
                                </a>
                            </li>
                            <li class="mainmenu__item">
                                <a href="about-us" class="mainmenu__link">
                                    <span data-hover="{{ __('text.about') }}" class="mm-text">{{ __('text.about') }}</span>
                                </a>
                            </li>
                            <li class="mainmenu__item">
                                <a href="features" class="mainmenu__link">
                                    <span data-hover="{{ __('text.features') }}" class="mm-text">{{ __('text.features') }}</span>
                                </a>
                            </li>
                            <li class="mainmenu__item">
                                <a href="faq" class="mainmenu__link">
                                    <span data-hover="{{ __('text.faq') }}" class="mm-text">{{ __('text.faq') }}</span>
                                </a>
                            </li>
                            <li class="mainmenu__item">
                                <a href="contact" class="mainmenu__link">
                                    <span data-hover="{{ __('text.contact') }}" class="mm-text">{{ __('text.contact') }}</span>
                                </a>
                            </li>

                    </ul>
                    <div class="site-info vertical">
                        <div class="site-info__item">
                            <a href="tel:1 844 710 8500"><strong>1 844 710 8500 </strong></a>
                            <a href="mailto:sales@ronesoft.com">sales@ronesoft.com</a>
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

