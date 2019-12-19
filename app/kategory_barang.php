<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategory_barang extends Model
{
    protected $table = 'kategori_barang';
    protected $fillable =[
        'id',
        'kategori_barang',
        'keterangan',

    ];

    public function barangmasuk()
    {
        return $this->belongsTo(barangmasuk::class);
    }
}
