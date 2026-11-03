@extends('layouts.app')

@section('title', 'Tentang Kami | ' . config('barkalin.name'))
@section('description', 'Profil CV Barkalin Artha Prima, didirikan sejak 29 Maret 2011 di Surabaya sebagai penyedia batubara berkualitas dengan kepatuhan legalitas penuh.')
@section('body_class', 'page-inner page-about')

@section('content')
<section
    class="inner-hero inner-hero--about"
    style="--inner-hero-image: url('{{ asset('images/Barkalin-Banner-1i.jpg') }}')"
>
    <div class="container inner-hero__content" data-reveal>
        <span class="eyebrow">TENTANG KAMI</span>
        <h1>Mengenal Lebih Dekat Barkalin</h1>
        <p>Bergerak di bidang pertambangan dan energi sejak {{ config('barkalin.founded') }}.</p>
    </div>
</section>

<section class="inner-section inner-intro">
    <div class="container inner-intro__grid">
        <div data-reveal>
            <span class="eyebrow">CV BARKALIN ARTHA PRIMA</span>
            <h2>Mitra untuk pasokan energi yang bertanggung jawab.</h2>
        </div>
        <div class="inner-copy" data-reveal>
            <p>
                Didirikan pada tanggal <strong>{{ config('barkalin.founded') }}</strong> di Surabaya,
                <strong>{{ config('barkalin.name') }}</strong> beroperasi di bidang pertambangan dan energi
                dengan fokus utama pada perdagangan serta distribusi batubara.
            </p>
            <p>
                Kami menyadari bahwa batubara merupakan salah satu sumber energi strategis nasional.
                Karena itu, kami berkomitmen untuk mengelola pemanfaatannya secara bertanggung jawab dan profesional.
            </p>
        </div>
    </div>
</section>

<section class="inner-story">
    <div class="inner-story__image" role="img" aria-label="Kendaraan bekerja di area pertambangan"></div>
    <div class="inner-story__content" data-reveal>
        <span class="eyebrow">SEJARAH & KOMITMEN</span>
        <h2>Berpengalaman dalam perdagangan dan distribusi batu bara.</h2>
        <p>
            Sejak berdiri, Barkalin menjalankan kegiatan usaha di bidang pertambangan dan energi.
            Kepatuhan legalitas, perhatian pada kualitas, dan kemitraan jangka panjang menjadi bagian
            dari pendekatan perusahaan.
        </p>
        <a href="{{ route('contact') }}" class="text-link">Hubungi kami <span aria-hidden="true">→</span></a>
    </div>
</section>

<section class="inner-section inner-values">
    <div class="container">
        <div class="inner-section__heading" data-reveal>
            <span class="eyebrow">VISI & MISI</span>
            <h2>Arah dan komitmen perusahaan.</h2>
        </div>
        <div class="inner-value-list">
            <article data-reveal>
                <span>01</span>
                <div>
                    <h3>Vision</h3>
                    <p>Menjadi perusahaan pertambangan batubara terbaik di Indonesia yang memfokuskan diri pada laju pertumbuhan dengan membangun kompetensi melalui pengembangan karyawan, kinerja keuangan yang kuat, dan keuntungan yang solid untuk laju perputaran ekonomi perusahaan kami.</p>
                </div>
            </article>
            <article data-reveal>
                <span>02</span>
                <div>
                    <h3>Mission</h3>
                    <p>Memberikan kualitas produk dan pengiriman terbaik terhadap pelanggan kami dengan mempertahankan kemampuan Manajemen Lingkungan dan Kemampuan Memperbaiki Lingkungan. Perusahaan bertanggung jawab dalam sosial kemasyarakatan dan beroperasi dengan bimbingan Analisis Dampak Lingkungan.</p>
                    <p>Sebagai perusahaan pertambangan yang profesional, kami sangat sadar bahwa dalam beroperasi pentingnya pendekatan ramah lingkungan dan amannya lokasi untuk para tenaga ahli dalam mengelola tambang dapat menjaga kelangsungan usaha dan perusahaan dalam jangka panjang.</p>
                </div>
            </article>
        </div>
    </div>
</section>

<section class="inner-cta" style="--inner-cta-image: url('{{ asset('images/negosiasi.jpg') }}')">
    <div class="container inner-cta__content" data-reveal>
        <div>
            <span class="eyebrow">KEMITRAAN</span>
            <h2>Mari bangun kerja sama bersama kami.</h2>
        </div>
        <a href="{{ route('contact') }}" class="btn btn--accent">Hubungi Kami <span aria-hidden="true">→</span></a>
    </div>
</section>
@endsection
