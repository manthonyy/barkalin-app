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
        @foreach ($activities as $activity)
            @php
                $activityImage = $activity['image'];
            @endphp
            <article class="operations-activity{{ $activity['reverse'] ? ' operations-activity--reverse' : '' }}" data-reveal>
                <div class="operations-activity__image">
                    <img src="{{ asset('images/' . $activityImage) }}" alt="{{ $activity['image_alt'] }}" loading="lazy">
                    <span>{{ $activity['number'] }}</span>
                </div>
                <div class="operations-activity__content">
                    <span class="eyebrow">TAHAP {{ $activity['number'] }}</span>
                    <h2>{{ $activity['title'] }}</h2>
                    @foreach ($activity['paragraphs'] as $paragraph)
                        <p>{{ $paragraph }}</p>
                    @endforeach
                </div>
            </article>
        @endforeach
    </div>
</section>

@if ($facilities->isNotEmpty())
    <section class="inner-section operations-facilities">
        <div class="container">
            <div class="inner-section__heading" data-reveal>
                <span class="eyebrow">FASILITAS</span>
                <h2>Lokasi operasional yang terdaftar.</h2>
            </div>
            <div class="operations-facility-list">
                @foreach ($facilities as $facility)
                    <article data-reveal>
                        <span>{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                        <div>
                            <small>{{ $facility->type }}</small>
                            <h3>{{ $facility->name }}</h3>
                            <p>{{ $facility->location }}</p>
                            <p>{{ $facility->description }}</p>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
@endif

@endsection
