<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class promo extends Model
{
    use HasFactory;
    protected $table = 'promo';
    protected $primarykey ='id_promo';
    protected $fillable = ['id_promo', 'nama_promo', 'harga', 'stok', 'foto_promo'];
}
