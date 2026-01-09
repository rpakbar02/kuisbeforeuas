<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\KontrakSewa;

class KontrakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KontrakSewa::create([
            'penyewa_id' => 1,
            'kamar_id' => 1,
            'tanggal_mulai' => '2024-01-01',
            'tanggal_selesai' => '2024-12-31',
            'harga_bulanan' => 1500000,
            'status' => 'aktif',
        ]);
        KontrakSewa::create([
            'penyewa_id' => 2,
            'kamar_id' => 2,
            'tanggal_mulai' => '2024-02-01',
            'tanggal_selesai' => '2025-01-31',
            'harga_bulanan' => 2000000,
            'status' => 'aktif',
        ]);
        KontrakSewa::create([
            'penyewa_id' => 3,
            'kamar_id' => 3,
            'tanggal_mulai' => '2024-03-01',
            'tanggal_selesai' => '2025-02-28',
            'harga_bulanan' => 3000000,
            'status' => 'aktif',
        ]);
        KontrakSewa::create([
            'penyewa_id' => 4,
            'kamar_id' => 4,
            'tanggal_mulai' => '2024-04-01',
            'tanggal_selesai' => '2025-03-31',
            'harga_bulanan' => 2500000,
            'status' => 'aktif',
        ]);
        KontrakSewa::create([
            'penyewa_id' => 5,
            'kamar_id' => 5,
            'tanggal_mulai' => '2024-05-01',
            'tanggal_selesai' => '2025-04-30',
            'harga_bulanan' => 2200000,
            'status' => 'aktif',
        ]);
        KontrakSewa::create([
            'penyewa_id' => 1,
            'kamar_id' => 6,
            'tanggal_mulai' => '2024-06-01',
            'tanggal_selesai' => '2025-05-31',
            'harga_bulanan' => 1800000,
            'status' => 'aktif',
        ]);
    }
}
