<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barangmasuk extends Model
{
    protected $table = 'barang';
    protected $fillable =[
        'id',
        'kategori_brg',
        'nama_brg',
        'jumlah_brg',
        'tgl_masuk',
    ];
}