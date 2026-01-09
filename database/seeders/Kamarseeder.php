<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kamar;

class Kamarseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kamar::create([
            'nomor_kamar' => 'A101',
            'tipe' => 'standard',
            'harga_bulanan' => 1500000,
            'fasilitas' => 'AC, Kamar Mandi Dalam, WiFi',
            'status' => 'tersedia',
        ]);
        Kamar::create([
            'nomor_kamar' => 'A102',
            'tipe' => 'deluxe',
            'harga_bulanan' => 2000000,
            'fasilitas' => 'AC, Kamar Mandi Dalam, WiFi, TV',
            'status' => 'tersedia',
        ]);
        Kamar::create([
            'nomor_kamar' => 'B201',
            'tipe' => 'vip',
            'harga_bulanan' => 3000000,
            'fasilitas' => 'AC, Kamar Mandi Dalam, WiFi, TV, Mini Bar',
            'status' => 'tersedia',
        ]);
        Kamar::create([
            'nomor_kamar' => 'B202',
            'tipe' => 'deluxe',
            'harga_bulanan' => 2500000,
            'fasilitas' => 'AC, Kamar Mandi Dalam, WiFi',
            'status' => 'tersedia',
        ]);
        Kamar::create([
            'nomor_kamar' => 'C301',
            'tipe' => 'standard',
            'harga_bulanan' => 1800000,
            'fasilitas' => 'AC, Kamar Mandi Dalam, WiFi',
            'status' => 'tersedia',
        ]);
        Kamar::create([
            'nomor_kamar' => 'C302',
            'tipe' => 'deluxe',
            'harga_bulanan' => 2200000,
            'fasilitas' => 'AC, Kamar Mandi Dalam, WiFi, TV',
            'status' => 'tersedia',
        ]);
        Kamar::create([
            'nomor_kamar' => 'D401',
            'tipe' => 'vip',
            'harga_bulanan' => 3500000,
            'fasilitas' => 'AC, Kamar Mandi Dalam, WiFi, TV, Mini Bar',
            'status' => 'tersedia',
        ]);
        Kamar::create([
            'nomor_kamar' => 'D402',
            'tipe' => 'standard',
            'harga_bulanan' => 1600000,
            'fasilitas' => 'AC, Kamar Mandi Dalam, WiFi',
            'status' => 'tersedia',
        ]);
        Kamar::create([
            'nomor_kamar' => 'E501',
            'tipe' => 'deluxe',
            'harga_bulanan' => 2400000,
            'fasilitas' => 'AC, Kamar Mandi Dalam, WiFi, TV',
            'status' => 'tersedia',
        ]);
        Kamar::create([
            'nomor_kamar' => 'E502',
            'tipe' => 'vip',
            'harga_bulanan' => 3200000,
            'fasilitas' => 'AC, Kamar Mandi Dalam, WiFi, TV, Mini Bar',
            'status' => 'tersedia',
        ]);
    }
}
