<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategoribarang extends Model
{
    protected $table = 'kategoribarang';
    protected $fillable =[
        'kategoribarang',
        'keteranganbarang',

    ];

    public function barangmasuk()
    {
        return $this->belongsTo(barangmasuk::class);
    }
}
