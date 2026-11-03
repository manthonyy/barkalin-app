<?php

namespace App\Models;

class HomePage
{
    public function coalGrades(): array
    {
        return [
            [
                'title' => 'High Grade',
                'category' => 'COAL GRADES',
                'image' => 'High-Grade-Update-1024x446.jpg',
                'details' => [
                    'subtitle' => 'Batubara Tingkat Tinggi (High Rank)',
                    'source' => 'Kalimantan Selatan',
                    'description' => 'Golongan ini ditandai dengan kandungan karbon tinggi, nilai kalori tinggi, kandungan air sedikit, kandungan abu sedikit, dan kandungan sulfur sedikit dengan membentuk bongkah-bongkah prismatik. Berlapis dan tidak mengeluarkan gas dan air bila dikeringkan. Endapan ini dapat digunakan antara lain untuk kepentingan transportasi dan industri.',
                    'calorific_value' => '6.100–6.300 up kal',
                ],
            ],
            [
                'title' => 'Medium Grade',
                'category' => 'COAL GRADES',
                'image' => 'Banner-Update-medium-gradei-420x183.jpg',
                'details' => [
                    'subtitle' => 'Batubara Tingkat Menengah (Moderate Rank)',
                    'source' => 'Kalimantan Selatan',
                    'description' => 'Golongan ini ditandai dengan struktur kurang kompak, kandungan karbon tinggi, nilai kalori tinggi, kandungan air sedikit, kandungan abu sedikit, dan kandungan sulfur sedikit serta sudah mengandung lilin. Endapan ini dapat digunakan untuk pemanfaatan pembakaran yang cukup dengan temperatur yang tidak terlalu tinggi.',
                    'calorific_value' => '5.600–6.000 kal',
                ],
            ],
            [
                'title' => 'Low Grade',
                'category' => 'COAL GRADES',
                'image' => 'LowGrade-update-1024x446.jpg',
                'details' => [
                    'subtitle' => 'Batubara Tingkat Rendah (Low Rank)',
                    'source' => 'Kalimantan Selatan',
                    'description' => 'Golongan ini sudah memperlihatkan proses selanjutnya berupa struktur kekar dan gejala pelapisan. Apabila dikeringkan, gas dan airnya akan keluar. Endapan ini bisa dimanfaatkan secara terbatas untuk kepentingan yang bersifat sederhana, karena panas yang dikeluarkan sangat rendah. Lignite ditandai dengan kondisi fisik berwarna hitam dan sangat rapuh, nilai kalori rendah, kandungan air tinggi, kandungan abu tinggi, dan kandungan sulfur tinggi.',
                    'calorific_value' => '5.300–5.600 kal',
                ],
            ],
        ];
    }

    public function activities(): array
    {
        return [
            [
                'number' => '01',
                'title' => 'Mining',
                'image' => 'barkalin-hero1.jpg',
                'image_alt' => 'Alat berat dan aktivitas di area pertambangan batu bara',
                'reverse' => false,
                'paragraphs' => [
                    'Sumber batu bara CV. Barkalin Artha Prima berasal dari tambang yang mempunyai izin dari pemerintah beserta legalitas-legalitas yang telah memenuhi syarat. Dengan latar belakang pengetahuan dan keahlian logistik, kami menerapkan standar yang tinggi dan ketat dalam menyeleksi kuantitas dan kualitas.',
                    'Legalitas sumber menjadi pertimbangan penting dalam rantai pasok. Seleksi sumber dan kesesuaian material, disertai pemeriksaan kuantitas serta kualitas, membantu memastikan kebutuhan mitra dapat dipertimbangkan dengan baik. Koordinasi logistik juga mendukung perencanaan distribusi dari sumber menuju tahap pengiriman.',
                ],
            ],
            [
                'number' => '02',
                'title' => 'Shipment',
                'image' => 'Tongkang-Update-1024x446.jpg',
                'image_alt' => 'Tongkang bermuatan batu bara untuk pengiriman',
                'reverse' => true,
                'paragraphs' => [
                    'Untuk sarana pemasaran dan pendistribusiannya, batu bara memerlukan alat transportasi laut sebagai alat pengangkutannya. Dalam pengangkutan tertentu, tongkang digunakan untuk membawa material dan kapal tunda membantu menarik atau mendorong tongkang.',
                    'Transportasi laut berperan dalam menghubungkan titik pengiriman dan tujuan distribusi. Koordinasi pengangkutan, penyesuaian jadwal, dan penanganan material menjadi bagian penting agar proses pengiriman dapat berjalan tertata. Penggunaan sarana angkut disesuaikan dengan kebutuhan dan pihak-pihak yang terlibat dalam pengiriman.',
                ],
            ],
            [
                'number' => '03',
                'title' => 'Stockpile',
                'image' => 'Banner-Update-stocpile-1024x446.jpg',
                'image_alt' => 'Area stockpile batu bara dengan alat berat',
                'reverse' => false,
                'paragraphs' => [
                    'Stockpile merupakan area yang digunakan untuk menumpuk dan menyimpan batu bara sebelum diproses lebih lanjut atau dikirim kepada pembeli. Pengelolaan stockpile yang baik membantu mendukung penanganan material dan persiapan distribusi.',
                    'Secara umum, pengelolaan area penyimpanan meliputi penumpukan dan penanganan material secara teratur. Jika diperlukan, batu bara dapat dipisahkan berdasarkan kategori atau spesifikasi sebelum dipersiapkan untuk pengiriman. Penataan yang baik membantu menjaga kelancaran proses penanganan tanpa mengasumsikan kapasitas maupun fasilitas tertentu.',
                ],
            ],
        ];
    }
}
