<?php

namespace Database\Seeders;

use App\Models\Facility;
use Illuminate\Database\Seeder;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Facility::create([
            'number' => '01',
            'title' => 'Mining',
            'image' => 'barkalin-hero1.jpg',
            'reverse' => false,
            'description' => "Sumber batu bara CV. Barkalin Artha Prima berasal dari tambang yang mempunyai izin dari pemerintah beserta legalitas-legalitas yang telah memenuhi syarat. Dengan latar belakang pengetahuan dan keahlian logistik, kami menerapkan standar yang tinggi dan ketat dalam menyeleksi kuantitas dan kualitas.\n\nLegalitas sumber menjadi pertimbangan penting dalam rantai pasok. Seleksi sumber dan kesesuaian material, disertai pemeriksaan kuantitas serta kualitas, membantu memastikan kebutuhan mitra dapat dipertimbangkan dengan baik. Koordinasi logistik juga mendukung perencanaan distribusi dari sumber menuju tahap pengiriman.",
            'active' => true,
        ]);

        Facility::create([
            'number' => '02',
            'title' => 'Shipment',
            'image' => 'Tongkang-Update-1024x446.jpg',
            'reverse' => true,
            'description' => "Untuk sarana pemasaran dan pendistribusiannya, batu bara memerlukan alat transportasi laut sebagai alat pengangkutannya. Dalam pengangkutan tertentu, tongkang digunakan untuk membawa material dan kapal tunda membantu menarik atau mendorong tongkang.\n\nTransportasi laut berperan dalam menghubungkan titik pengiriman dan tujuan distribusi. Koordinasi pengangkutan, penyesuaian jadwal, dan penanganan material menjadi bagian penting agar proses pengiriman dapat berjalan tertata. Penggunaan sarana angkut disesuaikan dengan kebutuhan dan pihak-pihak yang terlibat dalam pengiriman.",
            'active' => true,
        ]);

        Facility::create([
            'number' => '03',
            'title' => 'Stockpile',
            'image' => 'Banner-Update-stocpile-1024x446.jpg',
            'reverse' => false,
            'description' => "Stockpile merupakan area yang digunakan untuk menumpuk dan menyimpan batu bara sebelum diproses lebih lanjut atau dikirim kepada pembeli. Pengelolaan stockpile yang baik membantu mendukung penanganan material dan persiapan distribusi.\n\nSecara umum, pengelolaan area penyimpanan meliputi penumpukan dan penanganan material secara teratur. Jika diperlukan, batu bara dapat dipisahkan berdasarkan kategori atau spesifikasi sebelum dipersiapkan untuk pengiriman. Penataan yang baik membantu menjaga kelancaran proses penanganan tanpa mengasumsikan kapasitas maupun fasilitas tertentu.",
            'active' => true,
        ]);
    }
}
