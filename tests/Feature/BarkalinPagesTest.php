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

    public function test_home_page_displays_active_content_from_the_database(): void
    {
        CoalGrade::create([
            'name' => 'Database Grade Alpha',
            'category' => 'TEST GRADES',
            'subtitle' => 'Database grade subtitle',
            'calorific_value' => '6,000 kcal',
            'description' => 'Database grade description',
            'image' => 'database-grade.jpg',
            'active' => true,
        ]);
        CoalGrade::create([
            'name' => 'Inactive Database Grade',
            'category' => 'TEST GRADES',
            'subtitle' => 'Inactive subtitle',
            'calorific_value' => '5,000 kcal',
            'description' => 'Inactive grade description',
            'image' => 'inactive-grade.jpg',
            'active' => false,
        ]);
        Facility::create([
            'number' => '91',
            'title' => 'Database Facility Alpha',
            'image' => 'database-facility.jpg',
            'reverse' => false,
            'description' => 'Database facility description',
            'active' => true,
        ]);
        Facility::create([
            'number' => '92',
            'title' => 'Inactive Database Facility',
            'image' => 'inactive-facility.jpg',
            'reverse' => false,
            'description' => 'Inactive facility description',
            'active' => false,
        ]);
        ClientPartner::create([
            'name' => 'Database Partner Alpha',
            'logo' => 'database-partner.png',
            'industry' => 'Test industry',
            'sort_order' => 91,
            'active' => true,
        ]);
        ClientPartner::create([
            'name' => 'Inactive Database Partner',
            'logo' => 'inactive-partner.png',
            'industry' => 'Inactive industry',
            'sort_order' => 92,
            'active' => false,
        ]);

        $response = $this->get(route('home'));

        $response->assertOk();
        $response->assertSee('Database Grade Alpha');
        $response->assertSee('Database Facility Alpha');
        $response->assertSee('Database Partner Alpha');
        $response->assertDontSee('Inactive Database Grade');
        $response->assertDontSee('Inactive Database Facility');
        $response->assertDontSee('Inactive Database Partner');
        $response->assertDontSee('cheiljedang.png');
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
