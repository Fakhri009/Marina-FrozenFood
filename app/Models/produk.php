<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;

    protected $table = 'produk';
    protected $primarykey ='id_produk';
    protected $fillable = ['id_produk', 'nama_produk', 'harga', 'stok', 'foto'];

    public function kategori()
    {
        return $this->hasMany(Kategori::class);
    }
}
