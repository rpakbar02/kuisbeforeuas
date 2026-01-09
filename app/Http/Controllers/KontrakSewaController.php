<?php

namespace App\Http\Controllers;

use App\Models\KontrakSewa;
use App\Models\Penyewa;
use App\Models\Kamar;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Pest\Laravel\delete;
use function Ramsey\Uuid\v1;

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
        $penyewa = Penyewa::all();
        $kamar = Kamar::all();
        return view('kontrak-sewa.create', compact('penyewa', 'kamar'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::transaction (function () use ($request) {
            KontrakSewa::create([
                'tanggal_mulai' => $request->input('tanggal_mulai'),
                'tanggal_selesai' => $request->input('tanggal_selesai'),
                'harga_bulanan' => $request->input('harga_bulanan'),
                'status' => $request->input('status'),
                'penyewa_id' => $request->input('penyewa_id'),
                'kamar_id' => $request->input('kamar_id'),
            ]);

            $kamar = Kamar::find($request->input('kamar_id'));
            $kamar->status = 'terisi';
            $kamar->save();

        }); 
        return redirect()->route('kontrak-sewa.index')->with('success', 'Kontrak sewa berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kontrakSewa = KontrakSewa::with('penyewa')->with('kamar')->findOrFail($id);
        $pembayarans = Pembayaran::where('kontrak_sewa_id', $kontrakSewa->id)->get();

        return view('kontrak-sewa.detail', [
            'contract' => KontrakSewa::with('penyewa')->with('kamar')->findOrFail($id)
        ], compact('kontrakSewa', 'pembayarans'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('kontrak-sewa.edit', [
            'contract' => KontrakSewa::with('penyewa')->with('kamar')->findOrFail($id),
            'penyewa' => Penyewa::all(),
            'kamar' => Kamar::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kontrak = KontrakSewa::findOrFail($id);
        $kamar = Kamar::find($kontrak->kamar_id);
        $kamar->status = 'tersedia';
        $kamar->save();
        $kontrak->delete();

        return redirect()->route('kontrak-sewa.index')->with('success', 'Kontrak sewa berhasil dihapus.');
    }
}
