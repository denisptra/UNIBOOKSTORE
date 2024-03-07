<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;
use App\Models\Penerbit;



class Buku extends Model
{
    use HasFactory;

    protected $table = "buku";
    protected $fillable = [
        'kode',
        'kategori_id',
        'nama_buku',
        'harga',
        'stok',
        'penerbit_id'
    ];

    // relasi belongsTo
    public function kategori()
    {
        return $this->belongsTo(Kategori::class,'kategori','id');     
    }
    public function penerbit()
    {
        return $this->belongsTo(Penerbit::class,'penerbit_id','id');     
    }
}
