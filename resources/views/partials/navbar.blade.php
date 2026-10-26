@php
    $links = [
        'home' => 'Beranda', 'about' => 'Tentang Kami', 'business' => 'Bisnis Kami',
        'operations' => 'Operasional', 'contact' => 'Kontak',
    ];
@endphp
<header class="navbar" data-navbar>
    <div class="container navbar__inner">
        <a href="{{ route('home') }}" class="brand" aria-label="{{ config('barkalin.name') }} – Beranda">
            <img class="brand__logo" src="{{ asset('images/logobarkalin.png') }}" alt="">
            <span class="brand__text">BARKALIN<small>Artha Prima</small></span>
        </a>
        <button class="navbar__toggle" type="button" aria-expanded="false" aria-controls="primary-nav" data-nav-toggle>
            <span class="sr-only">Buka menu navigasi</span><span class="bars" aria-hidden="true"></span>
        </button>
        <nav id="primary-nav" class="navbar__nav" aria-label="Navigasi utama" data-nav>
            <ul>
                @foreach ($links as $route => $label)
                    <li><a href="{{ route($route) }}" @if (request()->routeIs($route)) aria-current="page" @endif>{{ $label }}</a></li>
                @endforeach
            </ul>
            <a href="{{ route('contact') }}" class="btn btn--accent btn--sm">Hubungi Kami</a>
        </nav>
    </div>
</header>
