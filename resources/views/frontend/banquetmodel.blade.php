@extends('frontend.app')
@section('title', 'Banquet ' . $banquet->name)
@section('content')
    @livewire('frontend.breadcrumb', ['title' => 'banquet '.$banquet->slug])
    <!-- details starts-->
    <section class="details">
        <div class="container">
            <div class="detail-slider">
                <div class="slider-1 slider-for">
                    @foreach ($sliders as $slider)
                        <div class="detail-slider-item">
                            <img src="{{ asset('ui/images/detail-slider/'. $banquet->slider->path) }}" alt="{{$banquet->name}}">
                        </div>
                    @endforeach
                </div>
                <div class="slider-1 slider-nav">
                    @foreach ($sliders as $slider)
                        <div class="detail-slider-item">
                            <img src="{{ asset('ui/images/detail-slider/'. $banquet->slider->path) }}" alt="{{$banquet->name}}">
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="detail-content">
                <div class="detail-title">
                    <div class="title-left">
                        <h3>{{ $banquet->name }}</h3>
                        <div class="rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                    </div>
                    <div class="title-right pull-right">
                        <ul>
                            <li class="facebook"><i class="fab fa-facebook"></i></li>
                            <li class="twitter"><i class="fab fa-twitter"></i></li>
                            <li class="linkedin"><i class="fab fa-linkedin"></i></li>
                            <li class="pinterest"><i class="fab fa-pinterest"></i></li>
                        </ul>
                        <div class="title-price">
                            <h3>₹ {{$banquet->price}}<span>/Night</span></h3>
                        </div>
                    </div>
                </div>
                <div class="detail-overview">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="overview-outer">
                                <div class="overview-content mar-bottom-30">
                                    <h4>Overview</h4>
                                    <p>{!!html_entity_decode($banquet->overview)!!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="overwiew-map">
                                <div id="map" style="height: 357px; width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- details Ends-->

    <!-- amenities starts -->
    @livewire('frontend.amenities')
    @livewire('frontend.services')
    <!-- amenities Ends -->

    <!-- detail features starts-->
    {{-- <section class="detail-features">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="feature-item">
                    <div class="feature-image">
                        <img src="{{ asset('ui/images/feature1.jpg') }}" alt="image">
                    </div>
                    <div class="feature-content">
                        <img src="{{ asset('ui/images/icons/ficon1.png') }}" alt="image">
                        <h4><a href="#" class="white">Fitness club</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="feature-item">
                    <div class="feature-image">
                        <img src="{{ asset('ui/images/feature2.jpg') }}" alt="image">
                    </div>
                    <div class="feature-content">
                        <img src="{{ asset('ui/images/icons/ficon2.png') }}" alt="image">
                        <h4><a href="#" class="white">Private Beach</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="feature-item">
                    <div class="feature-image">
                        <img src="{{ asset('ui/images/feature3.jpg') }}" alt="image">
                    </div>
                    <div class="feature-content">
                        <img src="{{ asset('ui/images/icons/ficon3.png') }}" alt="image">
                        <h4><a href="#" class="white">Bicycle Hire</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="feature-item">
                    <div class="feature-image">
                        <img src="{{ asset('ui/images/feature4.jpg') }}" alt="image">
                    </div>
                    <div class="feature-content">
                        <img src="{{ asset('ui/images/icons/ficon4.png') }}" alt="image">
                        <h4><a href="#" class="white">Restaurant</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- detail features Ends-->

    <!-- related rooms starts -->
    @livewire('frontend.explore-banquate',['banquets'=>$banquets])
    <!-- related rooms Ends -->
@endsection
