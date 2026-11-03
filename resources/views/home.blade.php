@extends('layouts.app')

@section('title', 'Beranda | ' . config('barkalin.name'))
@section('description', config('barkalin.description'))
@section('body_class', 'home-page')

@section('content')
<section
    class="hero home-hero"
    style="--hero-background-image: url('{{ asset('images/barkalin-hero1.jpg') }}')"
>
    <div class="container hero__content home-hero__content">
        <h1 data-reveal>Bergerak Bersama Membangun Energi untuk Masa Depan.</h1>
        <div class="home-hero__lower">
            <dl class="home-hero__stats" aria-label="Informasi perusahaan">
                <div data-reveal>
                    <dt>2011</dt>
                    <dd>Tahun berdiri</dd>
                </div>
                <div data-reveal>
                    <dt>3</dt>
                    <dd>Kegiatan utama</dd>
                </div>
                <div data-reveal>
                    <dt>Surabaya</dt>
                    <dd>Kantor pusat</dd>
                </div>
            </dl>
            <p data-reveal>
                CV Barkalin Artha Prima merupakan perusahaan yang bergerak di bidang pertambangan dan energi,
                berkomitmen menghadirkan solusi yang mendukung kebutuhan industri.
            </p>
        </div>
    </div>
</section>

<section class="section home-about" id="tentang-kami">
    <div class="container home-about__grid">
        <div class="home-about__content" data-reveal>
            <span class="eyebrow">TENTANG KAMI</span>
            <h2>Mitra untuk masa depan energi yang bertanggung jawab.</h2>
            <p>
                Kami menyadari bahwa batubara merupakan salah satu Sumber Daya Alam yang luar biasa manfaatnya,
                oleh karena itu diperlukan komitmen tinggi untuk memanfaatkan batubara dengan bijaksana.
                Didukung rasa percaya yang diberikan masyarakat kepada kami, pada tanggal 29 Maret 2011 kami
                mendirikan CV Barkalin Artha Prima, sebuah kegiatan usaha yang bergerak khusus di bidang
                pertambangan dan energy.
            </p>
            <a href="{{ route('about') }}" class="btn btn--accent home-about__link">
                Tentang Kami Selengkapnya <span aria-hidden="true">→</span>
            </a>
        </div>
        <figure class="home-about__visual" data-reveal>
            <img
                class="home-about__image"
                src="{{ asset('images/barkalin-hero.jpg') }}"
                alt="Truk tambang bekerja di area pertambangan"
                loading="eager"
            >
            <figcaption><span>01</span> Mendukung rantai pasok energi Indonesia</figcaption>
        </figure>
    </div>
</section>

<section class="section home-grades">
    <div class="container">
        <div class="home-section-heading" data-reveal>
            <span class="eyebrow">GRADE BATU BARA</span>
            <h2>Tersedia dalam Berbagai Grade Sesuai Kebutuhan Industri</h2>
            <p>Kenali kategori produk kami dan temukan informasi yang sesuai dengan kebutuhan operasional Anda.</p>
        </div>
        <div class="home-grade-grid">
            @foreach ($coalGrades as $grade)
                @php
                    $details = [
                        'subtitle' => $grade->subtitle,
                        'calorific_value' => $grade->calorific_value,
                        'description' => $grade->description,
                    ];
                @endphp
                <button
                    class="home-image-card"
                    type="button"
                    data-detail-card
                    data-title="{{ $grade->name }}"
                    data-category="{{ $grade->category }}"
                    data-image="{{ asset('images/' . $grade->image) }}"
                    data-grade-details="{{ json_encode($details, JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_TAG | JSON_HEX_AMP) }}"
                    aria-label="Lihat detail {{ $grade->name }}"
                    data-reveal
                >
                    <img src="{{ asset('images/' . $grade->image) }}" alt="{{ $grade->name }}" loading="lazy">
                    <span class="home-image-card__overlay">
                        <span class="home-image-card__title">{{ $grade->name }}</span>
                        <span class="home-image-card__action">Lihat Selengkapnya <span aria-hidden="true">→</span></span>
                    </span>
                </button>
            @endforeach
        </div>
    </div>
</section>

<section class="section home-services">
    <div class="container">
        <div class="home-section-heading home-activities__intro" data-reveal>
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
                <article class="home-activity{{ $activity->reverse ? ' home-activity--reverse' : '' }}" data-reveal>
                    <img
                        src="{{ asset('images/' . $activity->image) }}"
                        alt="{{ $activity->title }}"
                        loading="lazy"
                    >
                    <div class="home-activity__content">
                        <span class="home-activity__number">{{ $activity->number }}</span>
                        <h3>{{ $activity->title }}</h3>
                        <p style="white-space: pre-line;">{{ $activity->description }}</p>
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
            <div id="home-detail-description" data-modal-description></div>
        </div>
    </section>
</div>

<section class="section home-clients">
    <div class="container">
        <div class="home-section-heading" data-reveal>
            <span class="eyebrow">OUR CLIENTS</span>
            <h2>Trusted by Leading Companies</h2>
            <p>Dipercaya oleh mitra dari beragam sektor industri.</p>
        </div>
        <div class="home-client-list" aria-label="Logo klien">
            @foreach ($clientPartners as $client)
                <div class="home-client-logo" title="{{ $client->name }}{{ $client->industry ? ' - ' . $client->industry : '' }}" data-reveal>
                    <img src="{{ asset('images/' . $client->logo) }}" alt="{{ $client->name }}" loading="lazy">
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
