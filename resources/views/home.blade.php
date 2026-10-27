@extends('layouts.app')

@section('title', 'Beranda | ' . config('barkalin.name'))
@section('description', config('barkalin.description'))
@section('body_class', 'home-page')

@section('content')
<section class="hero home-hero">
    <div class="container hero__content">
        <span class="eyebrow">ENERGY · MINING · COMMODITIES</span>
        <h1>Solusi Terpercaya untuk Masa Depan Energi</h1>
        <p>
            CV Barkalin Artha Prima berkomitmen untuk menghadirkan solusi di bidang pertambangan dan energi
            dengan mengutamakan profesionalisme, kualitas, dan kemitraan jangka panjang.
        </p>
        <div class="hero__actions">
            <a href="{{ route('business') }}" class="btn btn--gold">Jelajahi Bisnis Kami</a>
            <a href="{{ route('about') }}" class="btn btn--outline">Tentang Kami</a>
        </div>
    </div>
</section>

<section class="section home-about">
    <div class="container home-about__grid">
        <div class="home-about__content">
            <span class="eyebrow">TENTANG KAMI</span>
            <h2>Mitra untuk masa depan energi yang bertanggung jawab.</h2>
            <p>
                Kami menyadari bahwa batubara merupakan salah satu Sumber Daya Alam yang luar biasa manfaatnya,
                oleh karena itu diperlukan komitmen tinggi untuk memanfaatkan batubara dengan bijaksana.
                Didukung rasa percaya yang diberikan masyarakat kepada kami, pada tanggal 29 Maret 2011 kami
                mendirikan CV Barkalin Artha Prima, sebuah kegiatan usaha yang bergerak khusus di bidang
                pertambangan dan energy.
            </p>
            <a href="{{ route('about') }}" class="text-link">Selengkapnya tentang kami <span aria-hidden="true">→</span></a>
        </div>
        <img
            class="home-about__image"
            src="{{ asset('images/barkalin-hero.jpg') }}"
            alt="Alat berat bekerja di area pertambangan"
            loading="lazy"
        >
    </div>
</section>

<section class="section home-grades">
    <div class="container">
        <div class="home-section-heading">
            <span class="eyebrow">GRADE BATU BARA</span>
            <h2>Tersedia dalam Berbagai Grade Sesuai Kebutuhan Industri</h2>
        </div>
        <div class="home-grade-grid">
            @foreach ($coalGrades as $grade)
                <button
                    class="home-image-card"
                    type="button"
                    data-detail-card
                    data-title="{{ $grade['title'] }}"
                    data-category="{{ $grade['category'] }}"
                    data-image="{{ asset('images/' . $grade['image']) }}"
                    data-description="{{ $grade['description'] }}"
                    aria-label="Lihat detail {{ $grade['title'] }}"
                >
                    <img src="{{ asset('images/' . $grade['image']) }}" alt="" loading="lazy">
                    <span class="home-image-card__overlay">
                        <span class="home-image-card__title">{{ $grade['title'] }}</span>
                        <span class="home-image-card__action">Lihat Selengkapnya <span aria-hidden="true">→</span></span>
                    </span>
                </button>
            @endforeach
        </div>
    </div>
</section>

<section class="section home-services">
    <div class="container">
        <div class="home-section-heading home-activities__intro">
            <span class="eyebrow">KEGIATAN KAMI</span>
            <h2>Proses yang Mendukung Kualitas dan Keandalan</h2>
            <p>
                Setiap tahapan dalam penanganan batu bara memerlukan perhatian terhadap kualitas, pengelolaan material,
                dan kelancaran distribusi. Kami mengutamakan pendekatan profesional dalam mendukung kebutuhan sektor
                pertambangan dan perdagangan batu bara.
            </p>
        </div>
        <div class="home-activities__list">
            @foreach ($activities as $activity)
                <article class="home-activity{{ $activity['reverse'] ? ' home-activity--reverse' : '' }}">
                    <img
                        src="{{ asset('images/' . $activity['image']) }}"
                        alt="{{ $activity['image_alt'] }}"
                        loading="lazy"
                    >
                    <div class="home-activity__content">
                        <span class="home-activity__number">{{ $activity['number'] }}</span>
                        <h3>{{ $activity['title'] }}</h3>
                        @foreach ($activity['paragraphs'] as $paragraph)
                            <p>{{ $paragraph }}</p>
                        @endforeach
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

<div class="home-detail-modal" data-detail-modal hidden>
    <div class="home-detail-modal__backdrop" data-modal-backdrop></div>
    <section
        class="home-detail-modal__panel"
        role="dialog"
        aria-modal="true"
        aria-labelledby="home-detail-title"
        aria-describedby="home-detail-description"
        tabindex="-1"
    >
        <button class="home-detail-modal__close" type="button" data-modal-close aria-label="Tutup detail">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="home-detail-modal__image-wrap">
            <img class="home-detail-modal__image" data-modal-image src="" alt="">
        </div>
        <div class="home-detail-modal__content">
            <span class="eyebrow" data-modal-category></span>
            <h2 id="home-detail-title" data-modal-title></h2>
            <p id="home-detail-description" data-modal-description></p>
        </div>
    </section>
</div>

<section class="section home-clients">
    <div class="container">
        <div class="home-section-heading">
            <span class="eyebrow">OUR CLIENTS</span>
            <h2>Trusted by Leading Companies</h2>
        </div>
        <div class="home-client-list" aria-label="Logo klien">
            <div class="home-client-logo"><img src="{{ asset('images/cheiljedang.png') }}" alt="CheilJedang" loading="lazy"></div>
            <div class="home-client-logo"><img src="{{ asset('images/wings.png') }}" alt="Wings" loading="lazy"></div>
            <div class="home-client-logo"><img src="{{ asset('images/sementonas.png') }}" alt="Semen Tonasa" loading="lazy"></div>
            <div class="home-client-logo"><img src="{{ asset('images/megasurya.jpg') }}" alt="Megasurya" loading="lazy"></div>
        </div>
    </div>
</section>
@endsection
