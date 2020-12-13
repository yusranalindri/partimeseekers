<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    protected $guarded=[];

    public function statusLowongan(){
        return $this->belongsTo('App\StatusLowongans','status');
    }

    public function mitra(){
        return $this->belongsTo('App\Mitra');
    }

//    public function user(){
//        return $this->belongsTo('App\User');
//    }
}
