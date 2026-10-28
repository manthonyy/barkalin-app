<?php

namespace Tests\Feature;

use App\Models\ContactMessage;
use App\Models\Facility;
use App\Models\Product;
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
    }

    public function test_about_page_returns_successful_response(): void
    {
        $response = $this->get(route('about'));
        $response->assertStatus(200);
        $response->assertSee('29 Maret 2011');
        $response->assertSee('Jl. Veteran 9G');
    }

    public function test_business_page_displays_products_from_database(): void
    {
        Product::factory()->create([
            'name' => 'High Grade Steam Coal',
            'calorie_range' => 'GAR 6,200 kcal/kg',
            'active' => true,
        ]);

        $response = $this->get(route('business'));
        $response->assertStatus(200);
        $response->assertSee('High Grade Steam Coal');
        $response->assertSee('GAR 6,200 kcal/kg');
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
