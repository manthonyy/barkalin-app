<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class OperationsController extends Controller
{
    public function __invoke(): View
    {
        return view('operations');
    }
}
