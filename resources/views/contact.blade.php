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
            <p>Silakan hubungi kami melalui informasi berikut atau kirim pesan menggunakan formulir.</p>

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
                @if (config('barkalin.email'))
                    <section>
                        <span class="contact-information__index">04</span>
                        <div>
                            <h3>Email</h3>
                            <a href="mailto:{{ config('barkalin.email') }}">{{ config('barkalin.email') }}</a>
                        </div>
                    </section>
                @endif
            </div>
        </aside>

        <div class="contact-form-panel" data-reveal>
            <div class="contact-form-panel__heading">
                <span class="eyebrow">KIRIM PESAN</span>
                <h2>Ceritakan kebutuhan Anda.</h2>
            </div>

            @if (session('success'))
                <div class="notice notice--success" role="status">{{ session('success') }}</div>
            @endif

            @if ($errors->any())
                <div class="notice notice--error" role="alert">
                    Mohon periksa kembali data yang kamu masukkan.
                </div>
            @endif

            <form action="{{ route('contact.submit') }}" method="POST" class="contact-form">
                @csrf

                <div class="contact-form__row">
                    <div class="contact-form__field">
                        <label for="name">Nama lengkap *</label>
                        <input id="name" name="name" type="text" value="{{ old('name') }}" required maxlength="100" autocomplete="name">
                        @error('name')<small>{{ $message }}</small>@enderror
                    </div>
                    <div class="contact-form__field">
                        <label for="email">Email *</label>
                        <input id="email" name="email" type="email" value="{{ old('email') }}" required maxlength="150" autocomplete="email">
                        @error('email')<small>{{ $message }}</small>@enderror
                    </div>
                </div>

                <div class="contact-form__row">
                    <div class="contact-form__field">
                        <label for="phone">Nomor telepon</label>
                        <input id="phone" name="phone" type="text" value="{{ old('phone') }}" maxlength="30" placeholder="Contoh: 08123456789" autocomplete="tel">
                    </div>
                    <div class="contact-form__field">
                        <label for="company">Nama perusahaan</label>
                        <input id="company" name="company" type="text" value="{{ old('company') }}" maxlength="150" placeholder="Nama perusahaan" autocomplete="organization">
                    </div>
                </div>

                <div class="contact-form__field">
                    <label for="subject">Subjek *</label>
                    <input id="subject" name="subject" type="text" value="{{ old('subject') }}" required maxlength="150" placeholder="Subjek pesan">
                    @error('subject')<small>{{ $message }}</small>@enderror
                </div>

                <div class="contact-form__field">
                    <label for="message">Pesan / Rincian Kebutuhan *</label>
                    <textarea id="message" name="message" rows="5" required maxlength="5000" placeholder="Jelaskan kebutuhan Anda...">{{ old('message') }}</textarea>
                    @error('message')<small>{{ $message }}</small>@enderror
                </div>

                <button type="submit" class="btn btn--accent">
                    Kirim Pesan <span aria-hidden="true">→</span>
                </button>
            </form>
        </div>
    </div>
</section>
@endsection
