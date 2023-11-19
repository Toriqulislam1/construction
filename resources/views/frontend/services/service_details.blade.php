@extends('frontend.front_master')
@section('content')

@section('title')
Service Details
@endsection

<!-- bread crumb part start -->
<section class="breadcrumb-area" data-background="assets/img/bg/bread-crumb-bg.png">
    <div class="container">
        <div class="breadcrumb-content">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <div class="breadcrumb-title">
                        <h2 class="title text-white">Service Details</h2>
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <ul class="list-unstyled bread-crumb text-md-end">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Service Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- bread crumb part end -->


<!-- service details part start -->
<section class="service-details-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-details-content">
                    <div class="service-details-image">
                        <img src="{{ asset($services->breadcrumb) }}" alt="service-details-image"
                            class="img-fluid w-100">
                    </div>
                    <h2 class="service-details-title">{{ $services->content_title }}</h2>
                    <p>
                        {!! $services->long_descrip !!}
                    </p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="service-right-sidebar">
                    <div class="project-title-info">
                        <h3 class="service-sidebar-title">The project is start</h3>
                        <p class="sub-title">Planing, Real Estate</p>
                        <p>Aliquam eros justo, posuere loborti vive rra laoreet matti ullamc orper poviverra
                            Aliquam eros justo,
                            posuere </p>
                    </div>

                    <div class="project-block">
                        <h6 class="title">Big project</h6>
                        <p>Aliquam eros justo, posuere loboa et matti ullamcorper posuere viverra.</p>
                        <ul class="list-unstyled list-info">
                            <li><i class="far fa-check-circle"></i>
                                Mistakes To Avoid to dum Aliquam.</li>
                            <li><i class="far fa-check-circle"></i>
                                Your Startup industry stan Aliquam </li>
                            <li><i class="far fa-check-circle"></i>
                                Knew About Fonts text posuere</li>
                        </ul>
                        <a href="contact.html" class="request-service-btn uppercaser">Request service</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service details part end -->

@endsection
