<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $table = 'kamar';
    
    // TODO: Definisikan kolom yang dapat diisi (mass assignment)

    protected $fillable = ['nomor_kamar', 'tipe', 'harga_bulanan', 'fasilitas', 'status'];
    
    // TODO: Definisikan relasi ke tabel lain
    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class, 'kamar_id');
    }
}
