<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $filePath = storage_path('app/public/products.json');

        $products = [];

        if (file_exists($filePath) && filesize($filePath) > 0) {
            $json = file_get_contents($filePath);
            $products = json_decode($json, true);
        }

        $newProduct = [
            'productName' => $request->input('productName'),
            'quantity' => (int) $request->input('quantity'),
            'price' => (float) $request->input('price'),
            'datetime' => Carbon::now()->toDateTimeString(),
            'totalValue' => (int) $request->input('quantity') * (float) $request->input('price')
        ];

        $products[] = $newProduct;

        file_put_contents($filePath, json_encode($products, JSON_PRETTY_PRINT));

 
        return view('partials.product_list', ['products' => $products])->render();
    }
}
