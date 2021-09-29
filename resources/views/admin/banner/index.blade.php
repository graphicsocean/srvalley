@extends('layouts.admin')
@section('content')
<div class="dashboard-content">
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div class="dashboard-list-box dash-list margin-top-0">
                <a class="button preview" href="{{route('banners.create')}}">Add</a>
                <div class="row">
                    @foreach ($banners as $item)
                        <div class="col-sm-4"><!-- list start -->
                            <div class="list-box-listing">
                                <div class="list-box-listing-img">
                                    <a href="#"><img src="{{asset('ui/images/slider/'.$item->image)}}" alt=""></a>
                                </div>
                                <div class="list-box-listing-content">
                                    <div class="inner">
                                        <span>{{$item->title1}}</span>
                                        <a href="#"><h3>{!! html_entity_decode($item->title2)!!}</h3></a>
                                        <p></p>
                                    </div>
                                    <a href="{{url('admin/banners/'.$item->id.'/edit')}}" class="button gray"><i class="sl sl-icon-pencil"></i> Edit</a>
                                    <p>Status: @if ($item->status === 1)
                                        Active
                                        @else
                                        Inactive
                                    @endif</p>
                                </div>

                            </div>
                        </div><!-- list end -->
                    @endforeach
                </div>
            </div>
            </div>

    </div>
</div>
@endsection
