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
                                        <p class="text-white">
                                            Get back to doing what you do best and leave your Procurement Management and Buying activities to us.
                                        </p>
                                        <p class="text-white">
                                            @lang('text.slider_description')
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
                            <p>Try our Procurement and Category Management Service for every business. You focus on the results. We manage the hard work with our tools and analytics so you can Buy Smarter
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

{{-- Feature section --}}
            <!-- Slider area End -->
            <!-- About Area Start -->
{{-- <section class="about-area mb--9pt4">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-md-6">
                <div class="bg-image bg-sm-padding h-100" data-bg-image="assets/img/about/2.jpeg">
                </div>
            </div>
            <div class="col-md-6">
                <div class="content-wrapper h-100 pt-sm--9pt5 pb--13pt3 pb-sm--9pt8 pl-12percent pl-sm--15 pr--15 bg-color"
                    data-bg-color="#f7f8f9">
                    <div class="max-width-470 mx-auto">
                        <div class="heading">
                            <h2 class="mb--18">About RONEsoft</h2>
                            <hr class="delimeter mb--22">
                        </div>
                        <p>RONEsoft helps businesses to Buy Smarter.</p>
                        <p class="mb--25">RONEsoft specializes in Procurement Operations and provides customers with the ability to directly use xChecker to professionally execute their operations. We also provide Managed Procurement Services (MPS), offering customers complete peace of mind knowing that their Procurement Operations are in the hands of professionals who are trained to use xChecker to deliver results, so our clients can focus on their core business.</p>
                        <p class="mb--25">We give Business Owners more Control over their Buying Operations through an Intelligent Platform that holds all relevant information and provides deep insight and Buying Intelligence.</p>
                        <p class="mb--25">With xChecker, every Business can Buy Smarter, operate just as large corporations and Co-ops do. You will get the technology platform that expands your reach beyond your immediate Suppliers and gives you access to other Suppliers within your target industry. With this capability, our clients get measurable time savings and cost reduction.</p>
                        <p class="mb--25">Whether you are a self-managed client or a client using our Managed Procurement Services, you have 24/7 access to your account and full access to your business performance and results</p>
                        <p class="mb--25">Book a demo today. Contact <a href="mailto:sales@ronesoft.com">sales@ronesoft.com</a></p>
                        <a href="https://ronesoft.com/request-demo/" class="btn">Request a Demo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- About Area End -->


            <!-- Buy Smarter  Area Start -->
            <section class="about-area mb--9pt4">
                <div class="container p-5">
                    <div class="row g-2 text-center d-flex align-items-stretch">
                        <div class="col-md-6">
                          <div class="bg-yellow text-white m-4 p-5 pb-0 mb-0 rounded d-flex flex-column h-100">
                            <h1 class="heading__secondary_2 text-white">
                              <a href="#" class="text-decoration-underline2">Try our Service for free</a>
                            </h1>
                            <p>Access all our service features for 14 days, then decide.</p>
                            <p class="fw-bold text-center fs-1">Or</p>
                            <p>
                              <a href="https://xchecker.ronesoft.com/registration" class="text-white fw-bold text-decoration-underline1">Register Here</a>
                              to self manage your account on our platform, xChecker.
                            </p>
                            <img src="assets/img/buysmarter/2.webp" alt="" class="img-fluid mt-auto" style="width: 100%;">
                          </div>
                        </div>
                        <div class="col-md-6 p-2">
                          <div class="bg-black text-light m-4 p-5 pb-0 mb-0 rounded d-flex flex-column h-100">
                            <h2 class="heading__secondary_2 mb-30">
                              <span class="heading__secondary--main text-light">For Business Owners Procurement <span class="heading__secondary--sub">Managers Operators</span></span>
                            </h2>
                            <p>Expand your team’s capabilities without disruption to business</p>
                            <p>Get instant results from xChecker next generation procurement platform without the burden of learning yet another software.</p>
                            <p>Get access to pre-negotiated products and services pricing where available.</p>
                            <p class="fw-bold">Gain smart insight and Buy Smarter.</p>
                            <img src="assets/img/buysmarter/partner_xero_homepage_block_800x575_v2.1659309197912.webp" alt="" class="img-fluid w-75 mt-auto">
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
                                            <p class="text-start ms-4">
                                                <i class="fas fa-hand-holding-usd" style="color: #28a745;"></i> Simple RFQs (multiple bids and a buy)<br>
                                                <i class="fas fa-file-contract" style="color: #007bff;"></i> Complex bids (company-specific tenders)<br>
                                                <i class="fas fa-envelope" style="color: #dc3545;"></i> No more emails, spreadsheets, and texting
                                            </p>
                                        </div>
                                        <div class="flip-card-back">
                                            <img src="assets/img/graph/1.jpg" alt="Graph Image" class="card-img-top img-fluid rounded">
                                        </div>
                                    </div>
                                </div>
                                <img src="assets/img/buysmarter/1.webp" alt="" class="img-fluid pt-5">
                            </div>
                        </div>

                        <div class="col-md-6 p-2">
                            <div class="bg-black m-4 p-5 pb-0 mb-0 rounded h-100 d-flex flex-column justify-content-between"> <!-- Added flex-column and justify-content-between -->
                                <div>
                                    <h3 class="heading__secondary fs-1 text-start pt-5 text-light">We support small and large businesses.</h3>
                                    <p class="text-light">Keep your business a step ahead with "xChecker Procurement software.</p>
                                    <p class="text-light">Procurement Specialists Explore Partner Program:</p>
                                    <a href="regsiter_procurement" class="btn btn-warning btn-lg mb-4">Register Here</a> <!-- Updated button class for better styling -->

                                </div>
                                <div>
                                    <img src="assets/img/team/4.png" alt="" class="img-fluid  w-75 p-5 ms-4  rounded-circle text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="p-5"></div>

            <!-- Buy Smarter Area End -->

            {{-- form --}}
            <section class="mb--9pt mb-sm--7pt6">
                <div class="container p-4">
                  <div class="row">
                    <div class="col-lg-5 col-md-6 offset-lg-1 mb-4 mb-md-0"> <!-- Add margin bottom for smaller screens -->
                      <div class=" container contact-widget">
                        <h2 class="heading__secondary mb--30">
                          <span class="heading__secondary--main">Issue and Expedite Purchase Orders</span>
                          <span class="heading__secondary--sub">Instantly</span>
                        </h2>
                        <p class="m-0 color--dust">
                          No more manual Purchase Orders <br>
                          Instantly Sync Offers and Purchase Orders <br>
                          Track and Monitor Purchase Orders to delivery <br>
                          No conflict between Offer and Purchase
                        </p>
                        <a href="tel:+01223566678"><strong></strong></a>
                      </div>
                    </div>
                    <div class="col-md-6 mb-sm--45 pe-5">
                      <img src="assets/img/graph/image.png" alt="" class="img-fluid w-75 mx-auto d-block"> <!-- Center the image on small screens -->
                    </div>
                  </div>
                </div>
              </section>
             <!-- Services Area Start -->
             <section class="services-area mb--9pt mb-md--8pt5">
                <div class="container">
                    <div class="row mb--60 mb-md--50">
                        <div class="col-12 text-center">
                            <h2 class="heading__secondary">xChecker, Buy Smarter</h2>
                            {{-- <hr class="delimeter mx-auto"> --}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-sm-40 ">
                          <div class="card text-center shadow-lg ms-5 me-5 pt-4 pb-4">
                            <img src="assets/img/icons/1.png" alt="Service" class="card-img-top img-fluid w-25 mx-auto">
                            <a href="single-service.html" class="item-overlay"></a>
                            <div class="card-body service__info">
                              <h3 class="card-title service__title mt-3"><a href="single-service.html">Monthly Reporting</a></h3>
                              <span class="card-subtitle service__category">/Savings</span>
                              <p class="card-text color--dust mt-3 ">
                                Measure actual monthly savings <br>
                                Automated savings reporting <br>
                                Understand pricing trends <br>

                              </p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6 mb-sm-40">
                          <div class="card text-center shadow-lg ms-5 me-5 pt-4 pb-4;'\">
                            <img src="assets/img/icons/2.png" alt="Service" class="card-img-top img-fluid w-25 mx-auto">
                            <a href="single-service.html" class="item-overlay"></a>
                            <div class="card-body service__info">
                              <h3 class="card-title service__title mt-3"><a href="single-service.html">Price Trend Convergence</a></h3>
                              <span class="card-subtitle service__category">/Divergence</span>
                              <p class="card-text color--dust mt-3 pb-4">
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


            <div class="p-3"></div>

            <section class="mb-5">
                <div class="container mt-5 mb-5">
                    <div class="row justify-content-center text-center">
                      <div class="col-md-6">
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
                            <p>@lang('text.business_support_description')</p>
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

                        {{-- <div class="col-xl-4 col-md-6 mb-sm-45">
                            <div class="card m-4 shadow">
                                <div class="feature text-center">
                                    <div class="feature__icon">
                                        <img src="assets\img\industry\7.jpg" class="rounded mt-3" alt="">
                                    </div>
                                    <div class="feature__info">
                                        <h3 class="feature__title">@lang('text.municipalities')</h3>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        {{-- <div class="col-xl-4 col-md-6 mb-sm-45">
                            <div class="card m-4 shadow">
                                <div class="feature text-center">
                                    <div class="feature__icon">
                                        <img src="assets\img\industry\8.jpg" class="rounded mt-3" alt="">
                                    </div>
                                    <div class="feature__info">
                                        <h3 class="feature__title">@lang('text.haulage_transport')</h3>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </section>
            <!-- Feature Area End -->
             <!-- Buy Smarter  Area Start -->
             {{-- <section class="about-area mb--9pt4">
                <div class="container p-5">
                    <div class="row g-2 text-center d-flex align-items-stretch"> <!-- Added d-flex and align-items-stretch -->
                        <div class="col-md-6 p-2 bg-warning">
                            <div class=" m-4 p-5 pb-0 mb-0 rounded h-100"> <!-- Added h-100 -->
                                <h1 class="text-white">xChecker, Buy Smarter</h1>
                                <p class="display-6 text-white">Let xChecker do the heavy lifting for you</p>
                                <p class="text-secondary text-white">Implementing xChecker will simplify your purchasing negotiation process, systemize it and most importantly improve your company’s ability to Buy Smarter.</p>
                                <img src="assets\img\buysmarter\pngwing.com.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 p-2">
                            <div class="bg-dark text-light m-4 p-5 pb-0 mb-0 rounded h-100"> <!-- Added h-100 -->
                                <h2 class="text-light">For Business Owners, Procurement Managers and Operations</h2>
                                <p class="display-7">Need the results but not the disruption to business?</p>
                                <p class="text-secondary">Consider our Price Optimization as a Service offering. Try our Procurement Improvement Service that has been designed for businesses that need the Improvements that an Efficient Pricing Service offers but do not have the time or personnel to deliver them.</p>
                                <a href="https://ronesoft.com/request-demo/" class="btn btn-sm pb-2 pt-2 mb-5">Buy Now</a>

                                <img src="assets\img\buysmarter\1.webp" alt="" class="mt-5">
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}

            <!-- Buy Smarter Area End -->




            <!-- Services Area Start -->
            {{-- <section class="services-area mb--9pt mb-md--8pt5">
                <div class="container">
                    <div class="row mb--60 mb-md--50">
                        <div class="col-12 text-center">
                            <h2>Our Services</h2>
                            <hr class="delimeter mx-auto">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-sm--40">
                            <div class="service">
                                <figure class="service__image">
                                    <img src="assets/img/services/service-01.jpg" alt="Service" class="w-100">
                                    <a href="single-service.html" class="item-overlay"></a>
                                </figure>
                                <div class="service__info">
                                    <h3 class="service__title"><a href="single-service.html">Planing For New
                                            Project.</a></h3>
                                    <span class="service__category">
                                        <a href="#">Service</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-sm--40">
                            <div class="service">
                                <figure class="service__image">
                                    <img src="assets/img/services/service-02.jpg" alt="Service" class="w-100">
                                    <a href="single-service.html" class="item-overlay"></a>
                                </figure>
                                <div class="service__info">
                                    <h3 class="service__title"><a href="single-service.html">Planing For New
                                            Project.</a></h3>
                                    <span class="service__category">
                                        <a href="#">Service</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service">
                                <figure class="service__image">
                                    <img src="assets/img/services/service-03.jpg" alt="Service" class="w-100">
                                    <a href="single-service.html" class="item-overlay"></a>
                                </figure>
                                <div class="service__info">
                                    <h3 class="service__title"><a href="single-service.html">Planing For New
                                            Project.</a></h3>
                                    <span class="service__category">
                                        <a href="#">Service</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- Services Area End -->

            <!-- Tetimonial Area Start -->
            {{-- <section class="testimonial-area bg-color ptb--95 ptb-md--80 mb--9pt5" data-bg-color="#121420">
                <div class="testimonial-wrapper testimonial--horizontal--active">
                    <div class="testimonial-container swiper-wrapper">
                        <div class="item swiper-slide">
                            <div class="testimonial testimonial-style-1">
                                <div class="testimonial__inner">
                                    <div class="testimonial__desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                        </p>
                                    </div>
                                    <div class="testimonial__author">
                                        <figure class="testimonial__author--img">
                                            <img src="assets/img/others/client-2.jpg" alt="client">
                                        </figure>
                                        <div class="testimonial__author--info">
                                            <h3 class="testimonial__author--name">John Snow</h3>
                                            <p class="testimonial__author--role">PR Officer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item swiper-slide">
                            <div class="testimonial testimonial-style-1">
                                <div class="testimonial__inner">
                                    <div class="testimonial__desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                        </p>
                                    </div>
                                    <div class="testimonial__author">
                                        <figure class="testimonial__author--img">
                                            <img src="assets/img/others/client-1.jpg" alt="client">
                                        </figure>
                                        <div class="testimonial__author--info">
                                            <h3 class="testimonial__author--name">Sansa Stark</h3>
                                            <p class="testimonial__author--role">Marketing</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item swiper-slide">
                            <div class="testimonial testimonial-style-1">
                                <div class="testimonial__inner">
                                    <div class="testimonial__desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                        </p>
                                    </div>
                                    <div class="testimonial__author">
                                        <figure class="testimonial__author--img">
                                            <img src="assets/img/others/client-3.jpg" alt="client">
                                        </figure>
                                        <div class="testimonial__author--info">
                                            <h3 class="testimonial__author--name">Arya Stark</h3>
                                            <p class="testimonial__author--role">Product Manager</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item swiper-slide">
                            <div class="testimonial testimonial-style-1">
                                <div class="testimonial__inner">
                                    <div class="testimonial__desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                        </p>
                                    </div>
                                    <div class="testimonial__author">
                                        <figure class="testimonial__author--img">
                                            <img src="assets/img/others/client-2.jpg" alt="client">
                                        </figure>
                                        <div class="testimonial__author--info">
                                            <h3 class="testimonial__author--name">Tyrion</h3>
                                            <p class="testimonial__author--role">Marketing</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item swiper-slide">
                            <div class="testimonial testimonial-style-1">
                                <div class="testimonial__inner">
                                    <div class="testimonial__desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                        </p>
                                    </div>
                                    <div class="testimonial__author">
                                        <figure class="testimonial__author--img">
                                            <img src="assets/img/others/client-2.jpg" alt="client">
                                        </figure>
                                        <div class="testimonial__author--info">
                                            <h3 class="testimonial__author--name">Barn Stark</h3>
                                            <p class="testimonial__author--role">HR</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- Tetimonial Area End -->
          <!-- xChecker, Buy Smarter -->
          <section class="about-area mb--9pt4">
            <div class="container p-5">
                <div class="row g-2 text-center d-flex align-items-stretch"> <!-- Added d-flex and align-items-stretch -->
                    <div class="  col-md-6 p-2 ">
                        <div class="bg-yellow m-4 p-5 pb-0 mb-0 rounded h-100"> <!-- Added h-100 -->
                            <h1 class="text-white">xChecker, Buy Smarter</h1>
                            <p class="display-6 text-white">Let xChecker do the heavy lifting for you</p>
                            <p class="text-secondary text-white">Implementing xChecker will simplify your purchasing negotiation process, systemize it and most importantly improve your company’s ability to Buy Smarter.</p>
                            <img src="assets\img\buysmarter\2.webp" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 p-2">
                        <div class="bg-dark text-light m-4 p-5 pb-0 mb-0 rounded h-100"> <!-- Added h-100 -->
                            <h2 class="text-light">For Business Owners, Procurement Managers and Operations</h2>
                            <p class="display-7">Need the results but not the disruption to business?</p>
                            <p class="text-secondary">Consider our Price Optimization as a Service offering. Try our Procurement Improvement Service that has been designed for businesses that need the Improvements that an Efficient Pricing Service offers but do not have the time or personnel to deliver them.</p>
                            <a href="https://ronesoft.com/request-demo/" class="btn btn-sm pb-2 pt-2 mb-5">Buy Now</a>

                            <img src="assets\img\buysmarter\1.webp" alt="" class="mt-5">
                        </div>
                    </div>
                </div>
            </div>
        </section>
            <!-- Gallery Area Start -->
            {{-- <section class="gallery-area mb--10pt mb-sm--8pt7">
                <div class="container">
                    <div class="row mb--60 mb-md--50">
                        <div class="col-12 text-center">
                            <h2>Project Gallery</h2>
                            <hr class="delimeter mx-auto">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="element-carousel" data-slick-options='{
                                "spaceBetween": 30,
                                "slidesToShow": 4,
                                "autoplay": false
                            }' data-slick-responsive='[
                                {"breakpoint": 992, "settings":{
                                    "slidesToShow": 3
                                }},
                                {"breakpoint": 576, "settings":{
                                    "slidesToShow": 2
                                }},
                                {"breakpoint": 450, "settings":{
                                    "slidesToShow": 1
                                }}
                            ]'>
                                <div class="item">
                                    <div class="portfolio">
                                        <div class="portfolio__inner">
                                            <figure class="portfolio__img">
                                                <a href="#" class="d-block">
                                                    <img src="assets/img/portfolio/portfolio-01.jpg" alt="Portfolio"
                                                        class="w-100">
                                                </a>
                                            </figure>
                                            <div class="portfolio__info">
                                                <a href="#" class="portfolio__link">+</a>
                                                <h3 class="portfolio__title">
                                                    <a href="#">Project Name</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="portfolio">
                                        <div class="portfolio__inner">
                                            <figure class="portfolio__img">
                                                <a href="#" class="d-block">
                                                    <img src="assets/img/portfolio/portfolio-02.jpg" alt="Portfolio"
                                                        class="w-100">
                                                </a>
                                            </figure>
                                            <div class="portfolio__info">
                                                <a href="#" class="portfolio__link">+</a>
                                                <h3 class="portfolio__title">
                                                    <a href="#">Project Name</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="portfolio">
                                        <div class="portfolio__inner">
                                            <figure class="portfolio__img">
                                                <a href="#" class="d-block">
                                                    <img src="assets/img/portfolio/portfolio-03.jpg" alt="Portfolio"
                                                        class="w-100">
                                                </a>
                                            </figure>
                                            <div class="portfolio__info">
                                                <a href="#" class="portfolio__link">+</a>
                                                <h3 class="portfolio__title">
                                                    <a href="#">Project Name</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="portfolio">
                                        <div class="portfolio__inner">
                                            <figure class="portfolio__img">
                                                <a href="#" class="d-block">
                                                    <img src="assets/img/portfolio/portfolio-04.jpg" alt="Portfolio"
                                                        class="w-100">
                                                </a>
                                            </figure>
                                            <div class="portfolio__info">
                                                <a href="#" class="portfolio__link">+</a>
                                                <h3 class="portfolio__title">
                                                    <a href="#">Project Name</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="portfolio">
                                        <div class="portfolio__inner">
                                            <figure class="portfolio__img">
                                                <a href="#" class="d-block">
                                                    <img src="assets/img/portfolio/portfolio-01.jpg" alt="Portfolio"
                                                        class="w-100">
                                                </a>
                                            </figure>
                                            <div class="portfolio__info">
                                                <a href="#" class="portfolio__link">+</a>
                                                <h3 class="portfolio__title">
                                                    <a href="#">Project Name</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="portfolio">
                                        <div class="portfolio__inner">
                                            <figure class="portfolio__img">
                                                <a href="#" class="d-block">
                                                    <img src="assets/img/portfolio/portfolio-02.jpg" alt="Portfolio"
                                                        class="w-100">
                                                </a>
                                            </figure>
                                            <div class="portfolio__info">
                                                <a href="#" class="portfolio__link">+</a>
                                                <h3 class="portfolio__title">
                                                    <a href="#">Project Name</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- Gallery Area End -->

            <!-- Contact Area Start -->
            {{-- <section class="contact-area mb--9pt mb-sm--7pt6">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 mb-sm--45">
                            <form action="mail.php" class="form" id="contact-form">
                                <input type="email" name="con_email" id="con_email" class="form__input mb--30"
                                    placeholder="Email*">
                                <input type="text" name="con_name" id="con_name" class="form__input mb--30"
                                    placeholder="Name*">
                                <textarea class="form__input form__input--textarea mb--30" placeholder="Message"
                                    id="con_message" name="con_message"></textarea>
                                <button type="submit" class="btn btn-shape-round form__submit">Send Request</button>
                                <div class="form__output"></div>
                            </form>
                        </div>
                        <div class="col-lg-5 col-md-6 offset-lg-1">
                            <div class="contact-widget">
                                <p class="text-uppercase color--dust lh-1 mb--5">Contact Us</p>
                                <h2 class="heading__secondary mb--30">
                                    <span class="heading__secondary--main">Don't Hesitate to Contact us for any</span>
                                    <span class="heading__secondary--sub">Information</span>
                                </h2>
                                <p class="m-0 color--dust">Contact us for immediate support to this number</p>
                                <a href="tel:+01223566678"><strong>+01 2235 666 78</strong></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- Contact Area End -->

            <!-- Blog Area Start -->
            {{-- <section class="blog-area mb--9pt3 mb-sm--8pt8">
                <div class="container">
                    <div class="row mb--60 mb-md--50">
                        <div class="col-12 text-center">
                            <h2>From Our Blog</h2>
                            <hr class="delimeter mx-auto">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="element-carousel" data-slick-options='{
                                "spaceBetween": 30,
                                "slidesToShow": 3,
                                "autoplay": true
                            }' data-slick-responsive='[
                                {"breakpoint": 1200, "settings": {"slidesToShow": 3}},
                                {"breakpoint": 992, "settings": {"slidesToShow": 2}},
                                {"breakpoint": 768, "settings": {"slidesToShow": 1}}
                            ]'>
                                <div class="item">
                                    <article class="blog">
                                        <div class="blog__inner">
                                            <div class="blog__media">
                                                <figure class="image">
                                                    <img src="assets/img/blog/blog-06-560x345.jpg" alt="Blog Image"
                                                        class="w-100">
                                                    <a href="blog-details-image.html" class="item-overlay"></a>
                                                </figure>
                                            </div>
                                            <div class="blog__info">
                                                <h3 class="blog__title"><a href="blog-details-image.html">Finance
                                                        planing for a startup business</a></h3>
                                                <div class="blog__meta">
                                                    <span class="posted-on">13.02.2019</span>
                                                    <span class="posted-by"><span>By: </span><a
                                                            href="blog-details-image.html">Robert Joe</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="item">
                                    <article class="blog">
                                        <div class="blog__inner">
                                            <div class="blog__media">
                                                <figure class="image">
                                                    <img src="assets/img/blog/blog-07-560x345.jpg" alt="Blog Image"
                                                        class="w-100">
                                                    <a href="blog-details-image.html" class="item-overlay"></a>
                                                </figure>
                                            </div>
                                            <div class="blog__info">
                                                <h3 class="blog__title"><a href="blog-details-image.html">Finance
                                                        planing for a startup business</a></h3>
                                                <div class="blog__meta">
                                                    <span class="posted-on">13.02.2019</span>
                                                    <span class="posted-by"><span>By: </span><a
                                                            href="blog-details-image.html">Robert Joe</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="item">
                                    <article class="blog">
                                        <div class="blog__inner">
                                            <div class="blog__media">
                                                <figure class="image">
                                                    <img src="assets/img/blog/blog-08-560x345.jpg" alt="Blog Image"
                                                        class="w-100">
                                                    <a href="blog-details-image.html" class="item-overlay"></a>
                                                </figure>
                                            </div>
                                            <div class="blog__info">
                                                <h3 class="blog__title"><a href="blog-details-image.html">Finance
                                                        planing for a startup business</a></h3>
                                                <div class="blog__meta">
                                                    <span class="posted-on">13.02.2019</span>
                                                    <span class="posted-by"><span>By: </span><a
                                                            href="blog-details-image.html">Robert Joe</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="item">
                                    <article class="blog">
                                        <div class="blog__inner">
                                            <div class="blog__media">
                                                <figure class="image">
                                                    <img src="assets/img/blog/blog-09-560x345.jpg" alt="Blog Image"
                                                        class="w-100">
                                                    <a href="blog-details-image.html" class="item-overlay"></a>
                                                </figure>
                                            </div>
                                            <div class="blog__info">
                                                <h3 class="blog__title"><a href="blog-details-image.html">Finance
                                                        planing for a startup business</a></h3>
                                                <div class="blog__meta">
                                                    <span class="posted-on">13.02.2019</span>
                                                    <span class="posted-by"><span>By: </span><a
                                                            href="blog-details-image.html">Robert Joe</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="item">
                                    <article class="blog">
                                        <div class="blog__inner">
                                            <div class="blog__media">
                                                <figure class="image">
                                                    <img src="assets/img/blog/blog-10-560x345.jpg" alt="Blog Image"
                                                        class="w-100">
                                                    <a href="blog-details-image.html" class="item-overlay"></a>
                                                </figure>
                                            </div>
                                            <div class="blog__info">
                                                <h3 class="blog__title"><a href="blog-details-image.html">Finance
                                                        planing for a startup business</a></h3>
                                                <div class="blog__meta">
                                                    <span class="posted-on">13.02.2019</span>
                                                    <span class="posted-by"><span>By: </span><a
                                                            href="blog-details-image.html">Robert Joe</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="item">
                                    <article class="blog">
                                        <div class="blog__inner">
                                            <div class="blog__media">
                                                <figure class="image">
                                                    <img src="assets/img/blog/blog-11-560x345.png" alt="Blog Image"
                                                        class="w-100">
                                                    <a href="blog-details-image.html" class="item-overlay"></a>
                                                </figure>
                                            </div>
                                            <div class="blog__info">
                                                <h3 class="blog__title"><a href="blog-details-image.html">Finance
                                                        planing for a startup business</a></h3>
                                                <div class="blog__meta">
                                                    <span class="posted-on">13.02.2019</span>
                                                    <span class="posted-by"><span>By: </span><a
                                                            href="blog-details-image.html">Robert Joe</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- Blog Area End -->

            <!-- Brand Logo Area Start -->
            {{-- <div class="brand-logo-area bg-color ptb--100 ptb-md--80" data-bg-color="#121420">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-xl-11">
                            <div class="element-carousel" data-slick-options='{
                                "slidesToShow": 5,
                                "autoplay": true
                            }' data-slick-responsive='[
                                {"breakpoint": 1200, "settings": {"slidesToShow": 4}},
                                {"breakpoint": 992, "settings": {"slidesToShow": 3}},
                                {"breakpoint": 768, "settings": {"slidesToShow": 2}},
                                {"breakpoint": 480, "settings": {"slidesToShow": 1}}
                            ]'>
                                <div class="item">
                                    <figure>
                                        <img src="assets/img/brand/brand-01.png" alt="Brand" class="mx-auto">
                                    </figure>
                                </div>
                                <div class="item">
                                    <figure>
                                        <img src="assets/img/brand/brand-02.png" alt="Brand" class="mx-auto">
                                    </figure>
                                </div>
                                <div class="item">
                                    <figure>
                                        <img src="assets/img/brand/brand-03.png" alt="Brand" class="mx-auto">
                                    </figure>
                                </div>
                                <div class="item">
                                    <figure>
                                        <img src="assets/img/brand/brand-04.png" alt="Brand" class="mx-auto">
                                    </figure>
                                </div>
                                <div class="item">
                                    <figure>
                                        <img src="assets/img/brand/brand-05.png" alt="Brand" class="mx-auto">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- Brand Logo Area End -->
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

