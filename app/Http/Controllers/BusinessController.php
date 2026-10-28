<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;

class BusinessController extends Controller
{
    public function __invoke(): View
    {
        $products = Product::where('active', true)->get();

        return view('business', [
            'products' => $products,
        ]);
    }
}
