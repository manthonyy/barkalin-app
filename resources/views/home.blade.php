
@extends('layouts.app')

@section('title', 'Beranda | ' . config('barkalin.name'))
@section('description', config('barkalin.description'))

@section('content')
<section class="hero">
    <div class="container hero__content">
        <span class="eyebrow">ENERGY · MINING · COMMODITIES</span>

        <h1>
            Membangun Nilai.<br>
            Menggerakkan Masa Depan.
        </h1>

        <p>
            {{ config('barkalin.name') }} berkomitmen untuk
            menghadirkan solusi di bidang pertambangan dan energi
            dengan mengutamakan profesionalisme, kualitas, dan
            kemitraan jangka panjang.
        </p>

        <div class="hero__actions">
            <a href="{{ route('business') }}" class="btn btn--gold">
                Jelajahi Bisnis Kami
            </a>

            <a href="{{ route('contact') }}" class="btn btn--outline">
                Hubungi Kami
            </a>
        </div>
    </div>
</section>

<section class="section section--about">
    <div class="container intro-grid">
        <div>
            <span class="eyebrow">TENTANG BARKALIN</span>
            <h2>Mitra untuk pertumbuhan yang berkelanjutan.</h2>
        </div>

        <div>
            <p>
                Kami membangun hubungan bisnis berdasarkan
                kepercayaan, integritas, dan komitmen terhadap
                kualitas dalam setiap proses.
            </p>

            <a href="{{ route('about') }}" class="text-link">
                Mengenal Perusahaan →
            </a>
        </div>
    </div>
</section>

<section class="section section--dark">
    <div class="container">
        <span class="eyebrow">BIDANG USAHA</span>
        <h2>Fokus pada potensi, berorientasi pada masa depan.</h2>

        <div class="card-grid">
            <article class="info-card">
                <span class="card-number">01</span>
                <h3>Pertambangan</h3>
                <p>
                    Mendukung kegiatan dan kebutuhan sektor
                    pertambangan melalui pendekatan profesional.
                </p>
            </article>

            <article class="info-card">
                <span class="card-number">02</span>
                <h3>Energi</h3>
                <p>
                    Mendukung kebutuhan sektor energi dengan
                    perhatian pada kualitas dan keandalan.
                </p>
            </article>

            <article class="info-card">
                <span class="card-number">03</span>
                <h3>Perdagangan Komoditas</h3>
                <p>
                    Mengembangkan hubungan perdagangan yang
                    transparan dan berorientasi jangka panjang.
                </p>
            </article>
        </div>

        <a href="{{ route('business') }}" class="text-link">
            Lihat bidang usaha →
        </a>
    </div>
</section>

<section class="section section--collaboration">
    <div class="container cta-panel">
        <div>
            <span class="eyebrow">KOLABORASI</span>
            <h2>Mari bangun kemitraan bersama.</h2>
            <p>
                Hubungi tim kami untuk mendiskusikan kebutuhan
                dan peluang kerja sama perusahaan Anda.
            </p>
        </div>

        <a href="{{ route('contact') }}" class="btn btn--gold">
            Hubungi Kami
        </a>
    </div>
</section>
@endsection
