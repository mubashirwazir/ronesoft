


@extends('layouts.app')

@section('content')

    {{-- <!-- Main Wrapper Start --> --}}
    <div class="wrapper">
        <!-- Header Start -->
        @include('layouts.header')

        <!-- Header End -->
        <!-- Main Content Wrapper Start -->
        <main class="main-content-wrapper p-2">
          <div class="container">

    <div class="accordion ">
        <div class="row">
            <div class="col-8">
        <h2 class="heading__secondary mb--30">
            <span class="heading__secondary--main">Frequently Ask Questions</span>
            <span class="heading__secondary--sub">Get Your Quick Answers</span>
        </h2>
         </div>
         <div class="col-4">
            <img src="assets\img\team\profile-pic (1).png" alt="" class="img-fluid">
         </div>
        </div>

        <div class="accordion-item ">
            <div class="accordion-header">Do I enter a long term contract?</div>
            <div class="accordion-content">
                <p>No, our services do not require  you to enter into a long-term contract. You can use our services on a month-to-month basis.</p>
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-header">Do I have to learn new software?</div>
            <div class="accordion-content">
                <p>No, our system integrates with your existing software and processes. There is no need for you to learn new software.</p>
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-header">Do you access our company IT system?</div>
            <div class="accordion-content">
                <p>No, we do not access your company IT system. Our services are designed to work independently without requiring access to your IT infrastructure.</p>
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-header">I am concerned about IT security.</div>
            <div class="accordion-content">
                <p>We take IT security very seriously. Our systems are designed with robust security measures to ensure the protection of your data and privacy.</p>
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-header">How do we send information to you?</div>
            <div class="accordion-content">
                <p>Email us your requirements and we will take care of the rest.</p>
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-header">How do we get the results?</div>
            <div class="accordion-content">
                <p>We email you the results and give you free access to view your account on the xChecker platform.</p>
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-header">Do you keep our credit card information?</div>
            <div class="accordion-content">
                <p>No, we do not. All payments are handled by the Stripe payment processing service.</p>
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-header">Is my data safe and private?</div>
            <div class="accordion-content">
                <p>We are committed to the security of your data and provide multiple layers of protection for personal and financial information.</p>
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-header">Does this service replace our existing team?</div>
            <div class="accordion-content">
                <p>No. We are a "fractional personnel service." We do not replace your team.</p>
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-header">Does this service replace our existing system?</div>
            <div class="accordion-content">
                <p>No. You keep using your current system. We do your work on our system, but you can log in to view your work on your platform.</p>
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-header">Does pricing change based on the amount of work?</div>
            <div class="accordion-content">
                <p>Yes. Our minimum fractional engagement is 12 hours per week. You can engage us for 20 hours or 40 hours per week.</p>
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-header">How does the service save me money?</div>
            <div class="accordion-content">
                <p>We use the next-generation xChecker procurement platform that is only available to our clients and approved service providers. We have an extensive supplier network and, in some instances, pre-negotiated discounted pricing for our clients.</p>
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-header">How do your services help us grow?</div>
            <div class="accordion-content">
                <p>We use the next-generation xChecker procurement platform that is only available to our clients and approved service providers. We have an extensive supplier network and, in some instances, pre-negotiated discounted pricing for our clients.</p>
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-header">Do I have to use your supplier network?</div>
            <div class="accordion-content">
                <p>No. We start with your approved suppliers. We can pre-qualify additional suppliers for you, but you have the final say on whether or not to use them.</p>
            </div>
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

