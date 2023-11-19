@extends('frontend.front_master')
@section('content')
@section('title')
about us
@endsection
<!-- bread crumb part start -->
<section class="breadcrumb-area" data-background="{{ asset('frontend/assets/img/bg/bread-crumb-bg.png') }}">
    <div class="container">
        <div class="breadcrumb-content">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <div class="breadcrumb-title">
                        <h2 class="title text-white">About Us</h2>
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <ul class="list-unstyled bread-crumb text-md-end">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- bread crumb part end -->

<!-- about us part start -->
<section class="about-us-area-one without-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="about-image position-relative">
                    <div class="image">
                        <img src="{{ asset('frontend/assets/img/about-us/about-us.png') }}" alt="about-us">
                    </div>
                    <div class="active-customer d-flex align-items-center">
                        <div class="icon">
                            <img src="{{ asset('frontend/assets/img/about-us/active-customer-icon.svg') }}" alt="active-customer-icon">
                        </div>
                        <div class="title">
                            <h2 class="number"><span>4</span>k+</h2>
                            <p>Daily Activate Customer</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="about-info ms-4">
                    <div class="section-title-one">
                        <span class="sub-title uppercase">About Us</span>
                        <h2 class="title">INTRODUCTION</h2>
                    </div>
                    <p>INVENTIVE INFRASTRUCTURES CONSULTANT & ENGINEERING emerged as one of the fastest growing companies in Bangladesh. The maiden journey was started having a trade area focusing on stone supply & construction works, which still soaring as the flagship business of the company.INVENTIVE INFRASTRUCTURES CONSULTANT & ENGINEERING was established as Partnership Company in 2021-2022 in the belief that there was a space in the  marketplace for a construction company in customer service and quality of performance as the priority in is operations. Since its commencement INVENTIVE INFRASTRUCTURES CONSULTANT & ENGINEERING has  supplied a huge quantity of stone, sands and other general orders to the clients.INVENTIVE INFRASTRUCTURES CONSULTANT & ENGINEERING actively pursued and maintained its position by always structuring  the company to provide the quality in workmanship, service staff and technology and by consistently updating our systems, encouraging the training and professional development of our People.</p>
                    <div class="about-list">
                        <div class="about-list-items d-flex">
                            <div class="icon">
                                <i class="fas fa-angle-double-right"></i>
                            </div>
                            <div class="text">

                                <p>
                                    INVENTIVE INFRASTRUCTURES CONSULTANT & ENGINEERING is totally focused on its goal of delivering superior and  results in the high end residential and commercial market place. This company attitude is supported  by providing stringent qualification tests on all our suppliers and sub-contractors to ensure that  they too work to our philosophy of quality and service.
                                </p>
                            </div>
                        </div>
                        <div class="about-list-items d-flex">
                            <div class="icon">
                                <i class="fas fa-angle-double-right"></i>
                            </div>
                            <div class="text">

                                <p>
                                    The key reason for INVENTIVE INFRASTRUCTURES CONSULTANT & ENGINEERING notable success is its ability to complete projects in time/ahead schedule and its outstanding performance in quality assurance that  can only be achieved through the dedication of all its workers, engineer and management. These strengths are the source of power that enables it to excel and win goodwill of clients.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about us part end -->

<!-- get updates part start -->
<section class="get-updates-area-one">
    <div class="update-area-bg-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="get-updates-info">
                        <h2 class="text-white">Sign Up For news & Get All Updates</h2>
                        <p class="text-white">It is a long established fact that a reader will be distracted by
                            the</p>
                    </div>
                </div>
                <div class="col-lg-4 ms-auto align-self-center">
                    <div class="contact-info d-flex align-items-center">
                        <div class="icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="text">
                            <h4 class="title">Contact with us</h4>
                            <h3 class="number"><a href="tel:(405)555-0128">(405) 555-0128</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- get updates part end -->

<!-- working process part start -->
<section class="working-process-area-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-6">
                <div class="section-title-one">
                    <span class="sub-title uppercase no-after dark">working process</span>
                    <h2 class="title">Innovation in construction at your service</h2>
                </div>
                <div class="working-process-info">
                    <p>It is a long established fact that a reader will be distracted by the readablejk content
                        of a page when
                        looking at its layout.</p>
                    <a href="blog-classic.html" class="common-btn uppercase">read More <i class="fas fa-plus"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-xl-5 ms-auto">
                <div class="working-process-item-two d-flex justify-content-between align-items-center">
                    <div class="info d-flex align-items-center">
                        <div class="image">
                            <img src="{{ asset('frontend/assets/img/working-process/icon-1.svg') }}" alt="icon-1">
                        </div>
                        <div class="title">
                            <h4>Site Preparation</h4>
                        </div>
                    </div>
                    <div class="number">
                        <h3>01</h3>
                    </div>
                </div>
                <div class="working-process-item-two d-flex justify-content-between align-items-center">
                    <div class="info d-flex align-items-center">
                        <div class="image">
                            <img src="{{ asset('frontend/assets/img/working-process/icon-2.svg') }}" alt="icon-2">
                        </div>
                        <div class="title">
                            <h4>Roofing Installation</h4>
                        </div>
                    </div>
                    <div class="number">
                        <h3>02</h3>
                    </div>
                </div>
                <div class="working-process-item-two d-flex justify-content-between align-items-center">
                    <div class="info d-flex align-items-center">
                        <div class="image">
                            <img src="{{ asset('frontend/assets/img/working-process/icon-3.svg') }}" alt="icon-3">
                        </div>
                        <div class="title">
                            <h4>Flooring Installation</h4>
                        </div>
                    </div>
                    <div class="number">
                        <h3>03</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- working process part end -->

</main>
 @endsection
