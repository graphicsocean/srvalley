@extends('layouts.admin')
@section('content')
    <div class="dashboard-content">
        <div class="row">
            <!-- Listings -->
            <div class="col-lg-12 col-sm-12">
                <div id="add-listing">

                    <!-- Section -->
                    <form action=" {{ url('admin/setting/' . $settings->id) }} " method="post"
                        enctype='multipart/form-data'>
                        {{ method_field('PUT') }}
                        @csrf
                        <div class="add-listing-section">

                            <!-- Headline -->
                            <div class="add-listing-headline">
                                <h3><i class="sl sl-icon-doc"></i>Configure settings</h3>
                            </div>
                            <!-- Title -->


                            <!-- Row -->
                            <div class="row with-forms">

                                <!-- Status -->
                                <div class="col-md-6">
                                    <label>Name<i class="tip" data-tip-content="Banner button text"></i></label>
                                    <input name="name" class="search-field" type="text" value="{{ $settings->name }}" />
                                </div>

                                <!-- Type -->
                                <div class="col-md-6">
                                    <label>Email</label>
                                    <input name="email" type="email" value="{{ $settings->email }}">
                                </div>

                            </div>
                            <div class="row with-forms">

                                <!-- Status -->
                                <div class="col-md-6">
                                    <label>Address</label>
                                    <input name="address" class="search-field" type="text"
                                        value="{{ $settings->address }}" />
                                </div>

                                <!-- Type -->
                                <div class="col-md-6">
                                    <label>Info</label>
                                    <input name="info" type="text" value="{{ $settings->info }}">
                                </div>

                            </div>
                            <div class="row with-forms">

                                <!-- Status -->
                                <div class="col-md-6">
                                    <label>FB link</label>
                                    <input name="fb_link" class="search-field" type="text"
                                        value="{{ $settings->fb_link }}" />
                                </div>

                                <!-- Type -->
                                <div class="col-md-6">
                                    <label>Insta link</label>
                                    <input name="insta_link" type="text" value="{{ $settings->insta_link }}">
                                </div>

                            </div>
                            <div class="row with-forms">

                                <!-- Status -->
                                <div class="col-md-6">
                                    <label>GooglemyBusiness link</label>
                                    <input name="gbiz_link" class="search-field" type="text"
                                        value="{{ $settings->gbiz_link }}" />
                                </div>

                                <!-- Type -->
                                <div class="col-md-6">
                                    <label>phone</label>
                                    <input name="number" type="text" value="{{ $settings->phone }}">
                                </div>

                            </div>
                            <div class="row with-forms">

                                <!-- Status -->
                                <div class="col-md-6">
                                    <label>Black Logo</label>
                                    <input name="w_logo" class="search-field" type="file" />
                                </div>

                                <!-- Type -->
                                <div class="col-md-6">
                                    <label>White Logo</label>
                                    <input name="b_logo" class="search-field" type="file" />
                                </div>

                            </div>



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
