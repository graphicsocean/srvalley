@extends('layouts.admin')
@section('content')
    <div class="dashboard-content">
        <div class="row">
            <!-- Listings -->
            <div class="col-lg-12 col-sm-12">
                <div id="add-listing">

                    <!-- Section -->
                    <form action="{{ route('banners.store') }}" method="post"  enctype='multipart/form-data'>
                        @csrf
                        <div class="add-listing-section">

                            <!-- Headline -->
                            <div class="add-listing-headline">
                                <h3><i class="sl sl-icon-doc"></i> Add New Home Banner</h3>
                            </div>
                            <!-- Title -->
                            <div class="row with-forms">
                                <div class="col-md-12">
                                    <label>Main Title <i class="tip"
                                            data-tip-content="main title of banner"></i></label>
                                    <input name="title1" class="search-field" type="text" placeholder="type here..." />
                                </div>
                            </div>

                            <!-- Row -->
                            <div class="row with-forms">

                                <!-- Status -->
                                <div class="col-md-6">
                                    <label>CTA<i class="tip"
                                            data-tip-content="Banner button text"></i></label>
                                    <input name="cta" class="search-field" type="text" placeholder="type here..." />
                                </div>

                                <!-- Type -->
                                <div class="col-md-6">
                                    <label>CTA link <i class="tip"
                                            data-tip-content="Banner button URL"></i></label>
                                    <input name="cta_link" type="text">
                                </div>

                            </div>
                            <div class="row with-forms">

                                <!-- Status -->
                                <div class="col-md-6">
                                    <label>Sub Title <i class="tip"
                                            data-tip-content="Sub title will show before of banner main title"></i></label>
                                    <input name="title2" class="search-field" type="text" placeholder="type here..." />
                                </div>

                                <!-- Type -->
                                <div class="col-md-6">
                                    <label>Image <i class="tip"
                                            data-tip-content="Maximum of 2MB Allowed"></i></label>
                                    <input name="image" type="file">
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
