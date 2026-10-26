
@extends('layouts.app')

@section('title', 'Hubungi Kami | ' . config('barkalin.name'))

@section('content')
<section class="page-banner">
    <div class="container">
        <span class="eyebrow">HUBUNGI KAMI</span>
        <h1>Mari Mulai Percakapan.</h1>
        <p>
            Sampaikan pertanyaan atau peluang kerja sama
            melalui formulir berikut.
        </p>
    </div>
</section>

<section class="section">
    <div class="container contact-grid">
        <div>
            <span class="eyebrow">INFORMASI KONTAK</span>
            <h2>Kami siap mendengar kebutuhan Anda.</h2>
            <p>
                Isi formulir dengan informasi yang sesuai
                agar tim kami dapat memahami pertanyaan Anda.
            </p>
            <p>
                Email: {{ config('barkalin.email') }}
            </p>
        </div>

        <div>
            @if (session('success'))
                <div class="notice notice--success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="notice notice--error">
                    Mohon periksa kembali data yang kamu masukkan.
                </div>
            @endif

            <form action="{{ route('contact.submit') }}" method="POST" class="contact-form">
                @csrf

                <label for="name">Nama lengkap *</label>
                <input id="name" name="name" type="text"
                    value="{{ old('name') }}" required maxlength="100">
                @error('name')
                    <small>{{ $message }}</small>
                @enderror

                <label for="email">Email *</label>
                <input id="email" name="email" type="email"
                    value="{{ old('email') }}" required maxlength="150">
                @error('email')
                    <small>{{ $message }}</small>
                @enderror

                <label for="phone">Nomor telepon</label>
                <input id="phone" name="phone" type="text"
                    value="{{ old('phone') }}" maxlength="30">

                <label for="company">Nama perusahaan</label>
                <input id="company" name="company" type="text"
                    value="{{ old('company') }}" maxlength="150">

                <label for="subject">Subjek *</label>
                <input id="subject" name="subject" type="text"
                    value="{{ old('subject') }}" required maxlength="150">

                <label for="message">Pesan *</label>
                <textarea id="message" name="message" rows="5"
                    required maxlength="5000">{{ old('message') }}</textarea>

                <button type="submit" class="btn btn--gold">
                    Kirim Pesan
                </button>
            </form>
        </div>
    </div>
</section>
@endsection
