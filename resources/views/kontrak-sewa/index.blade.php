@extends('layouts.app')

@section('title', 'Manajemen Kontrak Sewa')

@section('content')
<div class="space-y-6">
    <div class="flex justify-between items-center">
        <h1 class="text-3xl font-bold text-gray-900">Daftar Kontrak</h1>
        {{-- TODO: Tombol tambah kontrak --}}
        <a href="/kontrak-sewa/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            + Tambah kontrak
        </a>
    </div>

    {{-- TODO: Filter berdasarkan status/tipe (BONUS) --}}
    <div class="flex space-x-4">
        <select class="border border-gray-300 rounded-md p-2">
            <option value="">Semua Tipe</option>
            <option value="standard">Standard</option>
            <option value="deluxe">Deluxe</option>
            <option value="vip">VIP</option>
        </select>
        <select class="border border-gray-300 rounded-md p-2">
            <option value="">Semua Status</option>
            <option value="aktif">Aktif</option>
            <option value="selesai">Selesai</option>
        </select>
        <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
            Filter
        </button>
    </div>

    {{-- TODO: Tabel daftar kontrak --}}
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="min-w-full text-center text-sm divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-center text-sm font-medium text-gray-500 uppercase">Penyewa</th>
                    <th class="px-6 py-3 text-center text-sm font-medium text-gray-500 uppercase">Kamar</th>
                    <th class="px-6 py-3 text-center text-sm font-medium text-gray-500 uppercase">Tanggal Mulai</th>
                    <th class="px-6 py-3 text-center text-sm font-medium text-gray-500 uppercase">Tanggal Selesai</th>
                    <th class="px-6 py-3 text-center text-sm font-medium text-gray-500 uppercase">Harga Bulanan</th>
                    <th class="px-6 py-3 text-center text-sm font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-6 py-3 text-center text-sm font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                {{-- TODO: Loop data kontrak --}}
                @foreach($contracts as $kontrak)
                <tr>
                    <td colspan="1" class="px-6 py-4 text-center text-gray-500">
                        {{$kontrak->penyewa->nama_lengkap}}
                    </td>
                    <td colspan="1" class="px-6 py-4 text-center text-gray-500">
                        {{$kontrak->kamar->nomor_kamar}}
                    </td>
                    <td colspan="1" class="px-6 py-4 text-center text-gray-500">
                        {{$kontrak->tanggal_mulai}}
                    </td>
                    <td colspan="1" class="px-6 py-4 text-center text-gray-500">
                        {{$kontrak->tanggal_selesai}}
                    </td>
                    <td colspan="1" class="px-6 py-4 text-center text-gray-500">
                        {{$kontrak->harga_bulanan}}
                    </td>
                    <td colspan="1" class="px-6 py-4 text-center text-gray-500">
                        {{$kontrak->status}}
                    </td>
                    <td colspan="1" class="px-6 py-4 text-center text-gray-500 flex space-x-2 justify-center">
                        <form action="/kontrak-sewa/hapus/{{ $kontrak->id }}" method="DELETE">
                            <input type="hidden" name="hapus_kontrak" value="DELETE">
                            <button type="submit"class="text-red-500 hover:text-red-700">Hapus</button> | 
                        </form>
                        <div>
                            <a href="/kontrak-sewa/{{ $kontrak->id }}" class="text-blue-500 hover:text-blue-700">Detail</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
