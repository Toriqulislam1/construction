@extends('frontend.front_master')
@section('content')
@section('title')
about us
@endsection


<!-- main area part start -->

<main>

    <!-- bread crumb part start -->
    <section class="breadcrumb-area" data-background="{{ asset('frontend/assets/img/bg/bread-crumb-bg.png') }}">
        <div class="container">
            <div class="breadcrumb-content">
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <div class="breadcrumb-title">
                            <h2 class="title text-white">Project Details</h2>
                        </div>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <ul class="list-unstyled bread-crumb text-md-end">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Project Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- bread crumb part end -->

    <!-- project details part start -->
    <section class="project-details-area">
        <div class="container">
            <div class="project-details-thumb-image">
                <img src="{{ asset($projects->details_banner ) }}" alt="project-details-image"
                    class="img-fluid w-100">
                <div class="project-information">
                    <h3 class="project-title">Project Information</h3>
                    <div class="main-content">
                        <div class="info-main">
                            <div class="info-item">
                                <h6 class="info-subtitle">Category:</h6>
                                <p>{{ $projects->category_name  }}</p>
                            </div>
                            <div class="info-item">
                                <h6 class="info-subtitle">Customer:</h6>
                                <p>{{ $projects->customer_name  }}</p>
                            </div>
                            <div class="info-item">
                                <h6 class="info-subtitle">Start date:</h6>
                                <p><p>{{ \Carbon\Carbon::parse($projects->start_date)->format('d F Y') }}</p>
                            </p>
                            </div>
                            <div class="info-item">
                                <h6 class="info-subtitle">End date:</h6>
                                <p>{{ \Carbon\Carbon::parse($projects->end_date)->format('d F Y') }}</p>
                            </div>
                        </div>
                        <div class="rating d-flex justify-content-center align-items-center">
                            <h6 class="rating-title">Rating:</h6>
                            <div class="star">
                                @for($i = 0; $i < $projects->rating; $i++)
                                <i class="fas fa-star"></i>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-details-information">
                <h2 class="project-details-title">{{ $projects->details_title}}</h2>
                <p>{!! $projects->details_title!!}</p>
            </div>
        </div>
    </section>
    <!-- project details part end -->

    <!-- call to action part start -->
    <section class="call-to-action-area">
        <div class="row">
            <div class="col-lg-6">
                <div class="image">
                    <img src="{{ asset('frontend/assets/img/images/call-to-action-image.png') }}" alt="call-to-action-image"
                        class="img-fluid w-100">
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="info">
                    <div class="phone-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <h3 class="text-white title">Need help? Call us Today <a href="tel:+201-555-0124">+201-
                            555-0124</a></h3>
                    <p class="text-white">Lorem Ipsum is simply dummy text of the printing </p>
                </div>
            </div>
        </div>
    </section>
    <!-- call to action part end -->


</main>
<!-- main area part end -->

<!-- scroll top part start -->
<button class="scroll-to-top">
    <i class="fas fa-angle-up"></i>
</button>
<!-- scroll top part end -->






















@endsection

