@extends('layouts.app')

@section('title', 'Tentang Kami | ' . config('barkalin.name'))
@section('description', 'Profil CV Barkalin Artha Prima, didirikan sejak 29 Maret 2011 di Surabaya sebagai penyedia batubara berkualitas dengan kepatuhan legalitas penuh.')

@section('content')
<section class="page-banner">
    <div class="container">
        <span class="eyebrow">TENTANG PERUSAHAAN</span>
        <h1>Mengenal CV Barkalin Artha Prima</h1>
        <p>
            Membangun kemitraan energi jangka panjang melalui integritas, kepatuhan legalitas, dan komitmen terhadap kualitas sejak 2011.
        </p>
    </div>
</section>

<section class="section">
    <div class="container intro-grid">
        <div>
            <span class="eyebrow">SEJARAH & KOMITMEN</span>
            <h2>Dedikasi untuk Pasokan Energi Andal</h2>
        </div>

        <div>
            <p>
                Didirikan pada tanggal <strong>{{ config('barkalin.founded') }}</strong> di Surabaya, <strong>{{ config('barkalin.name') }}</strong> beroperasi di bidang pertambangan dan energi dengan fokus utama pada perdagangan serta distribusi batubara berkualitas.
            </p>
            <p>
                Kami menyadari bahwa batubara merupakan salah satu sumber energi strategis nasional. Oleh karena itu, kami berkomitmen untuk mengelola pemanfaatannya secara bertanggung jawab dan profesional, dengan memastikan setiap metrik pasokan berasal dari konsesi tambang resmi pemerintah yang memiliki perizinan lengkap (IUP, dokumen lingkungan UKL-UPL, dan sertifikasi mutu).
            </p>
        </div>
    </div>
</section>

<section class="section section--dark">
    <div class="container">
        <span class="eyebrow">NILAI & PRINSIP KAMI</span>
        <h2>Landasan Utama dalam Setiap Langkah</h2>

        <div class="card-grid" style="margin-top: 32px;">
            <article class="info-card">
                <span class="card-number">01</span>
                <h3>Legalitas & Kepatuhan</h3>
                <p>Seluruh pasokan batubara diverifikasi legalitasnya dari tambang berizin resmi pemerintah dengan kepatuhan penuh terhadap regulasi lingkungan.</p>
            </article>

            <article class="info-card">
                <span class="card-number">02</span>
                <h3>Jaminan Kualitas (QC)</h3>
                <p>Pemeriksaan ketat terhadap kalori (GAR), total moisture, dan ash content melalui uji laboratorium independen terakreditasi.</p>
            </article>

            <article class="info-card">
                <span class="card-number">03</span>
                <h3>Keandalan Distribusi</h3>
                <p>Dukungan fasilitas stockpile berkapasitas besar di Osowilangon dan armada laut tongkang (barge) memastikan kontinuitas pasokan klien tanpa henti.</p>
            </article>
        </div>
    </div>
</section>

<section class="section">
    <div class="container intro-grid">
        <div>
            <span class="eyebrow">JARINGAN & LOKASI</span>
            <h2>Operasional Berbasis di Surabaya</h2>
        </div>
        <div>
            <p>
                Surabaya sebagai hub maritim dan industri di Jawa Timur menjadi titik pusat logistik kami. Dengan kantor pusat di <strong>{{ config('barkalin.office_address') }}</strong> dan fasilitas stockpile di <strong>{{ config('barkalin.stockpile_address') }}</strong>, kami memiliki akses strategis ke jalur darat dan pelabuhan laut utama.
            </p>
            <div style="margin-top: 24px;">
                <a href="{{ route('business') }}" class="btn btn--gold" style="margin-right: 12px;">Lihat Katalog Produk</a>
                <a href="{{ route('contact') }}" class="btn btn--outline">Hubungi Kami</a>
            </div>
        </div>
    </div>
</section>
@endsection
