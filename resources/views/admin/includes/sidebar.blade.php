<div class="dashboard-nav">
    <div class="dashboard-nav-inner">
        <ul>
            <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}"><a href="{{route('dashboard')}}"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
            <li class="{{ request()->routeIs('banners.index') ? 'active' : '' }}"><a href="{{route('banners.index')}}"><i class="sl sl-icon-picture"></i>Home Banner</a></li>
            <li class="{{ request()->routeIs('banquet.index') ? 'active' : '' }}"><a href="{{route('banquet.index')}}"><i class="sl sl-icon-list"></i>Banquets</a></li>
            <li class="{{ request()->routeIs('service.index') ? 'active' : '' }}"><a href="{{route('service.index')}}"><i class="sl sl-icon-book-open"></i>Service</a></li>
            <li class="{{ request()->routeIs('amenitie.index') ? 'active' : '' }}"><a href="{{route('amenitie.index')}}"><i class="sl sl-icon-book-open"></i>Amenities</a></li>
            <li class="{{ request()->routeIs('setting.index') ? 'active' : '' }}"><a href="{{route('setting.index')}}"><i class="sl sl-icon-settings"></i>Settings</a></li>
            <li><a href="#"><i class="sl sl-icon-power"></i> Logout</a></li>
        </ul>
    </div>
</div>
