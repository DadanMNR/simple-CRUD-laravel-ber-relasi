<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjual extends Model
{
    use HasFactory;
    protected $table = 'penjual';
    protected $primarykey = ['id'];
    public function fjenis()
    {
        return $this->belongsTo(Jenis::class, 'jenis_barang', 'id');
    }
}
