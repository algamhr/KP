<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barangkeluar extends Model
{
    protected $table = 'barangkeluar';
    protected $fillable =[
        'barangmasuk_id',
        'jumlah_brg_keluar',
        'tgl_keluar',
        'divisi_id',
    ];

    public function divisi()
    {
        return $this->belongsTo('App\divisi');
    }
    public function barangmasuk()
    {
        return $this->belongsTo('App\barangmasuk');
    }
}
