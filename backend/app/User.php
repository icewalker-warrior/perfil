<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image', 'name', 'profession', 'description'
    ];

    public function contact()
    {
        return $this->hasOne('App\Contact');
    }

    public function skills()
    {
        return $this->hasMany('App\Skill');
    }

    public function experiences()
    {
        return $this->hasMany('App\Experience');
    }

}
