@php
    $baseUrl = '';
    $isTop;
    if (request()->path() == 'corporate') {
        $isTop = true;
    } else {
        $isTop = false;
    }
@endphp

@section('header')
    <nav class="header-nav navbar @if($isTop) fixed-top @endif navbar-expand-lg navbar-light">
        <div class="container-fluid py-md-3">
            <a class="title-logo navbar-brand" href="{{ route('home') }}">
                <img class="img-fluid" src="{{ asset('images/logo.png') }}" alt="ロゴ　画像">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse menu" id="navbarTogglerDemo02">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 menu-list">
                    @foreach ($contentArray as $array)
                        <li class="nav-item menu-item">
                            <a class="nav-link link-text-main link-hover" href="{{ $array['url'] }}">{{ $array['title'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
@endsection