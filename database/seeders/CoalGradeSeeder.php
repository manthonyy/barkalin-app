<?php

namespace Database\Seeders;

use App\Models\CoalGrade;
use Illuminate\Database\Seeder;

class CoalGradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CoalGrade::create([
            'name' => 'High Grade',
            'category' => 'COAL GRADES',
            'subtitle' => 'Batubara Tingkat Tinggi (High Rank)',
            'calorific_value' => '6.100-6.300 up kal',
            'description' => 'Golongan ini ditandai dengan kandungan karbon tinggi, nilai kalori tinggi, kandungan air sedikit, kandungan abu sedikit, dan kandungan sulfur sedikit dengan membentuk bongkah-bongkah prismatik. Berlapis dan tidak mengeluarkan gas dan air bila dikeringkan. Endapan ini dapat digunakan antara lain untuk kepentingan transportasi dan industri.',
            'image' => 'High-Grade-Update-1024x446.jpg',
            'active' => true,
        ]);

        CoalGrade::create([
            'name' => 'Medium Grade',
            'category' => 'COAL GRADES',
            'subtitle' => 'Batubara Tingkat Menengah (Moderate Rank)',
            'calorific_value' => '5.600-6.000 kal',
            'description' => 'Golongan ini ditandai dengan struktur kurang kompak, kandungan karbon tinggi, nilai kalori tinggi, kandungan air sedikit, kandungan abu sedikit, dan kandungan sulfur sedikit serta sudah mengandung lilin. Endapan ini dapat digunakan untuk pemanfaatan pembakaran yang cukup dengan temperatur yang tidak terlalu tinggi.',
            'image' => 'Banner-Update-medium-gradei-420x183.jpg',
            'active' => true,
        ]);

        CoalGrade::create([
            'name' => 'Low Grade',
            'category' => 'COAL GRADES',
            'subtitle' => 'Batubara Tingkat Rendah (Low Rank)',
            'calorific_value' => '5.300-5.600 kal',
            'description' => 'Golongan ini sudah memperlihatkan proses selanjutnya berupa struktur kekar dan gejala pelapisan. Apabila dikeringkan, gas dan airnya akan keluar. Endapan ini bisa dimanfaatkan secara terbatas untuk kepentingan yang bersifat sederhana, karena panas yang dikeluarkan sangat rendah. Lignite ditandai dengan kondisi fisik berwarna hitam dan sangat rapuh, nilai kalori rendah, kandungan air tinggi, kandungan abu tinggi, dan kandungan sulfur tinggi.',
            'image' => 'LowGrade-update-1024x446.jpg',
            'active' => true,
        ]);
    }
}
