@extends('layouts.app')

@section('title', 'Manajemen Kontrak Sewa')

@section('content')
<div class="space-y-6">
    <div class="flex justify-between items-center">
        <h1 class="text-3xl font-bold text-gray-900">Daftar Kamar</h1>
        {{-- TODO: Tombol tambah kontrak --}}
        <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
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
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                {{-- TODO: Loop data kontrak --}}
                @foreach($contracts as $kontrak)
                <tr>
                    <td colspan="5" class="px-6 py-4 text-center text-gray-500">
                        {{$kontrak->penyewa->nama_lengkap}}
                    </td>
                    <td colspan="5" class="px-6 py-4 text-center text-gray-500">
                        {{$kontrak->kamar->nomor_kamar}}
                    </td>
                    <td colspan="5" class="px-6 py-4 text-center text-gray-500">
                        {{$kontrak->tanggal_mulai}}
                    </td>
                    <td colspan="5" class="px-6 py-4 text-center text-gray-500">
                        {{$kontrak->tanggal_selesai}}
                    </td>
                    <td colspan="5" class="px-6 py-4 text-center text-gray-500">
                        {{$kontrak->harga_bulanan}}
                    </td>
                    <td colspan="5" class="px-6 py-4 text-center text-gray-500">
                        {{$kontrak->status}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <table class="min-w-full text-left text-sm font-light">
                <thead class="border-b font-medium bg-gray-100">
                    <tr>
                        <th class="px-6 py-4">Penyewa</th>
                        <th class="px-6 py-4">Kamar</th>
                        <th class="px-6 py-4">Tanggal Mulai</th>
                        <th class="px-6 py-4">Tanggal Selesai</th>
                        <th class="px-6 py-4">Harga Bulanan</th>
                        <th class="px-6 py-4">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contracts as $kontrak)
                        <tr class="border-b">
                            <td class="px-6 py-4">{{ $kontrak->penyewa->nama_lengkap }}</td>
                            <td class="px-6 py-4">{{ $kontrak->kamar->nomor_kamar }}</td>
                            <td class="px-6 py-4">{{ $kontrak->tanggal_mulai }}</td>
                            <td class="px-6 py-4">{{ $kontrak->tanggal_selesai }}</td>
                            <td class="px-6 py-4">{{ $kontrak->harga_bulanan }}</td>
                            <td class="px-6 py-4">
                                <span class="px-2 py-1 rounded text-sm {{ $kontrak->status == 'terisi' ? 'bg-yellow-200 text-yellow-800' : 'bg-green-200 text-green-800' }}">
                                    {{ $kontrak->status }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</div>
@endsection
