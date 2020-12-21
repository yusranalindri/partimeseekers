<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplyLowongan extends Model
{
    public function pelamar()
    {
        return $this->belongsTo(Pelamar::class,'pelamar_id');
    }
    public function lowongan()
    {
        return $this->belongsTo(Lowongan::class,'lowongan_id');
    }
    public function statuspembelian()
    {
        return $this->belongsTo(StatusPembelian::class,'status');
    }
}
