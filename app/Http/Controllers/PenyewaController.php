<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenyewaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $penyewa = \App\Models\Penyewa::all();
        return view('penyewa.index', compact('penyewa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('penyewa.create');;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:100',
            'nomor_telepon' => 'required|string|max:15',
            'nomor_ktp' => 'required|string|max:20|unique:penyewa,nomor_ktp',
            'alamat_asal' => 'required|string',
            'pekerjaan' => 'required|string|max:50',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $penyewa = \App\Models\Penyewa::findOrFail($id);
        return view('penyewa.show', compact('penyewa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $penyewa = \App\Models\Penyewa::findOrFail($id);
        return view('penyewa.edit', compact('penyewa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:100',
            'nomor_telepon' => 'required|string|max:15',
            'nomor_ktp' => 'required|string|max:20|unique:penyewa,nomor_ktp,' . $id,
            'alamat_asal' => 'required|string',
            'pekerjaan' => 'required|string|max:50',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $penyewa = \App\Models\Penyewa::findOrFail($id);
        $penyewa->delete();
        return redirect()->route('penyewa.index')->with('success', 'Penyewa berhasil dihapus');
    }
}
