<?php

namespace Akela\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function profile() {
        return $this->hasOne(Profile::class);
    }

    public function passport() {
        return $this->hasOne(Passport::class);
    }
    
    public function counsellors() {
        return $this->belongsTo(Counsellor::class);
    }

}
