<?php

namespace Akela\Models;

use Illuminate\Database\Eloquent\Model;

class Passport extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'passport_number',
        'passport_issue_date',
        'passport_expiry_date',
        'passport_issuing_authority',
        'created_at'
    ];

    public function profile()
    {
//        return $this->belongsTo(Profile::class);
    }
}
