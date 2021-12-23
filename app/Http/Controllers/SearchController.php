<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function index(Request $request)
    {
        $request->validate([
            'search' => 'required'
        ]);
        $search = $request->input('search');
        // dd($search);
        $products = Product::where('pname','LIKE','%' . $search . '%')->get();
        // dd($products);
        return view('/search-results' , compact('products'));
    }
}
