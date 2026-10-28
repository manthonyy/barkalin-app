@extends('layouts.app')

@section('title', 'Operasional & Fasilitas | ' . config('barkalin.name'))
@section('description', 'Fasilitas stockpile di Osowilangon Surabaya, armada maritim tongkang/barge, dan jetty pelabuhan CV Barkalin Artha Prima.')

@section('content')
<section class="page-banner">
    <div class="container">
        <span class="eyebrow">OPERASIONAL & LOGISTIK</span>
        <h1>Fasilitas & Manajemen Mutu</h1>
        <p>
            Mendukung kelancaran distribusi batubara melalui integrasi fasilitas stockpile, armada maritim, dan kontrol mutu berstandar tinggi.
        </p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="intro-grid" style="margin-bottom: 48px;">
            <div>
                <span class="eyebrow">JARINGAN FASILITAS</span>
                <h2>Infrastruktur Pendukung Distribusi</h2>
            </div>
            <div>
                <p>
                    Keandalan pasokan energi sangat bergantung pada kekuatan logistik. CV Barkalin Artha Prima mengelola rantai pasok batubara dari titik muat pelabuhan hingga fasilitas penimbunan strategis di Surabaya.
                </p>
            </div>
        </div>

        <div class="card-grid">
            @forelse ($facilities as $facility)
                <article class="info-card">
                    <span class="card-number">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                    <span style="display: inline-block; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.05em; color: var(--color-gold); font-weight: 700; margin-bottom: 6px;">
                        {{ $facility->type }}
                    </span>
                    <h3>{{ $facility->name }}</h3>
                    <p style="font-size: 0.875rem; color: var(--color-muted); margin-bottom: 12px;">
                        📍 {{ $facility->location }}
                    </p>
                    <p>{{ $facility->description }}</p>
                </article>
            @empty
                <div class="info-card">
                    <p>Belum ada fasilitas yang terdaftar saat ini.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

<section class="section section--dark">
    <div class="container">
        <div class="intro-grid" style="margin-bottom: 40px;">
            <div>
                <span class="eyebrow">ALUR KERJA OPERASIONAL</span>
                <h2>Standar Pengendalian Mutu & Pengiriman</h2>
            </div>
            <div>
                <p>
                    Setiap tahapan penanganan batubara melewati proses verifikasi ketat demi menjaga spesifikasi kalori yang dijanjikan kepada pembeli.
                </p>
            </div>
        </div>

        @include('partials.process')

        <div style="margin-top: 48px; text-align: center;">
            <a href="{{ route('contact') }}" class="btn btn--gold">
                Hubungi Tim Operasional Kami
            </a>
        </div>
    </div>
</section>
@endsection
