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
                        <h3 class="service-sidebar-title">{{ $services->detail_short_title }}</h3>
                        <p class="sub-title">{{ $services->category_name}}</p>
                        <p>{{ $services->detail_short_desc   }} </p>
                    </div>

                    <div class="project-block">
                        <h6 class="title">{{ $services->detail_project_name   }}</h6>
                        <p>{{ $services->detail_project_desc}}</p>
                        <a href="{{ route('contact-us') }}" class="request-service-btn uppercaser">Request service</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service details part end -->

@endsection
