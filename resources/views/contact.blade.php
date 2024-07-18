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
<main class="main-content-wrapper">  @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

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
                        <form action="{{ route('contact.send') }}" method="POST" class="form" id="contact-form">
                            @csrf
                            <input type="email" name="con_email" id="con_email" class="form__input mb--30" placeholder="Email*">
                            <input type="text" name="con_name" id="con_name" class="form__input mb--30" placeholder="Name*">
                            <textarea class="form__input form__input--textarea mb--30" placeholder="Message" id="con_message" name="con_message"></textarea>
                            <button type="submit" class="btn-light btn-shape-round form__submit">Send Request</button>
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
