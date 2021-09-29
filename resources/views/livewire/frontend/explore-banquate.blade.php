<section class="rooms" id="banqets">
    <div class="container">
        <div class="section-title">
            <h2>Explore <span>banquate</span></h2>
            <p>Our Amazing {{count($banquets)}} Banquets are:</p>
        </div>
        <div class="room-outer">
            <div class="row">
                @foreach ($banquets as $item)
                    <div class="col-lg-4 col-md-6 mar-bottom-30">
                        <div class="room-item">
                            <div class="room-image">
                                <img src="{{ asset('ui/images/'.$item->thumbnail) }}" alt="image">
                            </div>
                            <div class="room-content">
                                <div class="room-title">
                                    <h4>{{$item->name}}</h4>
                                    <p><i class="fas fa-tag"></i> ₹ {{$item->price}}</p>
                                    <div class="deal-rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                </div>
                                <div class="room-services mar-bottom-15">
                                    {!!html_entity_decode($item->special_features)!!}
                                </div>
                                <p>{{$item->description}}</p>
                                <div class="room-btns mar-top-20">
                                    <a href="{{ url('banquet/'.$item->slug)}}" class="btn btn-black mar-right-10">VIEW
                                        DETAILS</a>
                                    <a href="tel:8048072230" class="btn btn-orange">BOOK NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-lg-4 col-md-6 mar-bottom-30">
                    <div class="room-item">
                        <div class="room-image">
                            <img src="{{ asset('ui/images/Lotus.webp') }}" alt="image">
                        </div>
                        <div class="room-content">
                            <div class="room-title">
                                <h4>Banquet Lotus</h4>
                                <p><i class="fas fa-tag"></i> &#8377; 1,20,000</p>
                                <div class="deal-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                            </div>
                            <div class="room-services mar-bottom-15">
                                <ul>
                                    <li><i class="fa fa-bed" aria-hidden="true"></i> 3 Bedrooms</li>
                                    <li><i class="fa fa-wifi" aria-hidden="true"></i> Wifi</li>
                                    <li><i class="fa fa-wifi" aria-hidden="true"></i> Wifi</li>
                                </ul>
                            </div>
                            <p>Open space party Lawn with an area of - 18000 sq ft ( 5000 sq ft covered
                                area and 12000 sq ft open area) with 2 AC rooms with attached washrooms and 2 separate
                                washrooms in garden and guest capacity of around 1500-2000 at a time.</p>
                            <div class="room-btns mar-top-20">
                                <a href="{{ url('banquet/lotus') }}" class="btn btn-black mar-right-10">VIEW
                                    DETAILS</a>
                                <a href="tel:8048072230" class="btn btn-orange">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mar-bottom-30">
                    <div class="room-item">
                        <div class="room-image">
                            <img src="{{ asset('ui/images/Orchid.webp') }}" alt="image">
                        </div>
                        <div class="room-content">
                            <div class="room-title">
                                <h4>Banquet Orchid</h4>
                                <p><i class="fas fa-tag"></i> &#8377; 1,00,000</p>
                                <div class="deal-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                            </div>
                            <div class="room-services mar-bottom-15">
                                <ul>
                                    <li><i class="fa fa-bed" aria-hidden="true"></i> 3 Bedrooms</li>
                                    <li><i class="fa fa-wifi" aria-hidden="true"></i> Wifi</li>
                                    <li><i class="fa fa-wifi" aria-hidden="true"></i> Wifi</li>
                                </ul>
                            </div>
                            <p>Open space party Lawn with an area of - 18000 sq ft ( 5000 sq ft covered
                                area and 12000 sq ft open area) with 2 AC rooms with attached washrooms and 2 separate
                                washrooms in garden and guest capacity of around 1500-2000 at a time.</p>
                            <div class="room-btns mar-top-20">
                                <a href="{{ url('banquet/Orchid') }}" class="btn btn-black mar-right-10">VIEW
                                    DETAILS</a>
                                <a href="tel:8048072230" class="btn btn-orange">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        {{-- <div class="section-btn pad-0">
            <a href="#" class="btn btn-black">EXPLORE ALL ROOMS <i class="fas fa-angle-double-right"></i></a>
        </div> --}}
    </div>
</section>
