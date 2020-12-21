<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelamar extends Model
{
    protected $guarded=['id'];

    public function applylowongan(){
        //setiap profil memiliki satu mahasiswa
        return $this->hasMany(ApplyLowongan::class);
      }
      public function User()
      {
          return $this->belongsTo(User::class,'user_id');
      }
}

