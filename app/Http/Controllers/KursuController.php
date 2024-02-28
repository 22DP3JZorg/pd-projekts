<?php

namespace App\Http\Controllers;

use App\Models\Kurss;
use Illuminate\Http\Request;

class KursuController extends Controller
{

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nosaukums' => 'required|string|max:255',
            'apraksts' => 'required|string',
            'banera_adrese' => 'nullable|string|max:255',
            'cilveku_skaits' => 'required|integer|min:0',
        ]);

        $kurss = Kurss::create($validatedData);

        return response()->json($kurss, 201);
    }

    public function index()
    {
        return response()->json(Kurss::all());
    }
}
