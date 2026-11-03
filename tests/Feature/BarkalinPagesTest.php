<?php

namespace Tests\Feature;

use App\Models\ClientPartner;
use App\Models\CoalGrade;
use App\Models\Facility;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BarkalinPagesTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_page_returns_successful_response(): void
    {
        $this->seed();

        $response = $this->get(route('home'));
        $response->assertStatus(200);
        $response->assertSee('CV Barkalin Artha Prima');
        $response->assertSee('High Grade');
        $response->assertSee('Medium Grade');
        $response->assertSee('Low Grade');
        $response->assertSee('CJ CheilJedang');
        $response->assertSee('Wings Surya');
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
        $this->seed();

        $response = $this->get(route('operations'));
        $response->assertStatus(200);
        $response->assertSee('Mining');
        $response->assertSee('Shipment');
        $response->assertSee('Stockpile');
    }

    public function test_contact_page_returns_successful_response(): void
    {
        $response = $this->get(route('contact'));
        $response->assertStatus(200);
        $response->assertSee('Kantor Pusat');
        $response->assertSee('Stockpile');
        $response->assertSee(config('barkalin.email'));
    }
}
