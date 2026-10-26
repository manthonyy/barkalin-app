
@extends('layouts.app')

@section('title', 'Bidang Usaha | ' . config('barkalin.name'))

@section('content')
<section class="page-banner">
    <div class="container">
        <span class="eyebrow">BIDANG USAHA</span>
        <h1>Kapabilitas Bisnis Kami</h1>
        <p>
            Mengenal fokus kegiatan dan peluang kemitraan Barkalin.
        </p>
    </div>
</section>

<section class="section">
    <div class="container card-grid">
        <article class="info-card">
            <span class="card-number">01</span>
            <h2>Pertambangan</h2>
            <p>
                Fokus pada dukungan terhadap kebutuhan sektor
                pertambangan dan pengembangan peluang kerja sama.
            </p>
        </article>

        <article class="info-card">
            <span class="card-number">02</span>
            <h2>Energi</h2>
            <p>
                Menjalin kemitraan untuk mendukung kebutuhan
                dan perkembangan sektor energi.
            </p>
        </article>

        <article class="info-card">
            <span class="card-number">03</span>
            <h2>Komoditas</h2>
            <p>
                Mengembangkan peluang perdagangan komoditas
                melalui hubungan bisnis yang profesional.
            </p>
        </article>
    </div>
</section>

<section class="section section--dark">
    <div class="container">
        <span class="eyebrow">PELUANG KERJA SAMA</span>
        <h2>Temukan peluang bersama kami.</h2>
        <p>
            Hubungi kami untuk mendiskusikan kebutuhan dan
            ruang lingkup kerja sama yang sesuai.
        </p>
        <a href="{{ route('contact') }}" class="btn btn--gold">
            Diskusikan Kerja Sama
        </a>
    </div>
</section>
@endsection
