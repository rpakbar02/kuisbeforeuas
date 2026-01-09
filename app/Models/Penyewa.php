<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penyewa extends Model
{
    protected $table = 'penyewa';
    
    // TODO: Definisikan kolom yang dapat diisi (mass assignment)
    protected $fillable = ['nama_lengkap', 'nomor_telepon', 'nomor_ktp', 'alamat_asal', 'pekerjaan'];
    
    // TODO: Definisikan relasi ke tabel lain
<<<<<<< HEAD
    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class, 'penyewa_id');
=======
    public function kontrakSewa()
    {
        return $this->hasMany(KontrakSewa::class, 'penyewa_id');
    }
    public function kamar()
    {
        return $this->hasManyThrough(Kamar::class, KontrakSewa::class, 'penyewa_id', 'id', 'id', 'kamar_id');
>>>>>>> def159aba11868f4e34da06103096bd0a29f6895
    }
}
