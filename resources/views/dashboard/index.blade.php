@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="space-y-6">
    <h1 class="text-3xl font-bold text-gray-900">Dashboard</h1>

    {{-- TODO: Buat cards untuk statistik --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        {{-- Card Total Kamar --}}
        <div class="bg-white rounded-lg shadow p-6">
            <div class="text-sm text-gray-500">Total Kamar</div>
            <div class="text-3xl font-bold text-gray-900">
                0
            </div>
        </div>

        {{-- TODO: Card Kamar Terisi --}}
        <div class="bg-white rounded-lg shadow p-6">
            <div class="text-sm text-gray-500">Kamar Terisi</div>
            <div class="text-3xl font-bold text-gray-900">
                0
            </div>
        </div>

        {{-- TODO: Card Kamar Tersedia --}}
        <div class="bg-white rounded-lg shadow p-6">
            <div class="text-sm text-gray-500">Kamar Tersedia</div>
            <div class="text-3xl font-bold text-gray-900">
                0
            </div>
        </div>

        {{-- TODO: Card Pendapatan Bulan Ini --}}
        <div class="bg-white rounded-lg shadow p-6">
            <div class="text-sm text-gray-500">Pendapatan Bulan Ini</div>
            <div class="text-3xl font-bold text-gray-900">
                Rp 0
            </div>
        </div>

        {{-- TODO: Card Tunggakan --}}
        <div class="bg-white rounded-lg shadow p-6">
            <div class="text-sm text-gray-500">Tunggakan</div>
            <div class="text-3xl font-bold text-gray-900">
                Rp 0
            </div>
        </div>
    </div>
    {{-- TODO BONUS: Chart/Grafik (opsional) --}}
    <div class="bg-white rounded-lg shadow p-6">
        <div class="text-lg font-bold text-gray-900 mb-4">Grafik Pendapatan Bulanan</div>
        {{-- Placeholder buat grafik --}}
        <div class="h-64 flex items-center justify-center text-gray-400">
        </div>
</div>
@endsection
