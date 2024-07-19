@extends('layouts.app')

@section('content')
@include('layouts.header')

<div class="container mt-5">
    <h2 class="heading__secondary mb--30 ">
        <span class="heading__secondary--main">Procurement Specialists Partner Program </span>
        <span class="heading__secondary--sub mt2">Register Here</span>
    </h2>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row mb-5">
        <div class="col-md-6 ">
            <div class="container p-5 me-4">
                <img src="assets\img\buysmarter\9.png" alt="" class="img-fluid">
                <p class="fs-1">
                    Available to qualified Procurement and Category Management personnel and companies.
                </p>
                <p class="fs-1">
                    Join our Partner Program. Instantly grow your brand and provide Managed Procurement Service to as many clients as you can support.
                    <br> We provide the tech platform and access to all existing and registered supplier base. Start your journey to business independence today.
                </p>
            </div>
        </div>
        <div class="col-md-6 bg-black text-white">
            @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
            <form id="regForm" action="{{ url('/submit_registration') }}" method="POST" class="form shadow-lg p-5 rounded">
                @csrf

                <h2 class="heading__secondary_2 text-light mb-4">Company Registration Information</h2>

                <div class="row mb-3">
                    <div class="col-md-6 mb-3">
                        <label for="companyName">Company Name:</label>
                        <input type="text" id="companyName" name="companyName" required class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="businessAddress">Business Address:</label>
                        <input type="text" id="businessAddress" name="businessAddress" required class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6 mb-3">
                        <label for="city">City:</label>
                        <input type="text" id="city" name="city" required class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="state">State/Province:</label>
                        <input type="text" id="state" name="state" required class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6 mb-3">
                        <label for="postalCode">Postal/Zip Code:</label>
                        <input type="text" id="postalCode" name="postalCode" required class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="country">Country:</label>
                        <input type="text" id="country" name="country" required class="form-control">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email">Email, General Mailbox:</label>
                    <input type="email" id="email" name="email" required class="form-control">
                </div>

                <div class="mb-3">
                    <label for="companyWebsite">Company Website:</label>
                    <input type="text" id="companyWebsite" name="companyWebsite" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="description">Describe how you will use xChecker to grow yours and your clients' business:</label>
                    <textarea id="description" name="description" required class="form-control"></textarea>
                </div>

                <h2 class="heading__secondary_2 mb-4 text-light">User Information</h2>

                <div class="row mb-3">
                    <div class="col-md-6 mb-3">
                        <label for="userFirstName">User First Name:</label>
                        <input type="text" id="userFirstName" name="userFirstName" required class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="userLastName">User Last Name:</label>
                        <input type="text" id="userLastName" name="userLastName" required class="form-control">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="userEmail">User Email:</label>
                    <input type="email" id="userEmail" name="userEmail" required class="form-control">
                </div>

                <div >
                    <button type="submit" class="btn">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@include('layouts.footer')

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
<!-- Scroll to Top -->
<a class="scroll-to-top" href=""><i class="fa fa-angle-up"></i></a>

<script>
    // Custom script for form behavior if needed
</script>
@endsection
