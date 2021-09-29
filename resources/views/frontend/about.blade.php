@extends('frontend.app')
@section('title', ' About us')
@section('content')
    @livewire('frontend.breadcrumb', ['title' => 'about us'])
    <!-- about starts -->
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="about-para mar-top-50">
                        <h3>About SR valley</h3>
                        <h4>Pick a Banquet that best suits your taste and budget</h4>
                        <p style="text-align: justify">SR Valley love to build for you unique and unforgettable memories of your wedding and event
                            management. To organize your big day, you have to entrust the realization of your SR valley
                            desire to professional in wedding event planning. Since 2011, we are among the best wedding and
                            event management. We love to create unique and bespoke weddings corporate event management
                            company since 2011.
                        </p>
                        <p style="text-align: justify">Mr GAGAN PRADHAN owner of SR valley was Inaugurated on big date : 2nd March 2018.
                            Mr pradhan started SR valley was desire to professional inspired to start a wedding and event
                            planning with amazing and best services of venue, decoration, light, sound and catering for
                            wedding events.
                        </p>
                        <p style="text-align: justify">Mr. Pradhan specially known for his social work to help poor people in terms of financial issues
                            to let them use marriage venues with zero rental charges. For wedding events SR valley has 4
                            wedding venues such as: Gagansha Wedding, Lotus, Butterfly and orchid. Venue's total area is
                            around more than 18000 sq. ft and 1 lakh 35 thousand sq. ft with secure safety parking space</p>
                        <h5 class="text-capitalize">Here are our Banquets for wedding events and
                            planning:
                        </h5>
                        <div class="about-para-list mar-top-20">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="about-icon"><i class="fa fa-chess-queen"></i> Banquet Butterfly</div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="about-icon"><i class="fa fa-chess-queen"></i> Banquet Lotus</div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="about-icon"><i class="fa fa-chess-queen"></i> Banquet Orchid</div>
                                </div>
                                 <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="about-icon"><i class="fa fa-chess-queen"></i> Gagansha Weddings</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-us-image mar-top-50">
                        <img src="{{ asset('ui/images/gallery/5.webp') }}" alt="image">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- about Ends -->

    <!-- about Faq Starts -->
    {{-- <section class="about-faq">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="about-us-image">
                        <img src="{{ asset('ui/images/gallery/gallery2.jpg') }}" alt="image">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="info-detail">
                        <div class="accrodion-grp" data-grp-name="faq-accrodion">
                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h4>How can I improve my oral hygiene?</h4>
                                </div>
                                <div class="accrodion-content" style="display: block;">
                                    <div class="inner">
                                        <p>Everyone’s needs are different, so have a chat to your dentist about how often
                                            you need to have your teeth checked by them based on the condition of your
                                            mouth, teeth and gums.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion ">
                                <div class="accrodion-title">
                                    <h4>How do I know if my teeth are healthy?</h4>
                                </div>
                                <div class="accrodion-content" style="display: none;">
                                    <div class="inner">
                                        <p>Everyone’s needs are different, so have a chat to your dentist about how often
                                            you need to have your teeth checked by them based on the condition of your
                                            mouth, teeth and gums.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Why are regular dental assessments so important?</h4>
                                </div>
                                <div class="accrodion-content" style="display: none;">
                                    <div class="inner">
                                        <p>Everyone’s needs are different, so have a chat to your dentist about how often
                                            you need to have your teeth checked by them based on the condition of your
                                            mouth, teeth and gums.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>What if I have to cancel my appointment?</h4>
                                </div>
                                <div class="accrodion-content" style="display: none;">
                                    <div class="inner">
                                        <p>Sometimes the unexpected happens and you need to cancel your appointment make
                                            sure you call us or email us 1 day ago before cancellation.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>What do I need to bring to my appointment?</h4>
                                </div>
                                <div class="accrodion-content" style="display: none;">
                                    <div class="inner">
                                        <p>Sometimes the unexpected happens and you need to cancel your appointment make
                                            sure you call us or email us 1 day ago before cancellation.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>What are the facilities available in the hospital?</h4>
                                </div>
                                <div class="accrodion-content" style="display: none;">
                                    <div class="inner">
                                        <p>Sometimes the unexpected happens and you need to cancel your appointment make
                                            sure you call us or email us 1 day ago before cancellation.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- about Faq Ends -->

    <!-- about video starts -->
    <section class="video-box">
        <div class="container">
            <div class="section-title">
                <h3 class="white mar-0">Take a Tour</h3>
                <div class="call-button">
                    <button type="button" class="play-btn " onclick="vertualTour();"><i
                            class="fa fa-play"></i></button>
                </div>
                <div class="video-figure"></div>
                <h4 class="white mar-0">0f our wonderful banquet's</h4>
            </div>
        </div>
    </section>
    <!-- about video Ends -->

    <!-- Reviews Starts -->
    {{-- <section class="reviews">
        <div class="container">
            <div class="section-title title-white">
                <h2>Explore <span>Reviews</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex neque, sodales accumsan sapien et,
                    auctor vulputate quam donec vitae consectetur turpis</p>
            </div>
            <div class="review-slider">
                <div class="slider-item">
                    <div class="slider-image">
                        <img src="{{ asset('ui/images/review1.jpg') }}" alt="image">
                    </div>
                    <div class="slider-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod tortor vitae nisi pharetra
                            egestas. Sed egestas sapien libero.</p>
                        <h4>Micheal Clordy</h4>
                        <span>Germany</span>
                    </div>
                    <div class="slider-quote">
                        <img src="{{ asset('ui/images/icons/quote.png') }}" alt="Image">
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-image">
                        <img src="{{ asset('ui/images/review2.jpg') }}" alt="image">
                    </div>
                    <div class="slider-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod tortor vitae nisi pharetra
                            egestas. Sed egestas sapien libero.</p>
                        <h4>Ketty Perry</h4>
                        <span>Australia</span>
                    </div>
                    <div class="slider-quote">
                        <img src="{{ asset('ui/images/icons/quote.png') }}" alt="Image">
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-image">
                        <img src="{{ asset('ui/images/review1.jpg') }}" alt="image">
                    </div>
                    <div class="slider-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod tortor vitae nisi pharetra
                            egestas. Sed egestas sapien libero.</p>
                        <h4>Micheal Clordy</h4>
                        <span>Germany</span>
                    </div>
                    <div class="slider-quote">
                        <img src="{{ asset('ui/images/icons/quote.png') }}" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Reviews Ends -->

    <!-- Services Starts -->
    @livewire('frontend.services')
    <!-- Services Ends -->
@endsection
