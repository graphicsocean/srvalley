@php
    $services = App\Models\Service::where('status', 1)->get();
@endphp


<section class="rooms">
    <div class="container">
        <div class="section-title">
            <h2>Explore our <span>Services</span></h2>
            <p>Our Amazing Services are:</p>
        </div>
        <div class="room-outer">
            <div class="row">
                @foreach ($services as $item)
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


{{-- <div>
    Care about people's approval and you will be their prisoner.
</div> --}}
