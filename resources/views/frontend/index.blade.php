@extends('frontend.front_master')
@section('content')
@section('title')

@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<main>

    <!-- banner part start -->
    <section class="banner-area-one" data-background="assets/img/bg/banner-bg.png">
        <svg class="banner-shape" viewBox="0 0 1056 979" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path class="primary-colour" d="M1197.56 1040L103.744 1040L231.189 818.024L266.474 755.955L327.563 862.735L763.09 862.735L981.643 481.904L764.143 101.074L641.964 101.074L716.746 -29.3763L776.255 -133L1197.56 -133L1197.56 1040Z" />
            <path class="primary-colour" d="M206 869L649.304 89H773.856L995 479.513L777.415 869H206Z" />
            <path class="black-colour" d="M647.5 92H321L160.5 373.5L310.5 685.5L647.5 92Z" />
            <path class="black-colour" d="M165.887 383.537L133.762 327.254L132.183 324.624L131.656 323.572L195.905 211.006L334.41 -29.9063L338.096 -29.9063L582.454 -29.3802L716.746 -29.3802L641.964 101.07L626.165 101.07L347.576 101.07L328.09 101.07L165.887 383.537Z" />
            <path class="primary-colour" d="M66.8821 1040L-0.000391173 1040L127.445 818.023L193.801 818.023L66.8821 1040Z" />
            <path class="black-colour" d="M460.277 1040L103.746 1040L282.275 728.602L460.277 1040Z" />
        </svg>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-info">
                        <span class="sub-title uppercase wow fadeInLeft" data-wow-delay=".2s">Inventive Infrastructures Consultants & Engineering</span>
                        <h2 class="banner-title wow fadeInLeft" data-wow-delay=".4s">Importer, 1st Class Contractor & Supplier</h2>
                        <h6 class="banner-title wow fadeInLeft" data-wow-delay=".4s">TO WHOM IT MAY CONCERN</h6>
                        <p class="wow fadeInLeft" data-wow-delay=".6s">We, Inventive Infrastructures Consultants & Engineering, are pleased to associate for the supplying of stone, sand and any kind of general order. Inventive Infrastructures Consultants & Engineering emerged as one of
                            fastest growing trading companies in Bangladesh. The maiden journey was started having a trade area
                            focusing on stone supply & construction works, which is still soaring as the flagship business of the
                            Company. Inventive Infrastructures Consultants & Engineering was established as Partnership Company in 2022, in the belief that there was a space in the marketplace for a construction company that offered customer service and quality of performance as the priority in its operations. Since its commencement Inventive Infrastructures Consultants & Engineering has supplied a hugs quantity of stone, sand and other general order to the client. We hope, you will find our credentials in line with your requirement for this project. We are confident that we would deliver the high quality of services that you require. We shall be happy to submit further information as you may require.
                            <br>
                            You’re sincerely,<br>
                            For Inventive Infrastructures Consultants & Engineering<br>

                            Engr.Nafiul Islam<br>
                            Proprietor
                             </p>
                        <a href="{{ route('about-us') }}" class="common-btn uppercase wow fadeInLeft"
                            data-wow-delay=".8s">read More <i class="fas fa-plus"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="banner-image">
                        <img src="{{ asset('frontend/assets/img/banner/banner-image.png') }}" alt="banner-image" class="img-fluid w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part end -->
    <!-- about us part start -->
    <section class="about-us-area-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-6 col-xxl-5">
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
                <div class="col-lg-6 col-xl-6 col-xxl-7">
                    <div class="about-info ms-4">
                        <div class="section-title-one">
                            {{--  <span class="sub-title uppercase">About Us</span>  --}}
                            <h2 class="title">Inventive Infrastructures Consultants & Engineering</h2>
                            <span class="title">Importer, 1st Class Contractor & Supplier</span>
                        </div>
                        <p> Inventive Infrastructures Consultants & Engineering. was formed in 2022 with the objective of making a  border base and platform to fill up, as far as possible, the vacuums in the field of sophisticated  engineering constructions and two assists the country to forge ahead with its ambitious gigantic  development program. Initially the company was focusing more on the trading of stone, sands and any kind of general orders but for last 1.5 years Inventive Infrastructures Consultants & Engineering is doing construction projects (as main and sub-contractor) under various departments of Government of  Bangladesh, where exceptional service and quality is rewarded and where the client not only can be completely happy with their project but also enjoy delivering a project on time and many cases much before the completion date. Inventive Infrastructures Consultants & Engineering actively pursued and maintained its position by always structuring the company to provide the quality in workmanship, service, staff and technology and by consistently updating our system, encouraging  the training and professional development of our people. Inventive Infrastructures Consultants & Engineering is totally focused on its goal of delivering service and  result in the high end residential and commercial market places. This company attitude is supported by providing stringent qualification tests on all our supplier and sub-contractors to ensure that they too work to our philosophy of quality and service.

                        </p>
                        <div class="about-list">
                            <div class="about-list-items d-flex">
                                <div class="icon">
                                    <i class="fas fa-angle-double-right"></i>
                                </div>
                                <div class="text">
                                    <h4 class="title">Roof Repair</h4>
                                    <p>It is a long established fact that a reader will distracted by the readablejk
                                        content of a page
                                        when looking at its layout.</p>
                                </div>
                            </div>
                            <div class="about-list-items d-flex">
                                <div class="icon">
                                    <i class="fas fa-angle-double-right"></i>
                                </div>
                                <div class="text">
                                    <h4 class="title">Plumbing Installation</h4>
                                    <p>It is a long established fact that a reader will distracted by the readablejk
                                        content of a page
                                        when looking at its layout.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us part end -->

    @php
    $services = App\Models\Services::where('status',1)->orderBy('id','DESC')->limit(8)->get();
    @endphp


    <!-- our services part start -->
    <section class="services-area-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title-one">
                        <span class="sub-title uppercase no-after dark wow fadeInLeft" data-wow-delay=".2s">our
                            services</span>
                        <h2 class="title wow fadeInLeft" data-wow-delay=".4s">Constructing excellence delivering
                            results</h2>
                    </div>
                </div>
                <div class="col-lg-6 ms-auto align-self-center">
                    <div class="service-summery wow fadeInRight" data-wow-delay=".2s">
                        <p>It is a long established fact that a reader will be distracted by the It is a long
                            established fact
                            that a reader will be distracted by the It is a long established fact that a reader will
                            be</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 mx-auto mx-lg-0 col-lg-12 service-item-one-column">
                    <div class="service-item-one">



                        <div class="row">
                            <div class="col-sm-12 col-lg-3 col-xl-3 align-self-center">
                                <div class="image">
                                    <a href="service-details.html" class="d-block w-100">
                                        <img src="{{ asset('frontend/assets/img/services/service-1.png') }}" alt="service-1"
                                            class="img-fluid w-100">
                                    </a>
                                </div>
                            </div>

                            <div class="col-sm-12 col-lg-3 col-xl-3 align-self-center">
                                <div class="service-title ms-lg-4">
                                    <h4 class="title">
                                        <a href="service-details.html">Electrical Wiring</a>
                                    </h4>
                                </div>
                            </div>

                            <div class="col-sm-12 col-lg-3 col-xl-3 align-self-center">
                                <div class="description">
                                    <p>It is a long established fact that a reader will be distracted by the</p>
                                </div>
                            </div>

                            <div class="col-sm-12 col-lg-3 col-xl-2 ms-auto align-self-center">
                                <div class="read-more text-lg-end">
                                    <a href="#" class="common-btn uppercase border-btn">read More
                                        <i class="fas fa-plus"></i></a>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
                <div class="col-sm-6 mx-auto mx-lg-0 col-lg-12 service-item-one-column">
                    <div class="service-item-one">
                        <div class="row">

                            <div class="col-sm-12 col-lg-3 col-xl-3 align-self-center">
                                <div class="image">
                                    <a href="service-details.html" class="d-block w-100">
                                        <img src="{{ asset('frontend/assets/img/services/service-2.png') }}" alt="service-2"
                                            class="img-fluid w-100">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-3 col-xl-3 align-self-center">
                                <div class="service-title ms-lg-4">
                                    <h4 class="title">
                                        <a href="service-details.html">Flooring Installation</a>
                                    </h4>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-3 col-xl-3 align-self-center">
                                <div class="description">
                                    <p>It is a long established fact that a reader will be distracted by the</p>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-3 col-xl-2 ms-auto align-self-center">
                                <div class="read-more text-lg-end">
                                    <a href="" class="common-btn uppercase border-btn">read More
                                        <i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mx-auto mx-lg-0 col-lg-12 service-item-one-column">
                    <div class="service-item-one">
                        <div class="row">
                            <div class="col-sm-12 col-lg-3 col-xl-3 align-self-center">
                                <div class="image">
                                    <a href="service-details.html" class="d-block w-100">
                                        <img src="{{ asset('frontend/assets/img/services/service-3.png') }}" alt="service-3"
                                            class="img-fluid w-100">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-3 col-xl-3 align-self-center">
                                <div class="service-title ms-lg-4">
                                    <h4 class="title">
                                        <a href="service-details.html">Fence Repair</a>
                                    </h4>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-3 col-xl-3 align-self-center">
                                <div class="description">
                                    <p>It is a long established fact that a reader will be distracted by the</p>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-3 col-xl-2 ms-auto align-self-center">
                                <div class="read-more text-lg-end">
                                    <a href="service-details.html" class="common-btn uppercase border-btn">read More
                                        <i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our services part end -->

    <!-- recent work part start -->
    <section class="recent-work-area-one">
        <div class="recent-work-one-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-md-8 col-lg-6">
                        <div class="section-title-one">
                            <span class="sub-title uppercase wow fadeInUp" data-wow-delay=".2s">recent work</span>
                            <h2 class="title text-white wow fadeInUp" data-wow-delay=".4s">Building strong
                                foundations for success</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row recent-work-slider-one">
                    <div class="col-lg-4">
                        <div class="project-item-one position-relative">
                            <div class="image">
                                <a href="project-details.html" class="d-block w-100">
                                    <img src="{{ asset('frontend/assets/img/works/work-1.png') }}" alt="work-1" class="img-fluid w-100">
                                </a>
                            </div>
                            <div
                                class="info position-absolute bottom-0 start-0 w-100 d-flex justify-content-between align-items-center">
                                <div class="text">
                                    <h4 class="title">
                                        <a href="project-details.html">Concrete Repair</a>
                                    </h4>
                                    <p>Lorem Ipsum is simply dummy</p>
                                </div>
                                <div class="plus">
                                    <a href="project-details.html"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="project-item-one position-relative">
                            <div class="image">
                                <a href="project-details.html" class="d-block w-100">
                                    <img src="{{ asset('frontend/assets/img/works/work-2.png') }}" alt="work-2" class="img-fluid w-100">
                                </a>
                            </div>
                            <div
                                class="info position-absolute bottom-0 start-0 w-100 d-flex justify-content-between align-items-center">
                                <div class="text">
                                    <h4 class="title">
                                        <a href="project-details.html">Concrete Repair</a>
                                    </h4>
                                    <p>Lorem Ipsum is simply dummy</p>
                                </div>
                                <div class="plus">
                                    <a href="project-details.html"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="project-item-one position-relative">
                            <div class="image">
                                <a href="project-details.html" class="d-block w-100">
                                    <img src="{{ asset('frontend/assets/img/works/work-3.png') }}" alt="work-3" class="img-fluid w-100">
                                </a>
                            </div>
                            <div
                                class="info position-absolute bottom-0 start-0 w-100 d-flex justify-content-between align-items-center">
                                <div class="text">
                                    <h4 class="title">
                                        <a href="project-details.html">Concrete Repair</a>
                                    </h4>
                                    <p>Lorem Ipsum is simply dummy</p>
                                </div>
                                <div class="plus">
                                    <a href="project-details.html"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="project-item-one position-relative">
                            <div class="image">
                                <a href="project-details.html" class="d-block w-100">
                                    <img src="{{ asset('frontend/assets/img/works/work-1.png') }}" alt="work-1" class="img-fluid w-100">
                                </a>
                            </div>
                            <div
                                class="info position-absolute bottom-0 start-0 w-100 d-flex justify-content-between align-items-center">
                                <div class="text">
                                    <h4 class="title">
                                        <a href="project-details.html">Concrete Repair</a>
                                    </h4>
                                    <p>Lorem Ipsum is simply dummy</p>
                                </div>
                                <div class="plus">
                                    <a href="project-details.html"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- recent work part end -->


    <!-- get updates part start -->
    <section class="get-updates-area-one">
        <div class="update-area-bg-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-xl-4">
                        <div class="get-updates-info">
                            <h2 class="text-white title">Sign Up For news & Get All Updates</h2>
                            <p class="text-white">It is a long established fact that a reader will be distracted by
                                the</p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-4 ms-auto align-self-center">
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
                <div class="col-lg-6">
                    <div class="section-title-one">
                        <span class="sub-title uppercase no-after dark">working process</span>
                        <h2 class="title">Innovation in construction at your service</h2>
                    </div>
                    <div class="working-process-info">
                        <p>It is a long established fact that a reader will be distracted by the readablejk content
                            of a page when
                            looking at its layout.</p>
                        <a href="about-us.html" class="common-btn uppercase">read More <i class="fas fa-plus"></i></a>
                    </div>
                </div>
                <div class="col-lg-5 ms-auto">
                    <div class="working-process-item d-flex justify-content-between align-items-center">
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
                    <div class="working-process-item d-flex justify-content-between align-items-center">
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
                    <div class="working-process-item d-flex justify-content-between align-items-center">
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
    <!-- team details part start -->
    <section class="team-details-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-image">
                        <img src="{{ asset('frontend/assets/img/employees/team-details-image.png') }}" alt="team-details-image"
                            class="img-fluid w-100">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="team-details">
                        <h2 class="title">Donrilos Starmina</h2>
                        <p class="designation"> -Graphics designer</p>
                        <div class="description">
                            <p>Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra
                                .Aliquam eros
                                justo, posuere lobortis, viverra laoreet augue mattis fermentum ullamcorper viverra
                                laoreet Aliquam
                                eros
                                justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra Aliquam</p>
                            <div class="team-info-block">
                                <div class="info-item">
                                    <h6 class="info-title">Email address</h6>
                                    <p>Yourneed@domingmail.com</p>
                                </div>
                                <div class="info-item">
                                    <h6 class="info-title">Phone number</h6>
                                    <p>+00-21-3569-754</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
    <!-- team details part end -->

    <!-- messages area start -->
    <section class="messages-area-one">
        <div class="messages-area-one-bg">
            <div class="container">
                <div class="messages-area-one-main">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="image pe-3">
                                <img src="{{ asset('frontend/assets/img/messages/messages-image.png') }}" alt="messages-image"
                                    class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-center">
                            <div class="text">
                                <div class="section-title-one">
                                    <span class="sub-title uppercase white">talk with us</span>
                                    <h2 class="title white">Building with passion precision and pride</h2>
                                </div>
                                <div class="messages-box">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="input-group">
                                                    <input type="text" placeholder="Your Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="input-group">
                                                    <input type="text" placeholder="Your Email">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="input-group">
                                                    <input type="text" placeholder="Phone Number">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="input-group">
                                                    <select>
                                                        <option selected>Choose a Option</option>
                                                        <option value="">Mymensingh</option>
                                                        <option value="">Dhaka</option>
                                                        <option value="">Khulna</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="input-group">
                                                    <textarea rows="4" placeholder="Message here.."></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <button type="submit" class="submit-btn uppercase">Send Now</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- messages area end -->


</main>


@endsection