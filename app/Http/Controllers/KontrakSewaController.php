<?php

namespace App\Http\Controllers;

use App\Models\KontrakSewa;
use App\Models\Penyewa;
use App\Models\Kamar;
use Illuminate\Http\Request;

class KontrakSewaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contracts = KontrakSewa::with('penyewa')->with('kamar')->get();
        return view('kontrak-sewa.index', compact('contracts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $penyewas = Penyewa::all();
        $kamars = Kamar::where('status', 'tersedia')->get();
        return view('kontrak-sewa.create', compact('penyewas', 'kamars'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $contract = new KontrakSewa();
        $contract->penyewa_id = $request->penyewa_id;
        $contract->kamar_id = $request->kamar_id;
        $contract->tanggal_mulai = $request->tanggal_mulai;
        $contract->tanggal_selesai = $request->tanggal_selesai;
        $contract->save();

        return redirect()->route('kontrak-sewa.index')->with('success', 'Kontrak Sewa berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $contract = KontrakSewa::with('penyewa')->with('kamar')->findOrFail($id);
        return view('kontrak-sewa.show', compact('contract'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $contract = KontrakSewa::findOrFail($id);
        return view('kontrak-sewa.edit', compact('contract'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $contract = KontrakSewa::findOrFail($id);
        $contract->delete();
        return redirect()->route('kontrak-sewa.index')->with('success', 'Kontrak Sewa berhasil dihapus');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $contract = KontrakSewa::findOrFail($id);
        $contract->delete();
        return redirect()->route('kontrak-sewa.index')->with('success', 'Kontrak Sewa berhasil dihapus');
    }
}
