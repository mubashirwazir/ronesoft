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
                                        <li class="list-inline-item text-uppercase small-screen-text"><a href="register">{{ __('text.register') }}</a></li>
                                    </ul>
                                </div>
                                <div class="language-switcher">
                                    <ul class="list-inline top-menu mb-0">
                                        <li class="list-inline-item small-screen-text">
                                            <a href="{{ route('changeLang', ['lang' => 'en']) }}" class="disabled-link">
                                                <img src="assets/img/icons/en_US.png" alt=""> English
                                            </a>
                                        </li>
                                        <li class="list-inline-item small-screen-text">
                                            <a href="{{ route('changeLang', ['lang' => 'pt']) }}" class="disabled-link">
                                                <img src="assets/img/icons/pt_BR.png" alt="" class="img-fluid"> Portuguese
                                            </a>
                                        </li>
                                        <li class="list-inline-item small-screen-text">
                                            <a href="{{ route('changeLang', ['lang' => 'es']) }}" class="disabled-link">
                                                <img src="assets/img/icons/es_ES.png" alt=""> Spanish
                                            </a>
                                        </li>
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
                                        <a href="/" class="logo--normal">
                                            <img src="assets/img/logo/logo1.png" alt="Logo">
                                        </a>
                                    </div>
                                </div>
                                <div class="header__middle-center">
                                    <nav class="main-navigation text-center d-none d-lg-block">
                                        <ul class="mainmenu">
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
                                                <a href="WhyxChecker" class="mainmenu__link">
                                                    <span data-hover="Why Xchecker" class="mm-text">Why Xchecker</span>
                                                </a>
                                            </li>
                                            <li class="mainmenu__item">
                                                <a href="contact" class="mainmenu__link">
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
                                                <a href="tel:1 844 710 8500"><strong>1 844 710 8500 </strong></a>
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
