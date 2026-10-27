<?php

namespace App\Http\Controllers;

use App\Models\HomePage;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __invoke(HomePage $homePage): View
    {
        return view('home', [
            'coalGrades' => $homePage->coalGrades(),
            'activities' => $homePage->activities(),
        ]);
    }
}
