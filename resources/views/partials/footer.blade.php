<footer class="footer">
    <div class="container footer__grid">
        <div>
            <p class="footer__brand">{{ config('barkalin.name') }}</p>
            <p class="footer__muted">Kegiatan usaha di bidang pertambangan dan energi{{ config('barkalin.founded') ? ', didirikan pada ' . config('barkalin.founded') : '' }}.</p>
        </div>
        <nav aria-label="Navigasi footer">
            <h2 class="footer__title">Navigasi</h2>
            <ul>
                <li><a href="{{ route('home') }}">Beranda</a></li>
                <li><a href="{{ route('about') }}">Tentang Kami</a></li>
                <li><a href="{{ route('business') }}">Bisnis Kami</a></li>
                <li><a href="{{ route('operations') }}">Operasional</a></li>
                <li><a href="{{ route('contact') }}">Kontak</a></li>
            </ul>
        </nav>
        <address>
            <h2 class="footer__title">Kontak</h2>
            @if (config('barkalin.office_address'))
                <p><strong>Kantor</strong><br>{{ config('barkalin.office_address') }}</p>
            @endif
            @if (config('barkalin.stockpile_address'))
                <p><strong>Stockpile</strong><br>{{ config('barkalin.stockpile_address') }}</p>
            @endif
            @if (config('barkalin.phone') || config('barkalin.fax') || config('barkalin.email'))
                <p>
                    @if (config('barkalin.phone') && config('barkalin.phone_tel'))
                        Telp: <a href="tel:{{ config('barkalin.phone_tel') }}">{{ config('barkalin.phone') }}</a><br>
                    @endif
                    @if (config('barkalin.fax'))
                        Fax: {{ config('barkalin.fax') }}<br>
                    @endif
                    @if (config('barkalin.email'))
                        <a href="mailto:{{ config('barkalin.email') }}">{{ config('barkalin.email') }}</a>
                    @endif
                </p>
            @endif
        </address>
    </div>
    <div class="container footer__bottom">© {{ date('Y') }} {{ config('barkalin.name') }}. Hak cipta dilindungi.</div>
</footer>
