@extends('layouts.app')

@section('content')
<header class="header site-header">
    <div class="header__outer">
        <div class="header__inner header--fixed">
            <div class="header__top">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="header__top-inner d-flex justify-content-between align-items-center flex-wrap">
                                <div class="header__top-left d-none d-md-block">
                                    {{ __('text.welcome') }}
                                </div>
                                <div class="header__top-right">
                                    <ul class="list-inline top-menu mb-0">
                                        <li class="list-inline-item text-uppercase small-screen-text"><a href="https://xchecker.ronesoft.com/Account/Login">{{ __('text.login') }}</a></li>
                                        <li class="list-inline-item text-uppercase small-screen-text"><a href="https://xchecker.ronesoft.com/Account/Register">{{ __('text.register') }}</a></li>
                                    </ul>
                                </div>
                                <div class="language-switcher">
                                    <ul class="list-inline top-menu mb-0">
                                        <li class="list-inline-item small-screen-text"><a href="{{ route('changeLang', ['lang' => 'en']) }}">
                                            <img src="assets/img/icons/en_US.png" alt=""> English
                                        </a></li>
                                        <li class="list-inline-item small-screen-text"><a href="{{ route('changeLang', ['lang' => 'pt']) }}">
                                            <img src="assets/img/icons/fr_FR.png" alt=""> Portuguese
                                        </a></li>
                                        <li class="list-inline-item small-screen-text"><a href="{{ route('changeLang', ['lang' => 'es']) }}">
                                            <img src="assets/img/icons/es_ES.png" alt=""> Spanish
                                        </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="header__middle">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="header__middle-inner">
                                <div class="header__middle-left">
                                    <div class="logo">
                                        <a href="index.html" class="logo--normal">
                                            <img src="assets/img/logo/logo1.png" alt="Logo">
                                        </a>
                                    </div>
                                </div>
                                <div class="header__middle-center">
                                    <nav class="main-navigation text-center d-none d-lg-block">
                                        <ul class="mainmenu">
                                            <li class="mainmenu__item menu-item-has-children">
                                                <a href="index.html" class="mainmenu__link">
                                                    <span data-hover="{{ __('text.home') }}" class="mm-text">{{ __('text.home') }}</span>
                                                </a>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="index.html">
                                                            <span data-hover="{{ __('text.homepage_01') }}" class="mm-text">{{ __('text.homepage_01') }}</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="index-02.html">
                                                            <span data-hover="{{ __('text.homepage_02') }}" class="mm-text">{{ __('text.homepage_02') }}</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mainmenu__item">
                                                <a href="about-us.html" class="mainmenu__link">
                                                    <span data-hover="{{ __('text.about') }}" class="mm-text">{{ __('text.about') }}</span>
                                                </a>
                                            </li>
                                            <li class="mainmenu__item">
                                                <a href="services.html" class="mainmenu__link">
                                                    <span data-hover="{{ __('text.services') }}" class="mm-text">{{ __('text.services') }}</span>
                                                </a>
                                            </li>
                                            <li class="mainmenu__item">
                                                <a href="our-projects.html" class="mainmenu__link">
                                                    <span data-hover="{{ __('text.projects') }}" class="mm-text">{{ __('text.projects') }}</span>
                                                </a>
                                            </li>
                                            <li class="mainmenu__item menu-item-has-children">
                                                <a href="blog.html" class="mainmenu__link">
                                                    <span data-hover="{{ __('text.blog') }}" class="mm-text">{{ __('text.blog') }}</span>
                                                </a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item-has-children">
                                                        <a href="blog.html">
                                                            <span data-hover="{{ __('text.blog') }}" class="mm-text">{{ __('text.blog') }}</span>
                                                        </a>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="blog-01-column.html">
                                                                    <span data-hover="{{ __('text.column_01') }}" class="mm-text">{{ __('text.column_01') }}</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-02-columns.html">
                                                                    <span data-hover="{{ __('text.columns_02') }}" class="mm-text">{{ __('text.columns_02') }}</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-03-columns.html">
                                                                    <span data-hover="{{ __('text.columns_03') }}" class="mm-text">{{ __('text.columns_03') }}</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-left-sidebar.html">
                                                                    <span data-hover="{{ __('text.left_sidebar') }}" class="mm-text">{{ __('text.left_sidebar') }}</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a href="blog-details-image.html">
                                                            <span data-hover="{{ __('text.single_blog') }}" class="mm-text">{{ __('text.single_blog') }}</span>
                                                        </a>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="blog-details-audio.html">
                                                                    <span data-hover="{{ __('text.audio_details') }}" class="mm-text">{{ __('text.audio_details') }}</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-details-gallery.html">
                                                                    <span data-hover="{{ __('text.gallery_details') }}" class="mm-text">{{ __('text.gallery_details') }}</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-details-image.html">
                                                                    <span data-hover="{{ __('text.image_details') }}" class="mm-text">{{ __('text.image_details') }}</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-details-video.html">
                                                                    <span data-hover="{{ __('text.video_details') }}" class="mm-text">{{ __('text.video_details') }}</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mainmenu__item">
                                                <a href="contact.html" class="mainmenu__link">
                                                    <span data-hover="{{ __('text.contact') }}" class="mm-text">{{ __('text.contact') }}</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="header__middle-right">
                                    <div class="site-info--wrapper d-none d-lg-block">
                                        <div class="site-info">
                                            <div class="site-info__item">
                                                <a href="tel:1 844 402 2552"><strong>1 844 402 2552</strong></a>
                                                <a href="mailto:sales@ronesoft.com">sales@ronesoft.com</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="header-toolbar-wrap d-block d-lg-none">
                                        <div class="header-toolbar">
                                            <a href="#offcanvasMenu" class="header-toolbar__btn toolbar-btn menu-btn">
                                                <div class="hamburger-icon">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-header-height"></div>
    </div>
</header>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="m-5">
                <h1 class="heading__secondary">Register Here For Free Trial:</h1>
                <form id="regForm" action="/submit_registration" method="POST" class="form shadow p-5">
                    <!-- Step indicators -->
                    <div class="steps">
                        <div class="step-indicator active">1</div>
                        <div class="step-indicator">2</div>
                        <div class="step-indicator">3</div>
                    </div>

                    <!-- Step 1: Company Registration Information -->
                    <div class="step active">
                        <h2 class="heading__secondary_2">Company Registration Information</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="companyName">Company Name:</label>
                                <input type="text" id="companyName" name="companyName" required class="form__input mb--20">
                            </div>
                            <div class="col-md-6">
                                <label for="businessAddress">Business Address:</label>
                                <input type="text" id="businessAddress" name="businessAddress" required class="form__input mb--20">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="city">City:</label>
                                <input type="text" id="city" name="city" required class="form__input mb--20">
                            </div>
                            <div class="col-md-6">
                                <label for="state">State/Province:</label>
                                <input type="text" id="state" name="state" required class="form__input mb--20">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="postalCode">Postal/Zip Code:</label>
                                <input type="text" id="postalCode" name="postalCode" required class="form__input mb--20">
                            </div>
                            <div class="col-md-6">
                                <label for="country">Country:</label>
                                <input type="text" id="country" name="country" required class="form__input mb--20">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="email">Email, General Mailbox:</label>
                                <input type="email" id="email" name="email" required class="form__input mb--20">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="btn-light form__submit" onclick="nextStep()">Next</button>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2: User Information -->
                    <div class="step">
                        <h2 class="heading__secondary_2">User Information</h2>
                        <label for="userFirstName">User First Name:</label>
                        <input type="text" id="userFirstName" name="userFirstName" required
                            class="form__input mb--20">
                        <label for="userLastName">User Last Name:</label>
                        <input type="text" id="userLastName" name="userLastName" required
                            class="form__input mb--20">
                        <label for="userEmail">User Email:</label>
                        <input type="email" id="userEmail" name="userEmail" required class="form__input mb--20">
                        <button type="button" class="btn-light  form__submit"
                            onclick="previousStep()">Previous</button>
                        <button type="button" class="btn-light  form__submit"
                            onclick="nextStep()">Next</button>
                    </div>

                    <!-- Step 3: Select Service -->
                    <div class="step">
                        <h2 class="heading__secondary_2">Select Service (No Credit Card Required)</h2>
                        <label for="service">Select Service:</label>
                        <select id="service" name="service" required class="form__input mb--20">
                            <option value="MPS-10">MPS-10</option>
                            <option value="MPS-20">MPS-20</option>
                            <option value="MPS-40">MPS-40</option>
                        </select>
                        <button type="button" onclick="previousStep()" class="btn-light rounded form__submit mb-5">Previous</button>
                        <button type="submit" class="btn-light rounded form__submit mb-5">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


   <!-- Footer Start-->
   <footer class="footer bg-dark text-white" data-bg-color="#F6F7FA">
    <div class="footer-top border-bottom pt--70 pb--65 pb-sm--60">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-7 mb-sm--30">
                    <div class="footer-widget">
                        <div class="textwidget mb--21">
                            <figure class="footer-logo">
                                <img src="assets/img/logo/logo2.png" alt="Logo">
                            </figure>
                        </div>
                    </div>

                </div>
                <div class="col-lg-2 col-md-5 offset-md-1 mb-md--35 mb-sm--25">
                    <div class="footer-widget">
                        <h3 class="widget-title mb--35 mb-sm--20 text-white">Pages</h3>
                        <div class="footer-widget">
                            <ul class="footer-menu text-secondary">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="services.html">About Us</a></li>
                                <li><a href="our-projects.html">Contact Us</a></li>
                                {{-- <li><a href="blog.html">News</a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-7 mb-sm--30">
                    <div class="footer-widget">
                        <h3 class="widget-title mb--35 mb-sm--20 text-white">Services</h3>
                        <div class="footer-widget">
                            <ul class="footer-menu text-secondary">
                                <li><a href="#">Affiliates</a></li>
                                <li><a href="#">Why Xchecker</a></li>
                                <li><a href="#">Risk Management</a></li>
                                {{-- <li><a href="#">Features & Pricing</a></li> --}}
                                {{-- <li><a href="#">Business Planning</a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-7 mb-sm--30">
                    <div class="footer-widget">
                        <div class="newsletter-form-widget">
                            <p>Subscribe to our Newsletter. And get all update for next time</p>
                            <form
                                action="https://company.us19.list-manage.com/subscribe/post?u=2f2631cacbe4767192d339ef2&amp;id=24db23e68a"
                                method="post" name="mc-embedded-subscribe-form" class="newsletter-form mc-form">
                                <input type="email" name="newsletter_email" class="newsletter-form__input"
                                    placeholder="Enter Your Email">
                                <button type="submit" class="newsletter-form__btn">Subscribe</button>
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom ptb--17">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="copyright-text">&copy;2024 RONEsoft . All rights reserved </p>
                </div>
            </div>
        </div>
    </div>
</footer>
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


