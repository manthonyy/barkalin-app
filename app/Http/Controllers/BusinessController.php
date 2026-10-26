<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class BusinessController extends Controller
{
    public function __invoke(): View
    {
        return view('business');
    }
}
