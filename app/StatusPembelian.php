<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusPembelian extends Model
{
    public function pembelianpaket(){
        //setiap profil memiliki satu mahasiswa
        return $this->hasMany(PembelianPaket::class);
      }
      public function applylowongan(){
        //setiap profil memiliki satu mahasiswa
        return $this->hasMany(ApplyLowongan::class);
      }
}
