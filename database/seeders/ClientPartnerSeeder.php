<?php

namespace Database\Seeders;

use App\Models\ClientPartner;
use Illuminate\Database\Seeder;

class ClientPartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ClientPartner::create([
            'name' => 'CJ CheilJedang',
            'logo' => 'cheiljedang.png',
            'industry' => 'Food & Bio Industry',
            'sort_order' => 1,
            'active' => true,
        ]);

        ClientPartner::create([
            'name' => 'Wings Surya',
            'logo' => 'wings.png',
            'industry' => 'Fast-Moving Consumer Goods (FMCG)',
            'sort_order' => 2,
            'active' => true,
        ]);

        ClientPartner::create([
            'name' => 'Semen Tonasa',
            'logo' => 'sementonas.png',
            'industry' => 'Cement & Heavy Manufacturing',
            'sort_order' => 3,
            'active' => true,
        ]);

        ClientPartner::create([
            'name' => 'Megasurya Mas',
            'logo' => 'megasurya.jpg',
            'industry' => 'Palm Oil & Oleochemicals',
            'sort_order' => 4,
            'active' => true,
        ]);
    }
}
