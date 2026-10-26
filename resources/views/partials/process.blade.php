<ol class="process" data-reveal>
    @foreach (config('barkalin.process') as $i => [$title, $text])
        <li class="process__step">
            <span class="process__num">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>
            <h3>{{ $title }}</h3>
            <p>{{ $text }}</p>
        </li>
    @endforeach
</ol>
