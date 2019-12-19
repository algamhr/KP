<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barangmasuk extends Model
{
    protected $table = 'barang';
    protected $fillable =[
        'id',
        'kategory_barang_id',
        'nama_brg',
        'jumlah_brg',
        'tgl_masuk',
    ];

    public function kategory_barang()
    {
        return $this->HasmMany(kategory_barang::class);
    }
}
