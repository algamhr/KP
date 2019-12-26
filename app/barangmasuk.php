<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barangmasuk extends Model
{
    protected $table = 'barang';
    protected $fillable =[
        'id',
        'kategoribarang_id',
        'nama_brg',
        'jumlah_brg',
        'tgl_masuk',
    ];

    public function kategoribarang()
    {
        return $this->belongsTo('App\kategoribarang');
    }
    public function barangkeluar()
    {
        return $this->hasMany('App\barangkeluar');
    }
}
