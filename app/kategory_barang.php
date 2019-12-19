<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategory_barang extends Model
{
    protected $table = 'kategory_barang';
    protected $fillable =[
        'id',
        'kategory_barang',
        'keterangan',

    ];

    public function barangmasuk()
    {
        return $this->belongsTo(barangmasuk::class);
    }
}
