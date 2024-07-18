@extends('layouts.app')

@section('content')
@include('layouts.header')
<div class="container mt-5">
    <div class="text-center mb-4">
        <h2 class="heading__secondary mb--30 ">
            <span class="heading__secondary--main">Managed Procurement Services</span>
            <span class="heading__secondary--sub mt2">(Fractional Procurement Specialist Service)</span>
        </h2>
    </div>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="pricing-plan">
                <div class="pricing-header">
                    <h3 class="text-white">MPS 10</h3>
                    <p>up to 10 hours/week</p>
                </div>
                <div class="pricing-price">
                    $999/month
                </div>
                <div class="pricing-button">
                    <a href="https://buy.stripe.com/bIY3f54wFdsdcnK4gj" class="text-dark text-decoration-underline1">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="pricing-plan">
                <div class="pricing-header">
                    <h3 class="text-white">MPS 20</h3>
                    <p>up to 20 hours/week</p>
                    <span class="badge bg-warning">Most Popular</span>
                </div>
                <div class="pricing-price">
                    $1,999/month
                </div>
                <div class="pricing-button">
                    <a href="https://buy.stripe.com/4gw6rh3sBgEp4Vi7sw" class="text-dark text-decoration-underline1">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="pricing-plan">
                <div class="pricing-header">
                    <h3 class="text-white">MPS 40</h3>
                    <p>up to 40 hours/week</p>
                </div>
                <div class="pricing-price">
                    $3,999/month
                </div>
                <div class="pricing-button">
                    <a href="https://buy.stripe.com/5kAaHx9QZ5ZL0F2aEG" class="text-dark text-decoration-underline1">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-4">
        <p>All pricing in US Dollars</p>
    </div>
</div>
<div class="row">
<div class="container col-md-8 mt-5 mb-5">
    <table class="table table-bordered shadow-lg p-4">
        <thead class="table-dark">
            <tr>
                <th class="p-4">Supplier Management + RFQ Module</th>
                <th class="p-4">RFP/Tender Module</th>
                <th class="p-4">Purchase Order Module</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="p-4">Vendor Self-Management</td>
                <td class="p-4">Multi-Currency RFPs</td>
                <td class="p-4">Issue Purchase Orders (PO) from RFQ</td>
            </tr>
            <tr>
                <td class="p-4">Vendor Pre-Qualification Screening</td>
                <td class="p-4">Technical Bid Questionnaire</td>
                <td class="p-4">Direct Issue Purchase Orders (PO)</td>
            </tr>
            <tr>
                <td class="p-4">Vendor Registration Documents storage</td>
                <td class="p-4">On-platform Questionnaire Attachments</td>
                <td class="p-4">Track POs and Service Orders to Delivery/Completion</td>
            </tr>
            <tr>
                <td class="p-4">Vendor Status (Active/Inactive)</td>
                <td class="p-4">On-platform Schedules Attachments</td>
                <td class="p-4">Display PO Delivery Due Dates</td>
            </tr>
            <tr>
                <td class="p-4">Vendor Approval by Category</td>
                <td class="p-4">Universal Multi-factor Evaluations</td>
                <td class="p-4">Pre-Delivery Due Date notifications</td>
            </tr>
            <tr>
                <td class="p-4">Electronic RFQ</td>
                <td class="p-4">Lease/Rental Bid Evaluations</td>
                <td class="p-4">Delivery Date Change notification</td>
            </tr>
            <tr>
                <td class="p-4">Electronic delivery</td>
                <td class="p-4">Post Offer Clarifications</td>
                <td class="p-4">Exception Notification</td>
            </tr>
            <tr>
                <td class="p-4">Automated Bid Closing</td>
                <td class="p-4">Consolidated Technical Bid Display</td>
                <td class="p-4"></td>
            </tr>
            <tr>
                <td class="p-4">Bid Closing Date Extension</td>
                <td class="p-4"></td>
                <td class="p-4"></td>
            </tr>
            <tr>
                <td class="p-4">Default Concealed Bidding</td>
                <td class="p-4"></td>
                <td class="p-4"></td>
            </tr>
            <tr>
                <td class="p-4">Option non-Concealed Bidding</td>
                <td class="p-4"></td>
                <td class="p-4"></td>
            </tr>
            <tr>
                <td class="p-4">Price Conditioning and control</td>
                <td class="p-4"></td>
                <td class="p-4"></td>
            </tr>
            <tr>
                <td class="p-4">Unified anonymous Bid Clarifications</td>
                <td class="p-4"></td>
                <td class="p-4"></td>
            </tr>
            <tr>
                <td class="p-4">Automated Commercial Evaluations</td>
                <td class="p-4"></td>
                <td class="p-4"></td>
            </tr>
            <tr>
                <td class="p-4">Optimum Price Reporting</td>
                <td class="p-4"></td>
                <td class="p-4"></td>
            </tr>
            <tr>
                <td class="p-4">Optimum Vendor Reporting</td>
                <td class="p-4"></td>
                <td class="p-4"></td>
            </tr>
            <tr>
                <td class="p-4">Easy Export</td>
                <td class="p-4"></td>
                <td class="p-4"></td>
            </tr>
            <tr>
                <td class="p-4">Multi-Currency RFQs</td>
                <td class="p-4"></td>
                <td class="p-4"></td>
            </tr>
            <tr>
                <td class="p-4">Find Additional Suppliers</td>
                <td class="p-4"></td>
                <td class="p-4"></td>
            </tr>
            <tr>
                <td class="p-4">Bid Evaluation Charts</td>
                <td class="p-4"></td>
                <td class="p-4"></td>
            </tr>
            <tr>
                <td class="p-4">Offer Spread Report Charts</td>
                <td class="p-4"></td>
                <td class="p-4"></td>
            </tr>
            <tr>
                <td class="p-4">Price Trend Report Charts</td>
                <td class="p-4"></td>
                <td class="p-4"></td>
            </tr>
            <tr>
                <td class="p-4">Price Optimization Potential Charts</td>
                <td class="p-4"></td>
                <td class="p-4"></td>
            </tr>
        </tbody>
    </table>
</div></div>
@include('layouts.footer')

<!-- OffCanvas Menu Start -->
<div class="offcanvas-menu-wrapper" id="offcanvasMenu">
    <div class="offcanvas-menu-inner">
        <a href="" class="btn-close">
            <img src="assets/img/icons/icon-cross.png" alt="Cross">
        </a>
        <nav class="offcanvas-navigation">
            <ul class="offcanvas-menu">
                <!-- Menu items -->
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
<!-- Global Overlay Start -->
<div class="global-overlay"></div>
<!-- Scroll to Top -->
<a class="scroll-to-top" href=""><i class="fa fa-angle-up"></i></a>

@endsection
