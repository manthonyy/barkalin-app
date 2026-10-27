@extends('layouts.app')

@section('title', 'Beranda | ' . config('barkalin.name'))
@section('description', config('barkalin.description'))
@section('body_class', 'home-page')

@section('content')
@php
    $coalGrades = [
        [
            'title' => 'High Grade',
            'category' => 'COAL GRADES',
            'image' => 'highgrade.jpg',
            'description' => 'High Grade merupakan kategori batu bara dengan nilai kalor relatif tinggi yang dapat digunakan untuk berbagai kebutuhan industri dan pembangkit energi sesuai spesifikasinya. Karakteristik batu bara pada kategori ini perlu dinilai berdasarkan hasil pengujian, termasuk nilai kalor, kadar air, abu, sulfur, serta parameter kualitas lainnya.',
        ],
        [
            'title' => 'Medium Grade',
            'category' => 'COAL GRADES',
            'image' => 'mediumgrade.jpg',
            'description' => 'Medium Grade merupakan kategori batu bara dengan karakteristik kualitas yang berada di tingkat menengah. Pemanfaatannya dapat disesuaikan dengan kebutuhan operasional industri dan spesifikasi teknis yang dipersyaratkan oleh pembeli. Pemilihan batu bara tetap perlu mempertimbangkan hasil analisis kualitas dan kesesuaian penggunaannya.',
        ],
        [
            'title' => 'Low Grade',
            'category' => 'COAL GRADES',
            'image' => 'lowgrade.jpg',
            'description' => 'Low Grade merupakan kategori batu bara dengan nilai kalor relatif lebih rendah dibandingkan kategori dengan kualitas lebih tinggi. Batu bara ini dapat dimanfaatkan untuk kebutuhan tertentu sesuai karakteristiknya, teknologi yang digunakan, dan persyaratan pembeli. Pengujian kualitas tetap diperlukan untuk menentukan kesesuaian pemanfaatannya.',
        ],
    ];
@endphp

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
            <article class="home-activity">
                <img src="{{ asset('images/mining.jpg') }}" alt="Alat berat dan aktivitas di area pertambangan batu bara" loading="lazy">
                <div class="home-activity__content">
                    <span class="home-activity__number">01</span>
                    <h3>Mining</h3>
                    <p>
                        Sumber batu bara CV. Barkalin Artha Prima berasal dari tambang yang mempunyai izin dari pemerintah
                        beserta legalitas-legalitas yang telah memenuhi syarat. Dengan latar belakang pengetahuan dan
                        keahlian logistik, kami menerapkan standar yang tinggi dan ketat dalam menyeleksi kuantitas dan kualitas.
                    </p>
                    <p>
                        Legalitas sumber menjadi pertimbangan penting dalam rantai pasok. Seleksi sumber dan kesesuaian
                        material, disertai pemeriksaan kuantitas serta kualitas, membantu memastikan kebutuhan mitra
                        dapat dipertimbangkan dengan baik. Koordinasi logistik juga mendukung perencanaan distribusi
                        dari sumber menuju tahap pengiriman.
                    </p>
                </div>
            </article>

            <article class="home-activity home-activity--reverse">
                <img src="{{ asset('images/shipment.jpg') }}" alt="Pengangkutan batu bara melalui jalur laut" loading="lazy">
                <div class="home-activity__content">
                    <span class="home-activity__number">02</span>
                    <h3>Shipment</h3>
                    <p>
                        Untuk sarana pemasaran dan pendistribusiannya, batu bara memerlukan alat transportasi laut sebagai
                        alat pengangkutannya. Dalam pengangkutan tertentu, tongkang digunakan untuk membawa material dan
                        kapal tunda membantu menarik atau mendorong tongkang.
                    </p>
                    <p>
                        Transportasi laut berperan dalam menghubungkan titik pengiriman dan tujuan distribusi. Koordinasi
                        pengangkutan, penyesuaian jadwal, dan penanganan material menjadi bagian penting agar proses
                        pengiriman dapat berjalan tertata. Penggunaan sarana angkut disesuaikan dengan kebutuhan dan
                        pihak-pihak yang terlibat dalam pengiriman.
                    </p>
                </div>
            </article>

            <article class="home-activity">
                <img src="{{ asset('images/coal.jpg') }}" alt="Tumpukan batu bara untuk persiapan penanganan dan distribusi" loading="lazy">
                <div class="home-activity__content">
                    <span class="home-activity__number">03</span>
                    <h3>Stockpile</h3>
                    <p>
                        Stockpile merupakan area yang digunakan untuk menumpuk dan menyimpan batu bara sebelum diproses
                        lebih lanjut atau dikirim kepada pembeli. Pengelolaan stockpile yang baik membantu mendukung
                        penanganan material dan persiapan distribusi.
                    </p>
                    <p>
                        Secara umum, pengelolaan area penyimpanan meliputi penumpukan dan penanganan material secara
                        teratur. Jika diperlukan, batu bara dapat dipisahkan berdasarkan kategori atau spesifikasi
                        sebelum dipersiapkan untuk pengiriman. Penataan yang baik membantu menjaga kelancaran proses
                        penanganan tanpa mengasumsikan kapasitas maupun fasilitas tertentu.
                    </p>
                </div>
            </article>
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
