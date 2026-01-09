<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $table = 'kamar';
    
    public $fillable = ['nomor_kamar', 'tipe', 'harga_bulanan', 'fasilitas', 'status'];

    public function kontrakSewa() {
        return $this->hasMany(KontrakSewa::class);
    }


    public $fillable = ['nama_lengkap', 'nomor_telepon', 'nomor_ktp', 'alamat_asal', 'pekerjaan'];

    public function kontrakSewa() {
        return $this->hasMany(KontrakSewa::class);
    }
}
