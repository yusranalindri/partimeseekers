<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    protected $guarded = ['id'];
    /**
     * Get the comments for the blog post.
     */
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
