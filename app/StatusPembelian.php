<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusPembelian extends Model
{
    public function pembelianpakets(){
        //setiap profil memiliki satu mahasiswa
        return $this->hasMany(PembelianPaket::class);
      }
      public function applylowongansS(){
        //setiap profil memiliki satu mahasiswa
        return $this->hasMany(ApplyLowongan::class);
      }
}
