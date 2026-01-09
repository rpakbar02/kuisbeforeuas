<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('pembayaran.index');;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pembayaran.create');;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return view('pembayaran.create');;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return view('pembayaran.show');;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return view('pembayaran.edit');;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        return view('pembayaran.edit');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        return redirect()->route('pembayaran.index')->with('success', 'Pembayaran berhasil dihapus');;
    }
}
