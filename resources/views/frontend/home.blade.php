@extends('frontend.app')
@section('title', 'Home')
@section('content')
    <!-- banner starts -->
    <section class="banner">
        <div class="slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image:url(ui/images/slider/slider10.jpg)">
                        <div class="swiper-content">
                            <div class="slider-logo">
                                <img src="{{ asset('ui/images/icons/bed-logo.png') }}" alt="Image">
                            </div>
                            <h3 data-animation="animated fadeInUp">Room Availability Checker & Booking</h3>
                            <h1 data-animation="animated fadeInUp">Book Early <span>Save</span>More</h1>
                            <a href="#" data-animation="animated fadeInUp" class="slider-btn btn-or mar-right-10">Explore Our
                                Rooms</a>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image:url(ui/images/slider/slider11.jpg)">
                        <div class="swiper-content">
                            <div class="slider-logo">
                                <img src="{{ asset('ui/images/icons/bed-logo.png') }}" alt="Image">
                            </div>
                            <h3 data-animation="animated fadeInUp">The lap of Luxury</h3>
                            <h1 data-animation="animated fadeInUp">Quality <span>Holiday</span> With Us</h1>
                            <a href="#" data-animation="animated fadeInUp" class="slider-btn btn-or">Book A Room Now</a>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image:url(ui/images/slider/slider3.jpg)">
                        <div class="swiper-content">
                            <div class="slider-logo">
                                <img src="{{ asset('ui/images/icons/bed-logo.png') }}" alt="Image">
                            </div>
                            <h3 data-animation="animated fadeInUp">As We Like to Keep It That Way</h3>
                            <h1 data-animation="animated fadeInUp">A <span>Five Star</span> Hotel</h1>
                            <a href="#" data-animation="animated fadeInUp" class="slider-btn btn-or mar-right-10">Explore
                                Our Rooms</a>
                            <a href="#" data-animation="animated fadeInUp" class="slider-btn btn-wt">Book A Room Now</a>
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
            <div class="overlay"></div>
        </div>
    </section>
    <!-- banner Ends -->

    <!-- About Us Start -->
    <section class="about-us">
        <div class="container">
            <div class="section-title">
                <h2>About <span>Us</span></h2>
                <p></p>
            </div>
            <div class="about-outer">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-content">
                            <h3 class="mar-bottom-30">Finest and Luxurious Venue in the Town</h3>
                            <p>When words fail, senses speak. Truly leaving you speechless, SR Valley Wedding Venue,
                                Bhubaneswar gets as bigger, better, and grander as you can imagine! Located on New Bypass
                                Road this venue is situated near Janani Hospital and 38 minutes away from Bhubaneswar
                                Railway Station. Home to a couple of sprawling lawns and a splendid banquet hall, SR Valley
                                Wedding Venue, Bhubaneswar is straight out of a dream and is sure to mesmerize you with its
                                beauty and splendor!</p>
                            <p>The sprawling lawn at SR Valley Wedding Venue, Baragarh, Bhubaneswar is fit for a regal
                                reception or a lavish celebration. Surrounded by trees and green covers, the lawn can
                                accommodate a large number of guests over thousands comfortably. The banquet hall is no
                                less. Boasting an enchanting ambiance of beautiful lights, pastel adorned walls, and magical
                                vibes, the hall is best suited for cocktail parties, engagement ceremonies, and close-knit
                                weddings. Bringing the choicest decor, catering, and hospitality facilities, this ethereal
                                venue also gives you the liberty to outsource these services. SR Valley Wedding Venue,
                                Bhubaneswar, is perfect for those seeking a larger than life experience in an exotic
                                ambiance.</p>
                            <a class="btn btn-orange mar-top-10">KNOW MORE ABOUT US <i
                                    class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-image">
                            <div class="image-box">
                                <div class="image-1 abt-image">
                                    <img src="{{ asset('ui/images/1.webp') }}" alt="image">
                                </div>
                                <div class="image-2 abt-image">
                                    <img src="{{ asset('ui/images/2.webp') }}" alt="image">
                                </div>
                            </div>
                            <div class="image-box">
                                <div class="image-3 abt-image">
                                    <img src="{{ asset('ui/images/3.webp') }}" alt="image">
                                </div>
                                <div class="image-4 abt-image">
                                    <img src="{{ asset('ui/images/4.webp') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Ends -->


    <!--  Banquate starts -->
   @livewire('frontend.explore-banquate')
    <!-- Banquate Ends -->

    {{-- Sound Proof Alcohol Served Air Conditioned Linens Provided Parking Available Audio-Visual Systems Changing Room Available Drinking Water Provided Catering Services Offered Chairs and Tables Provided Audio-Visual Managing Staff Support and Cleaning Crew Provided Elderly and Physically Disabled Friendly --}}
    <!-- Call To Action Starts 20% off-->
    @livewire('frontend.amenities')
    <!-- Call To Action Ends -->

    <!-- Services Starts -->
    <section class="services service-style-3">
        <div class="container">
            <div class="section-title">
                <h2>Explore <span>Services</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex neque, sodales accumsan sapien et,
                    auctor vulputate quam donec vitae consectetur turpis</p>
            </div>
            <div class="service-outer">
                <div class="service-item mar-bottom-20">
                    <div class="display-flex">
                        <div class="service-image">
                            <img src="{{ asset('ui/images/feature1.jpg') }}" alt="Image">
                        </div>
                        <div class="service-detail pad-left-30">
                            <h3><a href="service-detail.html">Catering  & <span>Cleaning</span></a></h3>
                            <p>Excepteur sint occaecat cupidatat non proident sunt culpa qui officia deserunt mollit anim id
                                est laborum sed ut perspiciatis unde omnis natus error.Inventore veritatis et quasi archite
                                beatae vitae dicta.</p>
                        </div>
                    </div>
                </div>

                <div class="service-item mar-bottom-20">
                    <div class="display-flex">

                        <div class="service-detail pad-right-30 text-right">
                            <h3><a href="service-detail.html">Venue <span>Decorators</span></a></h3>
                            <p>Excepteur sint occaecat cupidatat non proident sunt culpa qui officia deserunt mollit anim id
                                est laborum sed ut perspiciatis unde omnis natus error.Inventore veritatis et quasi archite
                                beatae vitae dicta.</p>
                        </div>
                        <div class="service-image">
                            <img src="{{ asset('ui/images/feature2.jpg') }}" alt="Image">
                        </div>
                    </div>
                </div>

                <div class="service-item">
                    <div class="display-flex">
                        <div class="service-image">
                            <img src="{{ asset('ui/images/feature5.jpg') }}" alt="Image">
                        </div>
                        <div class="service-detail pad-left-30">
                            <h3><a href="service-detail.html">Wedding <span>Planners</span></a></h3>
                            <p>Excepteur sint occaecat cupidatat non proident sunt culpa qui officia deserunt mollit anim id
                                est laborum sed ut perspiciatis unde omnis natus error.Inventore veritatis et quasi archite
                                beatae vitae dicta.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Ends -->

    <!-- menu Starts -->
    <section class="menu gallery">
        <div class="container">
            <div class="section-title title-white">
                <h2><span>Food</span> packages</h2>
            </div>
            <div class="menu-outer" data-ref="container-1">
                {{-- <div class="row">
                    <div class="col-lg-12">
                        <div class="mt_filter mar-bottom-50">
                            <ul class="list-inline text-center filter">
                                <li class="active"><a href="#" data-filter="*">All</a></li>
                                <li><a href="#" data-filter=".breakfast">Breakfast</a></li>
                                <li><a href="#" data-filter=".lunch">Lunch</a></li>
                                <li><a href="#" data-filter=".drink">Drink</a></li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
                <div class="isotopeContainer">
                    <div class="row isotopeSelector breakfast ">
                        <div class="col-lg-6">
                            <div class="menu-content">
                                <h3 style="color: rgb(0, 250, 62)">Vegetarian</h3>
                            </div>
                            <div class="menu-item">
                                <div class="menu-image">
                                    <img src="{{ asset('ui/images/menu/menu2.jpg') }}" alt="image">
                                </div>
                                <div class="menu-content">
                                    <h4>Welcome Drinks</h4>
                                    {{-- <span> 2 /plate </span> --}}
                                    <p>Welcome Drinks </p>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="menu-image">
                                    <img src="{{ asset('ui/images/menu/menu2.jpg') }}" alt="image">
                                </div>
                                <div class="menu-content">
                                    <h4>Veg Starter</h4>
                                    {{-- <span> 2 /plate </span> --}}
                                    <p>Veg Starter </p>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="menu-image">
                                    <img src="{{ asset('ui/images/menu/menu2.jpg') }}" alt="image">
                                </div>
                                <div class="menu-content">
                                    <h4>Non-Veg Starter</h4>
                                    {{-- <span> 2 /plate </span> --}}
                                    <p>Non-Veg Starter</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="menu-content">
                                <h3 style="color: rgb(255, 47, 47)">Non Vegetarian</h3>
                            </div>
                            <div class="menu-item">
                                <div class="menu-image">
                                    <img src="{{ asset('ui/images/menu/menu2.jpg') }}" alt="image">
                                </div>
                                <div class="menu-content">
                                    <h4>Welcome Drinks</h4>
                                    {{-- <span> 2 /plate </span> --}}
                                    <p>Welcome Drinks </p>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="menu-image">
                                    <img src="{{ asset('ui/images/menu/menu2.jpg') }}" alt="image">
                                </div>
                                <div class="menu-content">
                                    <h4>Non-Veg Starter</h4>
                                    {{-- <span> 2 /plate </span> --}}
                                    <p>Non-Veg Starter </p>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="menu-image">
                                    <img src="{{ asset('ui/images/menu/menu2.jpg') }}" alt="image">
                                </div>
                                <div class="menu-content">
                                    <h4>Veg Main Courses</h4>
                                    {{-- <span> 2 /plate </span> --}}
                                    <p>Veg Main Courses </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
    </section>
    <!-- menu Ends -->

    <!-- Reviews Starts -->
    <section class="reviews reviews-style-1 reviews-style-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <div class="section-title title-white mar-0 pad-top-60">
                        <h4 class="white">What People Says</h4>
                        <h2>Happy Explore <span>Reviews</span></h2>
                        <p class="mar-bottom-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex neque,
                            sodales accumsan sapien et, auctor vulputate quam donec vitae consectetur turpis</p>
                        <a href="testimonial.html" class="btn btn-orange">View More</a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="review-slider1">
                        <div class="slider-item text-center">
                            <div class="slider-image">
                                <img src="{{ asset('ui/images/review1.jpg') }}" alt="image">
                            </div>
                            <div class="slider-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod tortor vitae nisi
                                    pharetra egestas. Sed egestas sapien libero.</p>
                                <h4>Micheal Clordy</h4>
                                <span>Germany</span>
                            </div>
                            <div class="slider-quote">
                                <img src="{{ asset('ui/images/icons/quote.png') }}" alt="Image">
                            </div>
                        </div>
                        <div class="slider-item text-center">
                            <div class="slider-image">
                                <img src="{{ asset('ui/images/review2.jpg') }}" alt="image">
                            </div>
                            <div class="slider-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod tortor vitae nisi
                                    pharetra egestas. Sed egestas sapien libero.</p>
                                <h4>Ketty Perry</h4>
                                <span>Australia</span>
                            </div>
                            <div class="slider-quote">
                                <img src="{{ asset('ui/images/icons/quote.png') }}" alt="Image">
                            </div>
                        </div>
                        <div class="slider-item text-center">
                            <div class="slider-image">
                                <img src="{{ asset('ui/images/review1.jpg') }}" alt="image">
                            </div>
                            <div class="slider-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod tortor vitae nisi
                                    pharetra egestas. Sed egestas sapien libero.</p>
                                <h4>Micheal Clordy</h4>
                                <span>Germany</span>
                            </div>
                            <div class="slider-quote">
                                <img src="{{ asset('ui/images/icons/quote.png') }}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Reviews Ends -->

    <!-- Call To Action Starts -->
    <section class="call-to-action call-to-action-new">
        <div class="container">
            <div class="call-content text-center">
                <div class="call-button">
                    <button type="button" class="play-btn js-video-button" data-video-id="aqz-KE-bpKQ"><i
                            class="fa fa-play"></i></button>
                </div>
                <div class="video-figure"></div>
                <h2 class="white mar-top-25 mar-bottom-0">virtual Tour of a brand <br><span>Hotux</span> hotel</h2>
            </div>
        </div>
    </section>
    <!-- Call To Action Ends -->


@endsection
