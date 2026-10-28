<?php

return [
    'name' => 'CV Barkalin Artha Prima',

    'founded' => '29 Maret 2011',

    'description' => 'CV Barkalin Artha Prima, perusahaan perdagangan dan distribusi batubara terpercaya berbasis di Surabaya.',

    'email' => env('BARKALIN_EMAIL', 'coal@barkalin.com'),

    'office_address' => 'Jl. Veteran 9G, Surabaya, Jawa Timur',

    'stockpile_address' => 'Jl. Osowilangon No. 7, Surabaya, Jawa Timur',

    'phone' => '031 – 354 3991',

    'phone_tel' => '+62313543991',

    'fax' => '031 – 357 0524',

    'inquiry_to' => env('BARKALIN_INQUIRY_TO', 'coal@barkalin.com'),

    'images' => [
        'hero' => '/images/barkalin-hero.jpg',
    ],

    'process' => [
        [
            'Perencanaan & Spesifikasi',
            'Menganalisis kebutuhan kalori (GAR), kuantitas, dan jadwal pasokan industri Anda.',
        ],
        [
            'Inspeksi & Quality Control',
            'Memastikan batubara berasal dari tambang berizin resmi dan lolos uji laboratorium berkala.',
        ],
        [
            'Distribusi & Pengapalan',
            'Pengangkutan via armada tongkang/barge dari jetty menuju stockpile dan lokasi klien.',
        ],
        [
            'Layanan Purna Jual & Evaluasi',
            'Menjaga kontinuitas pasokan dan komitmen kemitraan jangka panjang yang bertanggung jawab.',
        ],
    ],
];
