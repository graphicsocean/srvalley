@extends('frontend.app')
@section('title', 'Contact Us')
@section('content')
    @livewire('frontend.breadcrumb', ['title' => 'contact us'])
    <!-- contact starts -->
    @php
    $settings = App\Models\Setting::first();
    @endphp
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
                                <p>{{ $settings->address }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mar-bottom-30">
                        <div class="info-item info-item-or">
                            <div class="info-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="info-content">
                                <p style="color: white">+91-{{ $settings->phone }}</p>
                                <p style="color: white">+91-97766 46481</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mar-bottom-30">
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="info-content">
                                <p style="color: white">{{ $settings->email }}</p>
                                <p style="color: white;visibility: hidden;">.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-map">
                <div class="row">
                    <div class="col-lg-6">
                        <div id="map" style="height: 535px; width: 100%;">
                            <iframe width="100%" height="535"
                                src="https://maps.google.com/maps?q=SR%20Valley%20Wedding%20Venue%20&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                frameborder="0" scrolling="yes" marginheight="0" marginwidth="0"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div id="contact-form" class="contact-form">
                            <h3>Keep in Touch</h3>
                            <div id="contactform-error-msg"></div>

                            <form method="post" action="{{ 'submit-contact-form' }}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="first_name" class="form-control" id="fname"
                                        placeholder="First Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="last_name" class="form-control" id="lname"
                                        placeholder="Last Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" id="phnumber" placeholder="Phone"
                                        required>
                                </div>
                                <div class="textarea">
                                    <textarea name="message" placeholder="Enter a message"></textarea>
                                </div>
                                <div class="comment-btn text-right">
                                    <button type="submit" class="btn btn-orange" id="submit">submit</button>
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
