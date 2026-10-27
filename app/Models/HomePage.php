<?php

namespace App\Models;

final class HomePage
{
    /**
     * @return list<array{title: string, category: string, image: string, description: string}>
     */
    public function coalGrades(): array
    {
        return [
            [
                'title' => 'High Grade',
                'category' => 'COAL GRADES',
                'image' => 'highgrade.jpg',
                'description' => 'High Grade merupakan kategori batu bara dengan nilai kalor relatif tinggi yang dapat digunakan untuk berbagai kebutuhan industri dan pembangkit energi sesuai spesifikasinya. Karakteristik batu bara pada kategori ini perlu dinilai berdasarkan hasil pengujian, termasuk nilai kalor, kadar air, abu, sulfur, serta parameter kualitas lainnya.',
            ],
            [
                'title' => 'Medium Grade',
                'category' => 'COAL GRADES',
                'image' => 'mediumgrade.jpg',
                'description' => 'Medium Grade merupakan kategori batu bara dengan karakteristik kualitas yang berada di tingkat menengah. Pemanfaatannya dapat disesuaikan dengan kebutuhan operasional industri dan spesifikasi teknis yang dipersyaratkan oleh pembeli. Pemilihan batu bara tetap perlu mempertimbangkan hasil analisis kualitas dan kesesuaian penggunaannya.',
            ],
            [
                'title' => 'Low Grade',
                'category' => 'COAL GRADES',
                'image' => 'lowgrade.jpg',
                'description' => 'Low Grade merupakan kategori batu bara dengan nilai kalor relatif lebih rendah dibandingkan kategori dengan kualitas lebih tinggi. Batu bara ini dapat dimanfaatkan untuk kebutuhan tertentu sesuai karakteristiknya, teknologi yang digunakan, dan persyaratan pembeli. Pengujian kualitas tetap diperlukan untuk menentukan kesesuaian pemanfaatannya.',
            ],
        ];
    }

    /**
     * @return list<array{number: string, title: string, image: string, image_alt: string, reverse: bool, paragraphs: list<string>}>
     */
    public function activities(): array
    {
        return [
            [
                'number' => '01',
                'title' => 'Mining',
                'image' => 'mining.jpg',
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
                'image' => 'shipment.jpg',
                'image_alt' => 'Pengangkutan batu bara melalui jalur laut',
                'reverse' => true,
                'paragraphs' => [
                    'Untuk sarana pemasaran dan pendistribusiannya, batu bara memerlukan alat transportasi laut sebagai alat pengangkutannya. Dalam pengangkutan tertentu, tongkang digunakan untuk membawa material dan kapal tunda membantu menarik atau mendorong tongkang.',
                    'Transportasi laut berperan dalam menghubungkan titik pengiriman dan tujuan distribusi. Koordinasi pengangkutan, penyesuaian jadwal, dan penanganan material menjadi bagian penting agar proses pengiriman dapat berjalan tertata. Penggunaan sarana angkut disesuaikan dengan kebutuhan dan pihak-pihak yang terlibat dalam pengiriman.',
                ],
            ],
            [
                'number' => '03',
                'title' => 'Stockpile',
                'image' => 'coal.jpg',
                'image_alt' => 'Tumpukan batu bara untuk persiapan penanganan dan distribusi',
                'reverse' => false,
                'paragraphs' => [
                    'Stockpile merupakan area yang digunakan untuk menumpuk dan menyimpan batu bara sebelum diproses lebih lanjut atau dikirim kepada pembeli. Pengelolaan stockpile yang baik membantu mendukung penanganan material dan persiapan distribusi.',
                    'Secara umum, pengelolaan area penyimpanan meliputi penumpukan dan penanganan material secara teratur. Jika diperlukan, batu bara dapat dipisahkan berdasarkan kategori atau spesifikasi sebelum dipersiapkan untuk pengiriman. Penataan yang baik membantu menjaga kelancaran proses penanganan tanpa mengasumsikan kapasitas maupun fasilitas tertentu.',
                ],
            ],
        ];
    }
}
