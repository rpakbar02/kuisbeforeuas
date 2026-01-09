@extends('layouts.app')

@section('title', 'Tambah Kamar')

@section('content')
<div class="max-w-2xl mx-auto">
    <h1 class="text-3xl font-bold text-gray-900 mb-6">Tambah Kamar Baru</h1>

    <form action="#" method="POST" class="bg-white shadow-md rounded-lg p-6 space-y-4">
        @csrf
        
        <div>
            <label class="block text-sm font-medium text-gray-700">Nomor Kamar</label>
            <input type="text" name="nomor_kamar" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            @error('nomor_kamar')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Tipe Kamar</label>
            <select name="tipe_kamar" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                <option value="standard">Standard</option>
                <option value="deluxe">Deluxe</option>
                <option value="vip">VIP</option>
            </select>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Harga Bulanan</label>
            <input type="number" name="harga_bulanan" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Fasilitas</label>
            <textarea name="fasilitas" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></textarea>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Status</label>
            <select name="status" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                <option value="tersedia">Tersedia</option>
                <option value="terisi">Terisi</option>
            </select>
        </div>

        <div class="flex justify-end space-x-2">
            <a href="#" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
                Batal
            </a>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Simpan
            </button>
        </div>
    </form>
</div>
@endsection
