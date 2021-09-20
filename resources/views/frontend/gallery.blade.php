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
                   @for ($i=1;$i <=12;$i++)
                        <div class="isotopeSelector butterfly col-lg-4 col-md-6">
                            <div class="gallery-item">
                                <div class="gallery-image">
                                    <img src="{{ asset('ui/images/gallery/'.$i.'.webp') }}" alt="image">
                                </div>
                                <div class="gallery-content">
                                    <ul>
                                        <li><a href="{{ asset('ui/images/gallery/'.$i.'.webp') }}" data-lightbox="gallery"
                                                data-title="Title"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-share"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                   @endfor
                </div>
            </div>
        </div>
    </section>
@endsection
