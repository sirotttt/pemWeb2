<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipeMobil;

class TipeMobilController extends Controller
{
    // nampilin data
    function index()
    {
        $tipeMobilData = TipeMobil::get();
        return view('pages.tipe_mobil.index', compact('tipeMobilData'));
    }
    // tambah data
    function create()
    {
        return view('pages.tipe_mobil.create');
    }

    function store(Request $request)
    {
        // validasi data yang mau disimpan
        $tipeMobilData = $request->validate([
            'tipe' => 'required'
        ]);

        // proses simpan data
        TipeMobil::create($tipeMobilData);

        // mengalihkan kehalaman index tipemobil
        return redirect()->to('/tipemobil');
    }
    // mengubah data
    function edit($id)
    {   
        $tipeMobilData = TipeMobil::find($id);
        return view('pages.tipe_mobil.edit', compact('tipeMobilData'));
    }
    // mengupdate data
    function update($id, Request $request)
    {
        $validasiTipeMobil = $request->validate([
            'tipe' => 'required'
        ]);

        $tipeMobilData = TipeMobil::find($id);
        $tipeMobilData->update($validasiTipeMobil);

        return redirect()->to('/tipemobil');
    }
    // menghapus data
    function delete($id)
    {
    //    ambil data berdasarkan id
    // lakukan delete data
    // balik kehalaman sebelumnya
        $tipeMobilData = TipeMobil::find($id);
        $tipeMobilData->delete();

        return redirect()->to('/tipemobil');
    }
}
