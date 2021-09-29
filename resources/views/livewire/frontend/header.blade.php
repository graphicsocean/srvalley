@php
$settings = App\Models\Setting::first();
@endphp

<header class="main_header_area headerstyle-2">
    <div class="header-content">
        <div class="container">
            <div class="links links-left">
                <ul>
                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> {{ $settings->email }}</a></li>
                    <li><a href="tel:0{{ $settings->phone }}"><i class="fa fa-phone" aria-hidden="true"></i>
                            +91-{{ $settings->phone }}</a>
                    </li>
                </ul>
            </div>
            <div class="links links-right pull-right">
                <li>
                    <ul class="social-links">
                        <li><a href="{{ $settings->fb_link }}"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="{{ $settings->insta_link }}"><i class="fab fa-instagram"
                                    aria-hidden="true"></i></a></li>
                        <li><a href="{{ $settings->gbiz_link }}"><i class="fa fa-map" aria-hidden="true"></i></a></li>
                    </ul>
                </li>
            </div>
        </div>
    </div>
    <!-- Navigation Bar -->
    <div class="header_menu affix-top">
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img alt="Image" src="{{ asset('ui/images/logo.png') }}" class="logo-black">
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav" id="responsive-menu">
                        <li class=" submenu dropdown active"><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        <li><a href="{{ route('gallery') }}">Gallery</a></li>
                        <li class="submenu dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Banquet's<i class="fa fa-angle-down"
                                    aria-hidden="true"></i></a>
                            {{-- {{ $navigation}} --}}
                            <ul class="dropdown-menu">
                                @foreach ($navigation as $item)
                                    <li><a href="{{ url('banquet/' . $item->slug) }}">{{ $item->name }}</a></li>
                                @endforeach
                                <li><a href="{{ url('banquet/gagansha-wedding') }}">Gagansha Wedding</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="nav-btn">
                        <a href="tel:0{{ $settings->phone }}" class="btn btn-orange"> Book Now <i
                                class="fas fa-angle-double-right"></i></a>
                    </div>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
            <div id="slicknav-mobile"></div>
        </nav>
    </div>
    <!-- Navigation Bar Ends -->
</header>

<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
</div>
