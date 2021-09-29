@php
    $amenities = App\Models\Amenitie::where('status', 1)->get();
@endphp

<section class="rooms">
    <div class="container">
        <div class="section-title">
            <h2>Explore our <span>Amenities</span></h2>
            <p>Our Amazing Amenities are:</p>
        </div>
        <div class="room-outer">
            <div class="row">
                @foreach ($amenities as $item)
                    <div class="col-lg-4 col-md-6 mar-bottom-30">
                        <div class="room-item">
                            <div class="room-image">
                                <img src="{{ asset('ui/images/' . $item->image) }}" alt="image">
                            </div>
                            <div class="room-content">
                                <div class="room-title">
                                    <h4>{{ $item->name }}</h4>
                                </div>
                                <p>{{ $item->desc }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- <section class="services service-style-3">
    <div class="container">
        <div class="section-title">
            <h2>Explore <span>Services</span> & <span>Amenities</span></h2>
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

            <div class="service-item mar-bottom-20">
                <div class="display-flex">

                    <div class="service-detail pad-right-30 text-right">
                        <h3><a href="service-detail.html">Sound <span>Proof</span></a></h3>
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
                        <h3><a href="service-detail.html">air  <span>conditioned</span></a></h3>
                        <p>Excepteur sint occaecat cupidatat non proident sunt culpa qui officia deserunt mollit anim id
                            est laborum sed ut perspiciatis unde omnis natus error.Inventore veritatis et quasi archite
                            beatae vitae dicta.</p>
                    </div>
                </div>
            </div>

            <div class="service-item mar-bottom-20">
                <div class="display-flex">

                    <div class="service-detail pad-right-30 text-right">
                        <h3><a href="service-detail.html">Alcohol <span>Served</span></a></h3>
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
                        <h3><a href="service-detail.html">parking  <span>avialable</span></a></h3>
                        <p>Excepteur sint occaecat cupidatat non proident sunt culpa qui officia deserunt mollit anim id
                            est laborum sed ut perspiciatis unde omnis natus error.Inventore veritatis et quasi archite
                            beatae vitae dicta.</p>
                    </div>
                </div>
            </div>

            <div class="service-item mar-bottom-20">
                <div class="display-flex">

                    <div class="service-detail pad-right-30 text-right">
                        <h3><a href="service-detail.html">lines <span>provided</span></a></h3>
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
                        <h3><a href="service-detail.html">Audio-Visual  <span>Systems</span></a></h3>
                        <p>Excepteur sint occaecat cupidatat non proident sunt culpa qui officia deserunt mollit anim id
                            est laborum sed ut perspiciatis unde omnis natus error.Inventore veritatis et quasi archite
                            beatae vitae dicta.</p>
                    </div>
                </div>
            </div>

            <div class="service-item mar-bottom-20">
                <div class="display-flex">

                    <div class="service-detail pad-right-30 text-right">
                        <h3><a href="service-detail.html">changing <span>room</span></a></h3>
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
                        <h3><a href="service-detail.html">drinking <span>water</span></a></h3>
                        <p>Excepteur sint occaecat cupidatat non proident sunt culpa qui officia deserunt mollit anim id
                            est laborum sed ut perspiciatis unde omnis natus error.Inventore veritatis et quasi archite
                            beatae vitae dicta.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section> --}}
