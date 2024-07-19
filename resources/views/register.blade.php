@extends('layouts.app')

@section('content')
@include('layouts.header')

<div class="image-container position-relative">
    <img src="assets/img/background/2.jpg" alt="" class="img-fluid">
    <div class="overlay"></div>
</div>

<div class="row overlap-container justify-content-center">
    <div class="row justify-content-center">
        <div class="col-md-8 bg-light shadow-lg rounded">
            <div class="m-5">
                <h1 class="heading__secondary text-start text-dark">Register Here For Free Trial:</h1>
                <form id="regForm" action="{{ route('submit_freeregistration') }}" method="POST" class="form">
                    @csrf

                    <!-- Step indicators -->
                    <div class="steps mb-4">
                        <div class="step-indicator active">1</div>
                        <div class="step-indicator">2</div>
                        <div class="step-indicator">3</div>
                    </div>

                    <!-- Step 1: Company Registration Information -->
                    <div class="step active">
                        <h2 class="heading__secondary_2 text-center">Company Registration Information</h2>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="companyName">Company Name:</label>
                                <input type="text" id="companyName" name="companyName" required class="form__input">
                            </div>
                            <div class="col-md-6">
                                <label for="businessAddress">Business Address:</label>
                                <input type="text" id="businessAddress" name="businessAddress" required class="form__input">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="city">City:</label>
                                <input type="text" id="city" name="city" required class="form__input">
                            </div>
                            <div class="col-md-6">
                                <label for="state">State/Province:</label>
                                <input type="text" id="state" name="state" required class="form__input">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="postalCode">Postal/Zip Code:</label>
                                <input type="text" id="postalCode" name="postalCode" required class="form__input">
                            </div>
                            <div class="col-md-6">
                                <label for="country">Country:</label>
                                <input type="text" id="country" name="country" required class="form__input">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="email">Email, General Mailbox:</label>
                                <input type="email" id="email" name="email" required class="form__input">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <button type="button" class="btn-light" onclick="nextStep()">Next</button>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2: User Information -->
                    <div class="step">
                        <h2 class="heading__secondary_2 text-center">User Information</h2>
                        <div class="mb-3">
                            <label for="userFirstName">User First Name:</label>
                            <input type="text" id="userFirstName" name="userFirstName" required class="form__input">
                        </div>
                        <div class="mb-3">
                            <label for="userLastName">User Last Name:</label>
                            <input type="text" id="userLastName" name="userLastName" required class="form__input">
                        </div>
                        <div class="mb-3">
                            <label for="userEmail">User Email:</label>
                            <input type="email" id="userEmail" name="userEmail" required class="form__input">
                        </div>
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <button type="button" class="btn-light" onclick="previousStep()">Previous</button>
                            </div>
                            <div class="col-md-6 text-center">
                                <button type="button" class="btn-light" onclick="nextStep()">Next</button>
                            </div>
                        </div>
                    </div>

                    <!-- Step 3: Select Service -->
                    <div class="step">
                        <h2 class="heading__secondary_2 text-center">Select Service (No Credit Card Required)</h2>
                        <div class="mb-3">
                            <label for="service">Select Service:</label>
                            <select id="service" name="service" required class="form__input mb--20 text-dark">
                                <option value="MPS-10">MPS-10 : Up to 10 hours per week of Procurement Specialist </option>
                                <option value="MPS-20">MPS-20 : Up to 20 hours per week of Procurement Specialist </option>
                                <option value="MPS-40">MPS-40 : Up to 40 hours per week of Procurement Specialist </option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <button type="button" class="btn-light" onclick="previousStep()">Previous</button>
                            </div>
                            <div class="col-md-6 text-center">
                                <button type="submit" class="btn-light">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
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
    let currentStep = 0;
    showStep(currentStep);

    function showStep(n) {
        let steps = document.querySelectorAll('.step');
        steps[n].style.display = 'block';
        let indicators = document.querySelectorAll('.step-indicator');
        indicators.forEach((indicator, index) => {
            if (index <= n) {
                indicator.classList.add('active');
            } else {
                indicator.classList.remove('active');
            }
        });
    }

    function nextStep() {
        let steps = document.querySelectorAll('.step');
        steps[currentStep].style.display = 'none';
        currentStep++;
        if (currentStep >= steps.length) {
            currentStep = steps.length - 1;
        }
        showStep(currentStep);
    }

    function previousStep() {
        let steps = document.querySelectorAll('.step');
        steps[currentStep].style.display = 'none';
        currentStep--;
        if (currentStep < 0) {
            currentStep = 0;
        }
        showStep(currentStep);
    }
</script>
@endsection
