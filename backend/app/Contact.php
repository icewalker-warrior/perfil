<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tel', 'cel', 'address', 'website', 'mail', 'user_id'
    ];

    public function user() {
        return $this->hasOne('App\User');
    }


}
