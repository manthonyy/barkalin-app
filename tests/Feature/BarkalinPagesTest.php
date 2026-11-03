<?php

namespace Tests\Feature;

use App\Models\ContactMessage;
use App\Models\Facility;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BarkalinPagesTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_page_returns_successful_response(): void
    {
        $response = $this->get(route('home'));
        $response->assertStatus(200);
        $response->assertSee('CV Barkalin Artha Prima');
        $response->assertSee('Batubara Tingkat Tinggi (High Rank)');
        $response->assertSee('Kalimantan Selatan');
        $response->assertSee('6.100');
        $response->assertDontSee('Bisnis Kami');
    }

    public function test_about_page_returns_successful_response(): void
    {
        $response = $this->get(route('about'));
        $response->assertStatus(200);
        $response->assertSee('29 Maret 2011');
        $response->assertSee('Jl. Veteran 9G');
        $response->assertSee('Vision');
        $response->assertSee('Mission');
        $response->assertSee('Analisis Dampak Lingkungan');
    }

    public function test_business_page_is_removed(): void
    {
        $this->get('/business')->assertNotFound();
    }

    public function test_operations_page_displays_facilities_from_database(): void
    {
        Facility::factory()->create([
            'name' => 'Stockpile Osowilangon Utama',
            'location' => 'Jl. Osowilangon No. 7, Surabaya',
            'active' => true,
        ]);

        $response = $this->get(route('operations'));
        $response->assertStatus(200);
        $response->assertSee('Stockpile Osowilangon Utama');
        $response->assertSee('Jl. Osowilangon No. 7, Surabaya');
        $response->assertDontSee('ALUR KERJA');
    }

    public function test_contact_page_renders_and_submits_message_into_database(): void
    {
        $this->get(route('contact'))->assertStatus(200);

        $payload = [
            'name' => 'Budi Santoso',
            'email' => 'budi@perusahaan.com',
            'phone' => '081234567890',
            'company' => 'PT Energi Mandiri',
            'subject' => 'Inquiry Pasokan Batubara 10.000 MT',
            'message' => 'Mohon informasi ketersediaan pasokan batubara medium grade.',
        ];

        $response = $this->post(route('contact.submit'), $payload);

        $response->assertRedirect(route('contact'));
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('contact_messages', [
            'email' => 'budi@perusahaan.com',
            'company' => 'PT Energi Mandiri',
            'subject' => 'Inquiry Pasokan Batubara 10.000 MT',
        ]);
    }
}
