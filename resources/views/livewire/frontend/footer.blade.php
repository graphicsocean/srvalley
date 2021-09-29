{{-- Start Newslatter --}}
@php
$settings = App\Models\Setting::first();
$banquets = App\Models\Banquet::all();
@endphp
<div>
    <section class="newsletter">
        <div class="container">
            <div class="section-title title-white">
                <h2>Subscribe to our <span>Newsletter</span></h2>
                <p>Subscribe For Party Ideas and Offers.</p>
            </div>
            <div class="newsletter-form">
                <form>
                    <input type="email" placeholder="Enter your email">
                    <a href="#" class="btn btn-orange"><i class="fa fa-envelope" aria-hidden="true"></i> SEND</a>
                </form>
            </div>
        </div>
    </section>
    {{-- End Newslatter --}}
    <footer>
        <div class="footer-top pad-bottom-20">
            <div class="container">
                <div class="footer-content">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 mar-bottom-30">
                            <div class="footer-about">
                                <h4>Company Info</h4>
                                <p>{{ $settings->info }}</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mar-bottom-30">
                            <div class="quick-links">
                                <h4>Quick Links</h4>
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="{{ url('about') }}">About</a></li>
                                    <li><a href="#banqets">Banquet's</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="{{ url('/blog') }}">Blog</a></li>
                                    <li><a href="{{ url('gallery') }}">Gallery</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="{{ url('contact') }}">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mar-bottom-30">
                            <div class="Rooms">
                                <h4>Banquet's</h4>
                                <ul>
                                    @foreach ($banquets as $item)
                                        <li><a href="{{url('banquet/'.$item->slug)}}">{{$item->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mar-bottom-30">
                            <div class="footer-contact">
                                <h4>Contact info</h4>
                                <ul>
                                    <li>Tel: +91-{{ $settings->phone }}</li>
                                    <li>Email: {{ $settings->email }}</li>
                                    <li>Address: {{ $settings->address }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright pad-bottom-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mar-bottom-10">
                        <div class="copyright-content">
                            <p>Copyright {{ date('Y') }} {{ $settings->name }} All Rights Reserved. Made with
                                <span>♥</span> by <a href="#">TheBlockbuster</a></p>
                        </div>
                    </div>
                    <div class="col-lg-4 mar-bottom-10">
                        <div class="tripadvisor-logo text-center">
                            <img src="{{ asset('ui/images/white-logo.png') }}" alt="SRvalley Logo">
                        </div>
                    </div>
                    <div class="col-lg-4 mar-bottom-10">
                        <div class="copyright-links mar-bottom-20">
                            <ul>
                                <li><a href="{{ $settings->fb_link }}"><i class="fab fa-facebook"
                                            aria-hidden="true"></i></a></li>
                                <li><a href="{{ $settings->insta_link }}"><i class="fab fa-instagram"
                                            aria-hidden="true"></i></a></li>
                                <li><a href="{{ $settings->gbiz_link }}"><i class="fa fa-map"
                                            aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    {{-- Nothing in the world is as soft and yielding as water. --}}
</div>
