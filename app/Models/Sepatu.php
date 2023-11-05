<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sepatu extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'id_suplier', 'nama_sepatu', 'merk','stok','warna','foto'];
    protected $table = 'sepatus';
    public function Sepatu()
    {
        return $this->hasMany(Sepatu::class, 'id_sepatu', 'id');
    }
    public function Suplier()
    {
        return $this->belongsTo(Suplier::class, 'id_suplier', 'id');
    }
}
