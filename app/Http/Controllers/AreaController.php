<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index(){
        return view('Sekolah.form');
    }
    public function hitungLuas(Request $request)
    {

        $validated = $request->validate([
            'jari_jari' => 'required|numeric',
            'tinggi' => 'required|numeric'
        ]);

        $phi = 3.14;

        $jari_jari = $validated['jari_jari'];
        $tinggi = $validated['tinggi'];
        // $luas = $panjang * $lebar;
        $luas = (1/3) * $phi * pow($jari_jari, 2) * $tinggi;
       
        return view('Sekolah.form', ['luas' => $luas]);
        // return view('Sekolah.form', compact('phi', 'luas', 'jari_jari', 'tinggi'));
    }
}