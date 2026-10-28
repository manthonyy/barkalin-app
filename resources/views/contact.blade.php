@extends('layouts.app')

@section('title', 'Hubungi Kami | ' . config('barkalin.name'))
@section('description', 'Hubungi CV Barkalin Artha Prima untuk penawaran batubara, pasokan industri, dan informasi operasional di Surabaya.')

@section('content')
<section class="page-banner">
    <div class="container">
        <span class="eyebrow">HUBUNGI KAMI</span>
        <h1>Mari Mulai Kerja Sama</h1>
        <p>
            Sampaikan pertanyaan, permintaan spesifikasi, atau kebutuhan pasokan batubara industri Anda kepada tim kami.
        </p>
    </div>
</section>

<section class="section">
    <div class="container contact-grid">
        <div>
            <span class="eyebrow">INFORMASI KONTAK</span>
            <h2>Kami siap melayani kebutuhan Anda.</h2>
            <p>
                Silakan isi formulir atau hubungi kantor perwakilan kami secara langsung melalui detail kontak di bawah ini.
            </p>

            <div style="margin-top: 32px; display: flex; flex-direction: column; gap: 20px;">
                <div>
                    <h3 style="font-size: 1.05rem; margin-bottom: 4px; color: var(--color-gold);">Kantor Pusat</h3>
                    <p style="margin: 0;">{{ config('barkalin.office_address') }}</p>
                </div>

                <div>
                    <h3 style="font-size: 1.05rem; margin-bottom: 4px; color: var(--color-gold);">Fasilitas Stockpile</h3>
                    <p style="margin: 0;">{{ config('barkalin.stockpile_address') }}</p>
                </div>

                <div>
                    <h3 style="font-size: 1.05rem; margin-bottom: 4px; color: var(--color-gold);">Telepon & Fax</h3>
                    <p style="margin: 0;">
                        Telp: <a href="tel:{{ config('barkalin.phone_tel') }}" style="text-decoration: underline;">{{ config('barkalin.phone') }}</a><br>
                        Fax: {{ config('barkalin.fax') }}
                    </p>
                </div>

                <div>
                    <h3 style="font-size: 1.05rem; margin-bottom: 4px; color: var(--color-gold);">Email Resmi</h3>
                    <p style="margin: 0;">
                        <a href="mailto:{{ config('barkalin.email') }}" style="text-decoration: underline;">{{ config('barkalin.email') }}</a>
                    </p>
                </div>
            </div>
        </div>

        <div>
            @if (session('success'))
                <div class="notice notice--success" style="padding: 16px; margin-bottom: 24px; background: #e6f4ea; border-left: 4px solid #137333; color: #137333; border-radius: 4px;">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="notice notice--error" style="padding: 16px; margin-bottom: 24px; background: #fce8e6; border-left: 4px solid #c5221f; color: #c5221f; border-radius: 4px;">
                    Mohon periksa kembali data yang kamu masukkan.
                </div>
            @endif

            <form action="{{ route('contact.submit') }}" method="POST" class="contact-form">
                @csrf

                <label for="name">Nama lengkap *</label>
                <input id="name" name="name" type="text"
                    value="{{ old('name') }}" required maxlength="100">
                @error('name')
                    <small style="color: #c5221f;">{{ $message }}</small>
                @enderror

                <label for="email">Email *</label>
                <input id="email" name="email" type="email"
                    value="{{ old('email') }}" required maxlength="150">
                @error('email')
                    <small style="color: #c5221f;">{{ $message }}</small>
                @enderror

                <label for="phone">Nomor telepon</label>
                <input id="phone" name="phone" type="text"
                    value="{{ old('phone') }}" maxlength="30" placeholder="Contoh: 08123456789">

                <label for="company">Nama perusahaan</label>
                <input id="company" name="company" type="text"
                    value="{{ old('company') }}" maxlength="150" placeholder="Contoh: PT Industri Makmur">

                <label for="subject">Subjek *</label>
                <input id="subject" name="subject" type="text"
                    value="{{ old('subject') }}" required maxlength="150" placeholder="Contoh: Permintaan Penawaran Batubara">

                <label for="message">Pesan / Rincian Kebutuhan *</label>
                <textarea id="message" name="message" rows="5"
                    required maxlength="5000" placeholder="Jelaskan kebutuhan volume (MT), spesifikasi kalori (GAR), atau jadwal pengiriman..."></textarea>
                @error('message')
                    <small style="color: #c5221f;">{{ $message }}</small>
                @enderror

                <button type="submit" class="btn btn--gold">
                    Kirim Pesan
                </button>
            </form>
        </div>
    </div>
</section>
@endsection
