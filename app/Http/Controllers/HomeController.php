<?php

namespace App\Http\Controllers;

use App\Models\ClientPartner;
use App\Models\CoalGrade;
use App\Models\Facility;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __invoke(): View
    {
        $coalGrades = CoalGrade::where('active', true)->get();
        $facilities = Facility::where('active', true)->orderBy('number')->get();
        $clientPartners = ClientPartner::where('active', true)->orderBy('sort_order')->get();

        return view('home', [
            'coalGrades' => $coalGrades,
            'activities' => $facilities,
            'clientPartners' => $clientPartners,
        ]);
    }
}
