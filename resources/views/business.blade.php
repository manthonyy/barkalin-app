@extends('layouts.app')

@section('title', 'Bidang Usaha & Produk | ' . config('barkalin.name'))
@section('description', 'Katalog batubara berkualitas dari CV Barkalin Artha Prima: High Grade, Medium Grade, dan Low Grade dengan kepastian legalitas dan kontinuitas pasokan.')

@section('content')
<section class="page-banner">
    <div class="container">
        <span class="eyebrow">BIDANG USAHA & PRODUK</span>
        <h1>Katalog Batubara & Layanan</h1>
        <p>
            Menyediakan ragam spesifikasi batubara berkualitas dengan kepastian legalitas dan keandalan pasokan untuk kebutuhan industri Anda.
        </p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="intro-grid" style="margin-bottom: 48px;">
            <div>
                <span class="eyebrow">SPESIFIKASI KOMODITAS</span>
                <h2>Pilihan Kalori Sesuai Kebutuhan Industri</h2>
            </div>
            <div>
                <p>
                    Semua batubara yang dipasok oleh {{ config('barkalin.name') }} bersumber dari konsesi tambang resmi pemerintah yang telah memenuhi seluruh izin dan uji kelayakan lingkungan. Kami menerapkan seleksi mutu yang ketat untuk menjamin konsistensi nilai kalor.
                </p>
            </div>
        </div>

        <div class="card-grid">
            @forelse ($products as $product)
                <article class="info-card">
                    <span class="card-number">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                    <h3>{{ $product->name }}</h3>
                    <p style="color: var(--color-gold); font-weight: 700; font-size: 1rem; margin-bottom: 10px;">
                        {{ $product->calorie_range }}
                    </p>
                    <p>{{ $product->description }}</p>
                    @if ($product->specifications)
                        <div style="margin-top: 16px; padding-top: 12px; border-top: 1px solid var(--color-border); font-size: 0.875rem; color: var(--color-muted);">
                            <strong>Spesifikasi Acuan:</strong><br>
                            {{ $product->specifications }}
                        </div>
                    @endif
                </article>
            @empty
                <div class="info-card">
                    <p>Belum ada produk batubara yang terdaftar saat ini.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

<section class="section section--dark">
    <div class="container">
        <span class="eyebrow">KAPABILITAS TAMBAHAN</span>
        <h2>Integrasi Rantai Pasok Energi</h2>
        <div class="card-grid" style="margin-top: 32px; margin-bottom: 48px;">
            <article class="info-card">
                <span class="card-number">01</span>
                <h3>Pertambangan Legal</h3>
                <p>Kemitraan strategis dengan pemilik IUP resmi di Kalimantan dan Sumatera untuk kepastian volume cadangan.</p>
            </article>
            <article class="info-card">
                <span class="card-number">02</span>
                <h3>Penyimpanan Terpadu</h3>
                <p>Fasilitas stockpile di Surabaya dengan manajemen penanganan material rapi guna mencegah degradasi kalori.</p>
            </article>
            <article class="info-card">
                <span class="card-number">03</span>
                <h3>Transportasi Terpercaya</h3>
                <p>Logistik laut menggunakan armada ponton/tongkang dan kapal tunda berjadwal tepat waktu.</p>
            </article>
        </div>

        <div style="text-align: center;">
            <a href="{{ route('contact') }}" class="btn btn--gold">
                Konsultasikan Kebutuhan Industri Anda
            </a>
        </div>
    </div>
</section>
@endsection
