@extends('layouts.app')

@section('content')
@include('layouts.header')

        <!-- Breadcrumb area Start -->
        <section class="page-title-area bg-image ptb--80" data-bg-image="assets/img/background/1.webp">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">About Us</h1>
                        <ul class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li class="current"><span>About Us</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb area End -->
          <div class="m-5 p-3"></div>
        <!-- Main Content Wrapper Start -->
        <main class="main-content-wrapper">
            <!-- About Area Start -->
            <section class="about-area mb--9pt4">
                <div class="container p-0">
                    <div class="row g-0">
                        <div class="col-md-6 ">

                                <img src="assets/img/about/5.jpg" alt="" class="bg-image bg-sm-padding img-fluid align-items-center">

                        </div>
                        <div class="col-md-6 ">
                            <div class="h-100 pt--13pt pt-sm--9pt5 pb--13pt3 pb-sm--9pt8 pl-12percent pl-sm--15 pr--15 bg-color"
                                data-bg-color="#f7f8f9">
                                <div class="max-width-470">
                                    <div class="heading">
                                        <h2 class="mb--18">About RONEsoft</h2>
                                        <hr class="delimeter mb--22">
                                    </div>
                                    <p class="mb--25">RONEsoft helps businesses to Buy Smarter.

                                       </p>
                                    <p class="mb--25">
                                        RONEsoft specializes in Procurement Operations and provides customers with the ability to directly use xChecker to professionally execute their operations. We also provide Managed Procurement Services (MPS), offering customers complete peace of mind knowing that their Procurement Operations are in the hands of professionals who are trained to use xChecker to deliver results, so our clients can focus on their core business.

                                       </p>
                                    <a href="register" class="btn-light">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Area End -->

            <!-- Skoll Area Start -->
            <section class="skill-area mb--9pt3 mb-md--8pt9">
                <div class="container ">
                            <div class="heading mb--30 ms-4">
                                <h2 class="text-uppercase mb--25">What we do?</h2>
                                <p class="mb--25">We give Business Owners more Control over their Buying Operations through an Intelligent Platform that holds all relevant information and provides deep insight and Buying Intelligence.</p>
                                <p class="mb--25">With xChecker, every Business can Buy Smarter, operate just as large corporations and Co-ops do. You will get the technology platform that expands your reach beyond your immediate Suppliers and gives you access to other Suppliers within your target industry. With this capability, our clients get measurable time savings and cost reduction.</p>
                                <p class="mb--25">Whether you are a self-managed client or a client using our Managed Procurement Services, you have 24/7 access to your account and full access to your business performance and results.</p>
                                <p class="mb--25 fw-bold">Book a demo today. Contact  <a href="mailto:sales@ronesoft.com" class="text-decoration-underline1">sales@ronesoft.com</a> </p>
                                <a href="register" class="btn-light">Get Started</a>

                            </div>
                </div>
            </section>
            <!-- Skoll Area End -->

        </main>
        <!-- Main Content Wrapper End -->
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
