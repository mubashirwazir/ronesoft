@extends('layouts.app')

@section('content')
@include('layouts.header')
<!-- Breadcrumb area Start -->
<section class="page-title-area bg-image ptb--80" data-bg-image="assets/img/background/2.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Contact Us</h1>
                <ul class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li class="current"><span>Contact Us</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb area End -->

<!-- Main Content Wrapper Start -->
<main class="main-content-wrapper">

    <div class="inner-page-content mt--9pt5">
        <!-- Contact Area Start -->
        <section class="contact-area mb--9pt5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-5 mb-md--50">
                        <div class="heading mb--42">
                            <h2 class="heading__secondary">Get In Touch</h2>

                        </div>
                        <div class="contact-info mb--30">
                            <p><i class="fa fa-map-marker"></i>1400-16th Street, 16 Market Square,<br>
                                 Denver, Suite 400, Denver, CO 80202
                            </p>
                            <p><i class="fa fa-phone"></i> 1 844 710 8500</p>

                            {{-- <p><i class="fa fa-clock-o"></i> Mon – Fri : 9:00 – 18:00</p> --}}
                        </div>
                        <ul class="social social-outline">
                            <li class="social__item">
                                <a href="https://www.facebook.com" class="social__link">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="social__item">
                                <a href="https://www.plus.google.com" class="social__link">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li class="social__item">
                                <a href="https://www.twitter.com" class="social__link">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="social__item">
                                <a href="https://www.linkedin.com" class="social__link">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-7 offset-lg-1">
                                   <div class="heading mb--42">
                            <h2 class="heading__secondary">Contact Us</h2>

                        </div>
                        <form id="regForm" action="{{ url('/send-contact') }}" method="POST" class="form  p-5 rounded">
                            @csrf
                            <div class=" mb-5">
                                <label for="companyName"> Name:</label>
                                <input type="text" id="companyName" name="companyName" required class="form-control form__input">
                            </div>
                            <div class="mb-5">
                                <label for="email">Email, General Mailbox:</label>
                                <input type="email" id="email" name="email" required class="form-control form__input">
                            </div>
                            <div class="mb-5">
                                <label for="description">Message:</label>
                                <textarea id="description" name="description" required class="form-control form__input form__input--textarea mb--30"></textarea>
                            </div>
                            <div>
                                <button type="submit" class="btn-light">Submit</button>
                            </div>
                        </form>





                    </div>
                </div>
            </div>

        </section>
        <!-- Contact Area End -->
        <!-- buisness Area Start -->
        <section class="buisness-area mb--9pt5">
            <div class="container mt-5">
                <h2 class="heading__secondary">Business Locations</h2>
                <div class="row">
                    <div class="col-md-4 d-flex">
                        <div class="card text-center p-5 flex-fill">
                            <div class="card-body">
                                <h1>Houston</h1>
                                <p class="card-text">
                                    1201 Fannin St., Suite 262, <br>
                                    Houston, TX 77002. <br>
                                    Phone: 1 844 710 8500
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="card text-center p-5 flex-fill">
                            <div class="card-body">
                                <h1>Tulsa</h1>
                                <p class="card-text">
                                    8211 East Regal Place, Bridle Trails, <br>
                                    Suite 100-103, Tulsa, OK 74133. <br>
                                    Phone: 1 844 710 8500
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="card text-center p-5 flex-fill">
                            <div class="card-body">
                                <h1>Calgary</h1>
                                <p class="card-text">
                                    1600 144 4th Ave SW, Calgary, AB T2P 3N4 <br>
                                    Email: sales@ronesoft.com <br>
                                    Phone: 1 844 710 8500
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Contact Area End -->


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
