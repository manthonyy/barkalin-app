
@extends('layouts.app')

@section('title', 'Operasional | ' . config('barkalin.name'))

@section('content')
<section class="page-banner">
    <div class="container">
        <span class="eyebrow">OPERASIONAL</span>
        <h1>Berorientasi pada Kualitas</h1>
        <p>
            Pendekatan kerja yang mengutamakan perencanaan,
            koordinasi, dan tanggung jawab.
        </p>
    </div>
</section>

<section class="section">
    <div class="container">
        <span class="eyebrow">PENDEKATAN KAMI</span>
        <h2>Setiap proses memiliki tujuan.</h2>

        <div class="card-grid">
            <article class="info-card">
                <span class="card-number">01</span>
                <h3>Perencanaan</h3>
                <p>
                    Memahami kebutuhan dan menyelaraskan
                    ruang lingkup pekerjaan bersama mitra.
                </p>
            </article>

            <article class="info-card">
                <span class="card-number">02</span>
                <h3>Koordinasi</h3>
                <p>
                    Menjaga komunikasi agar setiap pihak
                    memahami tanggung jawabnya.
                </p>
            </article>

            <article class="info-card">
                <span class="card-number">03</span>
                <h3>Evaluasi</h3>
                <p>
                    Meninjau proses dan menjaga komitmen
                    terhadap kualitas pekerjaan.
                </p>
            </article>
        </div>
    </div>
</section>

<section class="section section--dark">
    <div class="container">
        <h2>Mengutamakan kemitraan yang bertanggung jawab.</h2>
        <p>
            Kami terus berupaya membangun proses kerja yang
            profesional, terkoordinasi, dan dapat dipertanggungjawabkan.
        </p>
        <a href="{{ route('contact') }}" class="btn btn--gold">
            Hubungi Tim Kami
        </a>
    </div>
</section>
@endsection
