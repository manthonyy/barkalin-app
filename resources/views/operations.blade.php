@extends('layouts.app')

@section('title', 'Operasional & Fasilitas | ' . config('barkalin.name'))
@section('description', 'Informasi operasional dan fasilitas CV Barkalin Artha Prima.')
@section('body_class', 'page-inner page-operations')

@section('content')
<section
    class="inner-hero inner-hero--operations"
    style="--inner-hero-image: url('{{ asset('images/Jetty-update-1024x446.jpg') }}')"
>
    <div class="container inner-hero__content" data-reveal>
        <span class="eyebrow">OPERASIONAL</span>
        <h1>Menghubungkan Setiap Tahap Operasional</h1>
        <p>Koordinasi penanganan batu bara dari sumber, penyimpanan, hingga proses distribusi.</p>
    </div>
</section>

<section class="inner-section operations-overview">
    <div class="container operations-overview__grid">
        <div data-reveal>
            <span class="eyebrow">PENDEKATAN OPERASIONAL</span>
            <h2>Rantai pasok yang tertata, dari awal hingga tujuan.</h2>
        </div>
        <p data-reveal>
            Keandalan pasokan energi bergantung pada koordinasi logistik dan penanganan material.
            Barkalin mendukung rantai pasok batu bara melalui kegiatan pertambangan, shipment, dan stockpile.
        </p>
    </div>
</section>

<section class="operations-activities">
    <div class="container">
        @foreach ($facilities as $facility)
            <article class="operations-activity{{ $facility->reverse ? ' operations-activity--reverse' : '' }}" data-reveal>
                <div class="operations-activity__image">
                    <img src="{{ asset('images/' . $facility->image) }}" alt="{{ $facility->title }}" loading="lazy">
                    <span>{{ $facility->number }}</span>
                </div>
                <div class="operations-activity__content">
                    <span class="eyebrow">TAHAP {{ $facility->number }}</span>
                    <h2>{{ $facility->title }}</h2>
                    <p style="white-space: pre-line;">{{ $facility->description }}</p>
                </div>
            </article>
        @endforeach
    </div>
</section>
@endsection
