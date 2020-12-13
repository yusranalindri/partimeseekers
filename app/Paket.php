<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    /**
     * Get the comments for the blog post.
     */
    // public function PembelianPakets()
    // {
    //     return $this->hasMany('App\Models\PembelianPaket');
    // }
    public function pembelianpaket(){
        //setiap profil memiliki satu mahasiswa
        return $this->hasMany(PembelianPaket::class);
      }
}
