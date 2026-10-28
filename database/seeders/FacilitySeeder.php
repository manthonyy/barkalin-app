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
        // Data riil operasional CV Barkalin Artha Prima
        Facility::create([
            'name' => 'Stockpile Osowilangon',
            'type' => 'Stockpile & Penyimpanan',
            'location' => 'Jl. Osowilangon No. 7, Surabaya, Jawa Timur',
            'description' => 'Fasilitas penimbunan dan penyimpanan batubara berkapasitas besar dengan manajemen drainase dan pemantauan kualitas untuk menjaga stabilitas kalori sebelum distribusi darat maupun laut.',
            'active' => true,
        ]);

        Facility::create([
            'name' => 'Armada Tongkang (Ponton) & Barge',
            'type' => 'Logistik Maritim',
            'location' => 'Rute Perairan Domestik & Selat Madura',
            'description' => 'Layanan transportasi laut terintegrasi dengan kapal tunda (tugboat) dan tongkang untuk mengangkut batubara dalam volume besar secara tepat waktu dan aman.',
            'active' => true,
        ]);

        Facility::create([
            'name' => 'Jetty & Dermaga Muat',
            'type' => 'Dermaga & Pelabuhan',
            'location' => 'Area Pesisir Pelabuhan Jawa Timur',
            'description' => 'Fasilitas dermaga muat dan bongkar logistik batubara yang dilengkapi konveyor dan peralatan mekanik untuk mempercepat proses loading ke kapal tongkang.',
            'active' => true,
        ]);

        // Tambahan data tiruan menggunakan Factory (pola materi kelas)
        Facility::factory()->count(2)->create();
    }
}
