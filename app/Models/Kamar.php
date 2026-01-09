<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $table = 'kamar';
    
<<<<<<< HEAD
    public $fillable = ['nomor_kamar', 'tipe', 'harga_bulanan', 'fasilitas', 'status'];

    public function kontrakSewa() {
        return $this->hasMany(KontrakSewa::class);
    }


    public $fillable = ['nama_lengkap', 'nomor_telepon', 'nomor_ktp', 'alamat_asal', 'pekerjaan'];

    public function kontrakSewa() {
        return $this->hasMany(KontrakSewa::class);
    }
}
=======
    // TODO: Definisikan kolom yang dapat diisi (mass assignment)
    protected $fillable = ['nomor_kamar', 'tipe', 'harga_bulanan', 'fasilitas', 'status'];
    
    // TODO: Definisikan relasi ke tabel lain
    public function kontrakSewa()
    {
        return $this->hasMany(KontrakSewa::class, 'kamar_id');
    }

    public function penyewa()
    {
        return $this->hasManyThrough(Penyewa::class, KontrakSewa::class, 'kamar_id', 'id', 'id', 'penyewa_id');
    }
}   
>>>>>>> def159aba11868f4e34da06103096bd0a29f6895
