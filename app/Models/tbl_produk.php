<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_produk extends Model
{
    protected $table = 'tbl_produks';
    protected $primarykey = 'id_produk';
    protected $fillable = ['nama_produk', 'harga_jual'];

    public function kategori(){
        return $this->belongsTo('App\Kategori');
    }
}
