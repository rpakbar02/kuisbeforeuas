<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Penyewa;

class PenyewaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Penyewa::create([
            'nama_lengkap' => 'John Doe',
            'nomor_telepon' => '081234567890',
            'nomor_ktp' => '1234567890123456',
            'alamat_asal' => 'Jl. Contoh No. 123',
            'pekerjaan' => 'Developer',
        ]);
        Penyewa::create([
            'nama_lengkap' => 'Jane Smith',
            'nomor_telepon' => '089876543210',
            'nomor_ktp' => '6543210987654321',
            'alamat_asal' => 'Jl. Sample No. 456',
            'pekerjaan' => 'Designer',
        ]);
        Penyewa::create([
            'nama_lengkap' => 'Alice Johnson',
            'nomor_telepon' => '082112345678',
            'nomor_ktp' => '1122334455667788',
            'alamat_asal' => 'Jl. Example No. 789',
            'pekerjaan' => 'Teacher',
        ]);
        Penyewa::create([
            'nama_lengkap' => 'Bob Williams',
            'nomor_telepon' => '083398765432',
            'nomor_ktp' => '8877665544332211',
            'alamat_asal' => 'Jl. Test No. 101',
            'pekerjaan' => 'Engineer',
        ]);
        Penyewa::create([
            'nama_lengkap' => 'Charlie Brown',
            'nomor_telepon' => '084412345678',
            'nomor_ktp' => '3344556677889900',
            'alamat_asal' => 'Jl. Demo No. 202',
            'pekerjaan' => 'Artist',
        ]);
    }
}
