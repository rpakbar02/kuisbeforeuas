@extends('layouts.app')

@section('title', 'Detail Kontrak Sewa')

@section('content')
<div class="space-y-6">
    <div class="flex justify-between items-center">
        <h1 class="text-3xl font-bold text-gray-900">Detail Kontrak</h1>
    </div>

    <div class="flex space-x-2">
        <a href="/kontrak-sewa" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
            Kembali
        </a>
    </div>
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <div class="p-6">

            <div class="mb-4">
                <h2 class="text-xl font-semibold text-gray-800 mb-2">Informasi Kontrak</h2>
                <p><strong>Tanggal Mulai:</strong> {{ $kontrakSewa->tanggal_mulai }}</p>
                <p><strong>Tanggal Selesai:</strong> {{ $kontrakSewa->tanggal_selesai }}</p>
                <p><strong>Harga Bulanan:</strong> Rp {{ number_format($kontrakSewa->harga_bulanan, 0, ',', '.') }}</p>
                <p><strong>Status:</strong> {{ ucfirst($kontrakSewa->status) }}</p>
            </div>

            <div class="mb-4">
                <h2 class="text-xl font-semibold text-gray-800 mb-2">Informasi Penyewa</h2>
                <p><strong>Nama:</strong> {{ $kontrakSewa->penyewa->nama_lengkap }}</p>
                <p><strong>NIK:</strong> {{ $kontrakSewa->penyewa->nomor_ktp }}</p>
                <p><strong>Telepon:</strong> {{ $kontrakSewa->penyewa->nomor_telepon }}</p>
                <p><strong>Alamat:</strong> {{ $kontrakSewa->penyewa->alamat_asal }}</p>
                <p><strong>Pekerjaan:</strong> {{ $kontrakSewa->penyewa->pekerjaan }}</p>
            </div>

            <div>
                <h2 class="text-xl font-semibold text-gray-800 mb-2">Informasi Kamar</h2>
                <p><strong>Nomor Kamar:</strong> {{ $kontrakSewa->kamar->nomor_kamar }}</p>
                <p><strong>Tipe Kamar:</strong> {{ $kontrakSewa->kamar->tipe }}</p>
                <p><strong>Fasilitas:</strong> {{ $kontrakSewa->kamar->fasilitas }}</p>
            </div>

            <div>
                <h2 class="text-xl font-semibold text-gray-800 mb-2">Riwayat Pembayaran</h2>
                <table class="min-w-full text-center text-sm divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-center text-sm font-medium text-gray-500 uppercase">Tanggal Pembayaran</th>   
                            <th class="px-6 py-3 text-center text-sm font-medium text-gray-500 uppercase">Jumlah</th>
                            <th class="px-6 py-3 text-center text-sm font-medium text-gray-500 uppercase">Status</th>
                            <th class="px-6 py-3 text-center text-sm font-medium text-gray-500 uppercase">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($pembayarans as $pembayaran)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $pembayaran->tanggal_bayar }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Rp {{ number_format($pembayaran->jumlah_bayar, 0, ',', '.') }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ ucfirst($pembayaran->status) }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ ucfirst($pembayaran->keterangan) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
                
        </div>
    </div>
</div>
@endsection
