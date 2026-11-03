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
    <link rel="icon" type="image/png" href="{{ asset('images/logobarkalin.png') }}">
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
