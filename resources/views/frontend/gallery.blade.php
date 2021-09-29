@extends('frontend.app')
@section('title', 'Our Gallery')
@section('content')
    @livewire('frontend.breadcrumb', ['title' => 'our gallery'])

    <section class="content gallery" data-ref="container-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt_filter">
                        <ul class="list-inline text-center filter">
                            {{-- <li class="active"><a href="#" data-filter="*">All</a></li>
                            <li><a href="#" data-filter=".butterfly">Banquet Butterfly</a></li>
                            <li><a href="#" data-filter=".lotus">Banquet Lotus</a></li>
                            <li><a href="#" data-filter=".orchid">Banquet Orchid</a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row mar-top-50">
                <div class="isotopeContainer">
                    @if ($gallery->count() > 0)
                        @foreach ($gallery as $item)
                            <div class="isotopeSelector butterfly col-lg-4 col-md-6">
                                <div class="gallery-item">
                                    <div class="gallery-image">
                                        <img src="{{ asset($item->path) }}" alt="SR valley image" loading='lazy'>
                                    </div>
                                    <div class="gallery-content">
                                        <ul>
                                            <li><a href="{{ asset($item->path) }}"
                                                    data-lightbox="gallery" data-title="SR valley"><i
                                                        class="fa fa-eye"></i></a></li>
                                            {{-- <li><a href="#"><i class="fa fa-share"></i></a></li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
