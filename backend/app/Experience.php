<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'date', 'description', 'user_id'
    ];

    public function user() {
        return $this->hasOne('App\User');
    }


}
