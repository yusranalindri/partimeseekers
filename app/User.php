<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * Get the comments for the blog post.
     */
    public function Mitras()
    {
        return $this->hasMany(Mitra::class);
    }
    public function Pelamars()
    {
        return $this->hasMany(Pelamar::class);
    }   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'alamat', 'phone', 'email','username', 'password','role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function pelamar()
    {
        return $this->hasOne('App\Pelamar');
    }
    public function mitra()
    {
        return $this->hasOne('App\Mitra');
    }

}
