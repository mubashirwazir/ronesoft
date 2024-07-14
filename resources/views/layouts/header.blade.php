<!-- Header Start -->
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

<!-- Header End -->
