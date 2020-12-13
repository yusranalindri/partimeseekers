<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class PembelianPaket extends Model
{
//    protected $fillable = [
//        'bukti_transfer', 'status_pembelian',
//    ];
protected $guarded=[];
    /**
    * Get the user that owns the phone.
    */
    public function paket()
    {
        return $this->belongsTo(Paket::class,'paket_id');
    }
    /**
    * Get the user that owns the phone.
    */
     function Mitra()
    {
        return $this->belongsTo(Mitra::class,'mitra_id');
    }
    public function stasusPembelian()
    {
        return $this->belongsTo(StatusPembelian::class,'status_pembelian_id');
    }
}
