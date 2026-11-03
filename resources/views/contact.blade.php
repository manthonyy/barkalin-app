@extends('layouts.app')

@section('title', 'Hubungi Kami | ' . config('barkalin.name'))
@section('description', 'Hubungi CV Barkalin Artha Prima untuk penawaran batubara, pasokan industri, dan informasi operasional di Surabaya.')
@section('body_class', 'page-inner page-contact')

@section('content')
<section class="contact-hero">
    <div class="container contact-hero__content" data-reveal>
        <span class="eyebrow">HUBUNGI KAMI</span>
        <h1>Mari Mulai Percakapan.</h1>
        <p>Sampaikan pertanyaan atau kebutuhan Anda. Tim Barkalin siap membantu.</p>
    </div>
</section>

<section class="inner-section contact-main">
    <div class="container contact-grid">
        <aside class="contact-information" data-reveal>
            <span class="eyebrow">INFORMASI KONTAK</span>
            <h2>Terhubung dengan Barkalin.</h2>
            <p>Silakan hubungi kami melalui informasi berikut atau kunjungi fasilitas operasional kami.</p>

            <div class="contact-information__items">
                @if (config('barkalin.office_address'))
                    <section>
                        <span class="contact-information__index">01</span>
                        <div>
                            <h3>Kantor Pusat</h3>
                            <address>{{ config('barkalin.office_address') }}</address>
                        </div>
                    </section>
                @endif
                @if (config('barkalin.stockpile_address'))
                    <section>
                        <span class="contact-information__index">02</span>
                        <div>
                            <h3>Stockpile</h3>
                            <address>{{ config('barkalin.stockpile_address') }}</address>
                        </div>
                    </section>
                @endif
                @if (config('barkalin.phone') && config('barkalin.phone_tel'))
                    <section>
                        <span class="contact-information__index">03</span>
                        <div>
                            <h3>Telepon</h3>
                            <a href="tel:{{ config('barkalin.phone_tel') }}">{{ config('barkalin.phone') }}</a>
                        </div>
                    </section>
                @endif
                @if (config('barkalin.fax'))
                    <section>
                        <span class="contact-information__index">04</span>
                        <div>
                            <h3>Fax</h3>
                            <span>{{ config('barkalin.fax') }}</span>
                        </div>
                    </section>
                @endif
                @if (config('barkalin.email'))
                    <section>
                        <span class="contact-information__index">05</span>
                        <div>
                            <h3>Email Resmi</h3>
                            <a href="mailto:{{ config('barkalin.email') }}">{{ config('barkalin.email') }}</a>
                        </div>
                    </section>
                @endif
            </div>
        </aside>

        <div class="contact-card" data-reveal>
            <span class="eyebrow">KONSULTASI & PENAWARAN</span>
            <h2>Pertanyaan & Kerja Sama Bisnis</h2>
            <p>
                Untuk permohonan spesifikasi batubara, pengujian mutu kalori, atau penawaran pasokan industri berskala besar, silakan hubungi perwakilan kami secara langsung melalui saluran komunikasi resmi di bawah ini.
            </p>

            <div style="margin-top: 32px; display: flex; flex-direction: column; gap: 16px;">
                <a href="mailto:{{ config('barkalin.email') }}" class="btn btn--accent" style="justify-content: center;">
                    Kirim Email ke {{ config('barkalin.email') }} <span aria-hidden="true">→</span>
                </a>
                @if (config('barkalin.phone_tel'))
                    <a href="tel:{{ config('barkalin.phone_tel') }}" class="btn btn--outline" style="justify-content: center;">
                        Hubungi via Telepon ({{ config('barkalin.phone') }})
                    </a>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
