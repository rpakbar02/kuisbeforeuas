<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pembayaran;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pembayaran::create([
            'kontrak_sewa_id' => 1,
            'bulan' => 1,
            'tahun' => 2024,
            'jumlah_bayar' => 1500000,
            'tanggal_bayar' => '2024-01-15',
            'status' => 'lunas',
            'keterangan' => 'Pembayaran bulan Januari',
        ]);
        Pembayaran::create([
            'kontrak_sewa_id' => 2,
            'bulan' => 2,
            'tahun' => 2024,
            'jumlah_bayar' => 2000000,
            'tanggal_bayar' => '2024-01-15',
            'status' => 'tertunggak',
            'keterangan' => 'Pembayaran bulan Februari',
        ]);
        Pembayaran::create([
            'kontrak_sewa_id' => 3,
            'bulan' => 3,
            'tahun' => 2024,
            'jumlah_bayar' => 3000000,
            'tanggal_bayar' => '2024-01-15',
            'status' => 'lunas',
            'keterangan' => 'Pembayaran bulan Maret',
        ]);
        Pembayaran::create([
            'kontrak_sewa_id' => 4,
            'bulan' => 4,
            'tahun' => 2024,
            'jumlah_bayar' => 2500000,
            'tanggal_bayar' => '2024-01-15',
            'status' => 'lunas',
            'keterangan' => 'Pembayaran bulan April',
        ]);
        Pembayaran::create([
            'kontrak_sewa_id' => 5,
            'bulan' => 5,
            'tahun' => 2024,
            'jumlah_bayar' => 2200000,
            'tanggal_bayar' => '2024-01-15',
            'status' => 'tertunggak',
            'keterangan' => 'Pembayaran bulan Mei',
        ]);
        Pembayaran::create([
            'kontrak_sewa_id' => 6,
            'bulan' => 6,
            'tahun' => 2024,
            'jumlah_bayar' => 1800000,
            'tanggal_bayar' => '2024-01-15',
            'status' => 'lunas',
            'keterangan' => 'Pembayaran bulan Juni',
        ]);
    }
}
