<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;
    protected $table = 'Obats';
    protected $fillable = [
        'nama_obat',
        'deskripsi_obat',
        'harga',
        'gambar',
    ];


    public function Transaksi()
    {
        return $this->hasMany(Obat::class, 'id_obat', 'id');
    }
}
