@extends('layouts.admin')
@section('content')
    <div class="dashboard-content">
        <div class="row">
            <!-- Listings -->
            <div class="col-lg-12 col-sm-12">
                <div id="add-listing">

                    <!-- Section -->
                    <form action=" {{ url('admin/amenitie/' . $amenitie->id) }} " method="post"
                        enctype='multipart/form-data'>
                        {{ method_field('PUT') }}
                        @csrf
                        <div class="add-listing-section">

                            <!-- Headline -->
                            <div class="add-listing-headline">
                                <h3><i class="sl sl-icon-doc"></i> Add New Amenitie</h3>
                            </div>
                            <!-- Title -->


                            <!-- Row -->
                            <div class="row with-forms">

                                <!-- Status -->
                                <div class="col-md-6">
                                    <label>Name<i class="tip" data-tip-content="Banner button text"></i></label>
                                    <input name="name" class="search-field" type="text" value="{{ $amenitie->name }}" />
                                </div>

                                <!-- Type -->
                                <div class="col-md-6">
                                    <label>Image</label>
                                    <input name="image" type="file">
                                </div>

                            </div>

                            <div class="row with-forms">
                                <div class="col-md-12">
                                    <label>Description <i class="tip"
                                            data-tip-content="main title of banner"></i></label>
                                    <input name="desc" class="search-field" type="text" placeholder="type here..."
                                        value="{{ $amenitie->desc }}" />
                                </div>
                            </div>
                            <!-- Row / End -->


                        </div>
                        <!-- Section / End -->
                        <button class="button preview" type="submit">Submit <i
                                class="fa fa-arrow-circle-right"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
