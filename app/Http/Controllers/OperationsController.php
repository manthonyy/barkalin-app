<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\HomePage;
use Illuminate\View\View;

class OperationsController extends Controller
{
    public function __invoke(HomePage $homePage): View
    {
        $facilities = Facility::where('active', true)->get();

        return view('operations', [
            'facilities' => $facilities,
            'activities' => $homePage->activities(),
        ]);
    }
}
