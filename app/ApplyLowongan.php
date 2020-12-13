<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplyLowongan extends Model
{
  protected $table = 'apply_lowongans';
  protected $fillable = [
      'berkas', 'pelamar_id','lowongan_id','status'
  ];

}
