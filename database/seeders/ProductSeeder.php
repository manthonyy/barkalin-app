<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data resmi produk batubara CV Barkalin Artha Prima
        Product::create([
            'name' => 'High Grade Coal',
            'category' => 'high',
            'calorie_range' => 'GAR 5,800 – 6,500+ kcal/kg',
            'description' => 'Batubara berkalori tinggi dengan efisiensi pembakaran maksimal dan kadar abu rendah, ideal untuk industri semen, peleburan logam, dan pembangkit listrik berskala besar.',
            'specifications' => 'Total Moisture: 12-16% | Ash Content: 6-9% | Total Sulfur: <0.8%',
            'active' => true,
        ]);

        Product::create([
            'name' => 'Medium Grade Coal',
            'category' => 'medium',
            'calorie_range' => 'GAR 5,000 – 5,700 kcal/kg',
            'description' => 'Batubara kalori menengah yang serbaguna dan ekonomis, menjadi pilihan utama untuk boiler pabrik manufaktur, tekstil, dan industri pengolahan.',
            'specifications' => 'Total Moisture: 20-28% | Ash Content: 5-8% | Total Sulfur: <0.7%',
            'active' => true,
        ]);

        Product::create([
            'name' => 'Low Grade Coal',
            'category' => 'low',
            'calorie_range' => 'GAR 3,800 – 4,800 kcal/kg',
            'description' => 'Batubara kalori rendah ramah biaya untuk kebutuhan pembakaran kontinu dan pencampuran (blending), bersumber dari konsesi tambang legal berizin resmi.',
            'specifications' => 'Total Moisture: 30-38% | Ash Content: 4-7% | Total Sulfur: <0.5%',
            'active' => true,
        ]);

        // Tambahan data tiruan menggunakan Factory (pola materi kelas)
        Product::factory()->count(2)->create();
    }
}
