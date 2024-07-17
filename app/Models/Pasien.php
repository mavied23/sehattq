<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_pasien',
        'alamat',
        'usia',
        'pemeriksaan',
        'keluhan'
    ];
    protected $primaryKey = 'id';

    public function Transaksi()
    {
        return $this->hasMany(Pasien::class, 'id_pasien', 'id');
    }
}
