@extends('layouts.app')

@section('content')
@include('layouts.header')
<!-- Breadcrumb area Start -->
<!-- <section class="page-title-area bg-image ptb--80" data-bg-image="assets/img/background/2.jpg">
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
</section> -->
<!-- Breadcrumb area End -->

<!-- Main Content Wrapper Start -->
<main class="main-content-wrapper mt-5">

    <div class="inner-page-content ">
        <!-- Contact Area Start -->
        <section class="contact-area mb--9pt5">
            <div class="container">
                <div class="contact-container row gap-5">
                    <div class="row responsive-row mb--30">
                        <div class="col">
                            <img class="image-fluid" src="https://static.wixstatic.com/media/11062b_f6f22f3992c9492a9f8bf7cd50e04e98~mv2.jpeg/v1/fill/w_392,h_341,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/11062b_f6f22f3992c9492a9f8bf7cd50e04e98~mv2.jpeg" alt="">
                        </div>
                        <div class="col">
                            <div class="heading mb--42">
                                <h2 class="heading__secondary">Get In Touch</h2>

                            </div>
                            <div class="contact-info mb--30">
                                <p><i class="fa fa-map-marker"></i>1400-16th Street, 16 Market Square,
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
                    </div>
                    <div class="row responsive-row-reverse">
                        <div class="col">
                            <div class="heading mb--42">
                                <h2 class="heading__secondary">Business Locations</h2>
                            </div>
                            <div class="row d-flex flex-column">
                                <div class="d-flex mb--30">
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
                                <div class="d-flex mb--30">
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
                                <div class="d-flex mb--30">
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
                        <div class="col">
                            <div class="heading mb--42">
                                <h2 class="heading__secondary">Contact Us</h2>
                            </div>
                            <form id="regForm" action="{{ url('/send-contact') }}" method="POST" class="form  p-5 rounded">
                                @csrf
                                <div class="mb-5">
                                    <label for="companyName">Name:</label>
                                    <input type="text" id="companyName" name="companyName" required class="form-control form__input">
                                </div>
                                <div class="mb-5">
                                    <label for="email">Email, General Mailbox:</label>
                                    <input type="email" id="email" name="email" required class="form-control form__input">
                                </div>
                                <div class="mb-5">
                                    <label for="phone">Phone Number:</label>
                                    <input type="tel" id="phone" name="phone" required class="form-control form__input">
                                </div>
                                <div class="mb-5">
                                    <label for="description">Message:</label>
                                    <textarea id="description" name="description" required class="form-control form__input form__input--textarea mb--30"></textarea>
                                </div>
                                <div class="mb-5" id="recaptcha-container">{!! NoCaptcha::display() !!}</div>
                                <div class="mb-5 text-danger" id="recaptcha-error" style="display: none;">Please Verify you are not a robot! </div>
                                <div class="mb-5">
                                    <button type="submit" class="btn-light">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- Contact Area End -->
        <!-- buisness Area Start -->
        <!-- <section class="buisness-area mb--9pt5">
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
        </section> -->
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
