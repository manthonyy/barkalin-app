<?php

namespace Database\Seeders;

use App\Models\ContactMessage;
use Illuminate\Database\Seeder;

class ContactMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactMessage::create([
            'name' => 'PT Semen Perkasa Nusantara',
            'email' => 'procurement@semenperkasa.co.id',
            'phone' => '021-5551234',
            'company' => 'PT Semen Perkasa Nusantara',
            'subject' => 'Permintaan Penawaran Batubara High Grade GAR 6000',
            'message' => 'Kami membutuhkan pasokan berkala sebesar 15.000 MT per bulan untuk pabrik kami di Jawa Timur. Mohon kirimkan spesifikasi dan penawaran harga.',
            'status' => 'processed',
        ]);

        ContactMessage::factory()->count(4)->create();
    }
}
