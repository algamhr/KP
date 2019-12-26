<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class divisi extends Model
{
    protected $table = 'divisi';

    protected $fillable =[
        'id',
        'nama_divisi',
        'ket_divisi',
    ];

    public function barangkeluar()
    {
        return $this->hasMany('App\barangkeluar');
    }
}
