
@php
    $setting = App\Models\setting::find(1);

@endphp
<!-- header part start -->
<div id="header-fixed-height"></div>
<header class="header-area-one" id="sticky-header">
    <nav class="navbar navbar-expand-lg d-none d-lg-block">
        <div class="container-fluid">
            <a class="navbar-brand me-0" href="{{ url('/') }}">
                <img src="{{ asset($setting->logo) }}" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about-us') }}">About Us</a>
                    </li>
                    {{--  <li class="nav-item">
                        <a class="nav-link" href="#project">Projects</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service">service</i></a>
                    </li>  --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact-us') }}">Contact</a>
                    </li>
                </ul>
                <div class="header-right-info d-flex align-items-center">
                    <div class="social">
                        <ul class="list-unstyled">
                            <li><a href="{{ $setting->facebook  }}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{ $setting->instagram   }}"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="{{ $setting->twitter }}"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="{{ $setting->linkedin   }}"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="help-number d-flex align-items-center">
                        <div class="icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="info">
                            <p>Need help?</p>
                            <h6>
                                <a href="tel:{{ $setting->phone    }}">
                                    {{ $setting->phone }}
                                </a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- mobile navbar part start -->
    <div class="mobile-menu-area d-block d-lg-none">
        <div class="mobile-topbar">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="logo">
                        <img src="{{ asset($setting->logo) }}" alt="logo">
                    </div>
                    <div class="bars">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu-overlay"></div>
        <div class="mobile-menu-main">
            <div class="logo">
                <a href="index.html"><img src="{{ asset($setting->logo) }}" alt="logo"></a>
            </div>
            <div class="close-mobile-menu"><i class="fas fa-times"></i></div>
            <div class="menu-body">
                <div class="menu-list">
                    <ul class="list-unstyled">
                        <li class="sub-mobile-menu">
                            <a href="{{ url('/') }}">Home <i class="fas fa-chevron-down float-end"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about-us') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact-us') }}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="social-icon">
                <ul class="list-unstyled">
                    <li><a href="{{$setting->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="{{$setting->instagram}}"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="{{$setting->twitter}}"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="{{$setting->linkedin }}"><i class="fab fa-instagram"></i></a></li>

                </ul>
            </div>
        </div>
    </div>
    <!-- mobile navbar part end -->
</header>
<!-- header part end -->
