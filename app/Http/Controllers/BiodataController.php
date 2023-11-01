<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;

class BiodataController extends Controller
{
    public function index()
    {
        return view('Sekolah.biodata');
    }

    public function create(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:255',
            'gender' => 'required',
            'birth' => 'required|date',
            'email' => 'required|email:dns',
            'no_hp' => 'required|numeric',
            'alamat' => 'required|max:255'
        ]);

        Biodata::create($validated);
        return redirect()->route('biodata.index')->with('success', 'Biodata has been added successfully.');
    }
}