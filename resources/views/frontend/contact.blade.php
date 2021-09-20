@extends('frontend.app')
@section('title', 'Contact Us')
@section('content')
    @livewire('frontend.breadcrumb', ['title' => 'contact us'])
    <!-- contact starts -->
    <section class="contact">
        <div class="container">
            <div class="contact-info">
                <div class="row">
                    <div class="col-lg-4 col-md-12 mar-bottom-30">
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="info-content">
                                <p>SR Valley, New Bypass Road, Plot No-58, NH316, Bhubaneswar</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mar-bottom-30">
                        <div class="info-item info-item-or">
                            <div class="info-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="info-content">
                                <p>+91-8048072230</p>
                                <p>+91-8048072230</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mar-bottom-30">
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="info-content">
                                <p>info@srvalley.com</p>
                                <p>info@srvalley.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-map">
                <div class="row">
                    <div class="col-lg-6">
                        <div id="map" style="height: 535px; width: 100%;"></div>
                    </div>
                    <div class="col-lg-6">
                        <div id="contact-form" class="contact-form">
                            <h3>Keep in Touch</h3>
                            <div id="contactform-error-msg"></div>

                            <form method="post" action="#" name="contactform" id="contactform">
                                <div class="form-group">
                                    <input type="text" name="first_name" class="form-control" id="fname"
                                        placeholder="First Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="last_name" class="form-control" id="lname"
                                        placeholder="Last Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" id="phnumber"
                                        placeholder="Phone">
                                </div>
                                <div class="textarea">
                                    <textarea name="comments" placeholder="Enter a message"></textarea>
                                </div>
                                <div class="comment-btn text-right">
                                    <input type="submit" class="btn btn-orange" id="submit" value="Send Message">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact Ends -->
@endsection
