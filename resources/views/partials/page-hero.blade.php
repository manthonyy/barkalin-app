<section class="page-hero" style="--bg:url('{{ $image }}')">
    <div class="container">
        <p class="eyebrow">{{ $eyebrow }}</p>
        <h1>{{ $title }}</h1>
        @isset($lead)<p class="lead">{{ $lead }}</p>@endisset
    </div>
</section>
