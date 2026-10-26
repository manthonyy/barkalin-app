<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('barkalin.name'))</title>
    <meta name="description" content="@yield('description', 'CV Barkalin Artha Prima, perusahaan pertambangan dan energi berbasis di Surabaya.')">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', config('barkalin.name'))">
    <meta property="og:description" content="@yield('description', 'CV Barkalin Artha Prima, perusahaan pertambangan dan energi.')">
    <meta property="og:image" content="{{ asset(config('barkalin.images.hero')) }}">
    <meta property="og:url" content="{{ url()->current() }}">
    {{-- TODO: replace with the company logo (public/favicon.svg). Placeholder: letter B. --}}
    <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect width='32' height='32' fill='%23181a1b'/%3E%3Ctext x='16' y='23' font-size='20' font-family='Arial' font-weight='700' text-anchor='middle' fill='%23c0803a'%3EB%3C/text%3E%3C/svg%3E">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=manrope:400,500,600,700,800" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="@yield('body_class')">
    <a class="skip-link" href="#main">Lewati ke konten utama</a>
    @include('partials.navbar')
    <main id="main">
        @yield('content')
    </main>
    @include('partials.footer')
</body>
</html>
