<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    protected $guarded = ['id'];
    protected $dates=['created_at','updated_at','durasi'];
    /**
     * Get the comments for the blog post.
     */
    public function lowongans()
    {
        return $this->hasMany(Lowongan::class);
    }
    public function pembelianPakets()
    {
        return $this->hasMany(PembelianPaket::class);
    }
    /**
    * Get the user that owns the phone.
    */
    public function User()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
