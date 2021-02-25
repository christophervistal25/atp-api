<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SMS extends Model
{
    protected $fillable = ['phone_number', 'message', 'status'];
}
