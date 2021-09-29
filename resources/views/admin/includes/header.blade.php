<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>

<div class="dashboard-sticky-nav">
    <div class="content-left pull-left">
        <a href="{{ url('admin/dashboard') }}"><img src="{{ asset('ui/images/white-logo.png') }}" alt="logo"></a>
    </div>
    <div class="content-right pull-right">
        <div class="dropdown">
            <a class="dropdown-toggle">
                <div class="profile-sec">
                    <div class="dash-image">
                        <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" alt="">
                    </div>
                    <div class="dash-content">
                        <h4>{{ Auth::user()->name }}</h4>
                        <span>Manager</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
