<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Municipal extends Model
{

    protected $fillable = ['username', 'password', 'city_code', 'phone_number'];

    protected $hidden = [
    	'password'
    ];

    public function city()
    {
        return $this->belongsTo('App\City');
    }

    public function barangays()
    {
        return $this->hasMany('App\Barangay', 'city_code', 'city_code');
    }
}
