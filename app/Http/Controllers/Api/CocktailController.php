<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cocktail;
use Illuminate\Http\Request;

class CocktailController extends Controller
{
    public function index()
    {
        $cocktails = Cocktail::with('category', 'ingredients')->paginate(10);

        return response()->json([

            'success' => true,
            'results' => $cocktails,
        ]);
    }

    public function show(string $slug)
    {
        $cocktail = Cocktail::with('category', 'ingredients')->findOrFail($slug);

        return response()->json([

            'success' => true,
            'results' => $cocktail,
        ]);
    }
}
