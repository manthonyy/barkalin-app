
@extends('layouts.app')

@section('title', 'Tentang Kami | ' . config('barkalin.name'))

@section('content')
<section class="page-banner">
    <div class="container">
        <span class="eyebrow">TENTANG PERUSAHAAN</span>
        <h1>Mengenal Barkalin</h1>
        <p>
            Membangun kemitraan melalui integritas,
            profesionalisme, dan komitmen terhadap kualitas.
        </p>
    </div>
</section>

<section class="section">
    <div class="container intro-grid">
        <div>
            <span class="eyebrow">SIAPA KAMI</span>
            <h2>{{ config('barkalin.name') }}</h2>
        </div>

        <div>
            <p>
                Kami adalah perusahaan yang berfokus pada sektor
                pertambangan dan energi. Kami percaya bahwa
                kemitraan yang kuat dibangun melalui komunikasi
                yang terbuka, tanggung jawab, dan kepercayaan.
            </p>
            <p>
                Melalui pendekatan profesional, kami berupaya
                menciptakan hubungan bisnis yang memberikan
                nilai bagi seluruh mitra.
            </p>
        </div>
    </div>
</section>

<section class="section section--dark">
    <div class="container">
        <span class="eyebrow">PRINSIP KAMI</span>
        <h2>Landasan dalam setiap langkah.</h2>

        <div class="card-grid">
            <article class="info-card">
                <h3>Integritas</h3>
                <p>Menjaga kepercayaan dan bertindak secara bertanggung jawab.</p>
            </article>

            <article class="info-card">
                <h3>Profesionalisme</h3>
                <p>Mengutamakan kualitas dan ketelitian dalam bekerja.</p>
            </article>

            <article class="info-card">
                <h3>Kemitraan</h3>
                <p>Membangun hubungan yang saling mendukung dan berjangka panjang.</p>
            </article>
        </div>
    </div>
</section>
@endsection
