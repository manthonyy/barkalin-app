<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use Illuminate\View\View;

class OperationsController extends Controller
{
    public function __invoke(): View
    {
        $facilities = Facility::where('active', true)->orderBy('number')->get();

        return view('operations', [
            'facilities' => $facilities,
        ]);
    }
}
