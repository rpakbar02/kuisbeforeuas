@extends('layouts.app')

@section('title', 'Tambah Kontrak Sewa')

@section('content')
<div class="max-w-2xl mx-auto">
    <h1 class="text-3xl font-bold text-gray-900 mb-6">Tambah Kontrak Sewa Baru</h1>

    {{-- TODO: Form tambah kontrak sewa --}}
    <form action="#" method="POST" class="bg-white shadow-md rounded-lg p-6 space-y-4">
        @csrf
        
        {{-- TODO: Input Kontrak Sewa --}}
        <div>
            <label class="block text-sm font-medium text-gray-700">Nama Penyewa</label>
            <select name="penyewa_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                <option value="">Pilih Penyewa</option>
                @foreach($penyewa as $penyewa)
                <option value="{{$penyewa->id}}">{{$penyewa->nama_lengkap}}</option>
                @endforeach
            </select>
            {{-- TODO: Tampilkan error validation --}}
            <label class="block text-sm font-medium text-gray-700 mt-4">Nomor Kamar</label>
            <select name="kamar_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                <option value="">Pilih Kamar</option>
                @foreach($kamar as $kamar)
                <option value="{{$kamar->id}}">{{$kamar->nomor_kamar}}</option>
                @endforeach
            </select>
            <label class="block text-sm font-medium text-gray-700 mt-4">Tanggal Mulai</label>
            <input type="date" name="tanggal_mulai" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            <label class="block text-sm font-medium text-gray-700 mt-4">Tanggal Selesai</label>
            <input type="date" name="tanggal_selesai" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            <label class="block text-sm font-medium text-gray-700 mt-4">Harga Bulanan</label>
            <input type="number" name="harga_bulanan" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            <label class="block text-sm font-medium text-gray-700 mt-4">Status</label>
            <select name="status" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                <option value="aktif">Aktif</option>
                <option value="non-aktif">Non-Aktif</option>
            </select>
        </div>

        <div class="flex justify-end space-x-2">
            <a href="/kontrak-sewa" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
                Batal
            </a>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Simpan
            </button>
        </div>
    </form>
</div>
@endsection
