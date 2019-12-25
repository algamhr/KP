<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class divisi extends Model
{
    protected $table = 'divisi';

    protected $fillable =[
        'nama_divisi',
        'ket_divisi',
    ];
}
