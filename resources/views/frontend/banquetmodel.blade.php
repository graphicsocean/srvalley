@extends('frontend.app')
@section('title', 'Banquet ' . $name)
@section('content')
    @livewire('frontend.breadcrumb', ['title' => 'banquet '.$name])
    <!-- details starts-->
    <section class="details">
        <div class="container">
            <div class="detail-slider">
                <div class="slider-1 slider-for">
                    <div class="detail-slider-item">
                        <img src="{{ asset('ui/images/detail-slider/'.$name.'.webp') }}" alt="image">
                    </div>
                    <div class="detail-slider-item">
                        <img src="{{ asset('ui/images/detail-slider/'.$name.'.webp') }}" alt="image">
                    </div>
                </div>
                <div class="slider-1 slider-nav">
                    <div class="detail-slider-item">
                        <img src="{{ asset('ui/images/detail-slider/'.$name.'.webp') }}" alt="image">
                    </div>
                    <div class="detail-slider-item">
                        <img src="{{ asset('ui/images/detail-slider/'.$name.'.webp') }}" alt="image">
                    </div>
                </div>
            </div>
            <div class="detail-content">
                <div class="detail-title">
                    <div class="title-left">
                        <h3>banquet {{ $name }}</h3>
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
                            <h3>$1200<span>/Night</span></h3>
                        </div>
                    </div>
                </div>
                <div class="detail-overview">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="overview-outer">
                                <div class="overview-content mar-bottom-30">
                                    <h4>Overview</h4>
                                    <p> full AC banquet hall covered with an area of - 12000 sq ft with 2 AC king room and a
                                        guest capacity of 800 at a time</p>
                                </div>
                                <div class="price-table ">
                                    <h4>Price and Rates(/Night)</h4>
                                    <table class="table table-bordered mar-0">
                                        <thead>
                                            <tr>
                                                <td>Sun</td>
                                                <td>Mon</td>
                                                <td>Tues</td>
                                                <td>Wed</td>
                                                <td>Thurs</td>
                                                <td>Fri</td>
                                                <td>Sat</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>$1200</td>
                                                <td>$1200</td>
                                                <td>$1200</td>
                                                <td>$1200</td>
                                                <td>$1200</td>
                                                <td>$1200</td>
                                                <td>$1200</td>
                                            </tr>
                                        </tbody>
                                    </table>
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
    @livewire('frontend.explore-banquate')
    <!-- related rooms Ends -->
@endsection
