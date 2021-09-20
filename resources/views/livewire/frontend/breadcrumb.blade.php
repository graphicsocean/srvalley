<section class="breadcrumb-outer">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>{{ $title }}</h2>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                </ul>
            </nav>
        </div>
    </div>
</section>

{{-- <div>
    Success is as dangerous as failure.
</div> --}}
