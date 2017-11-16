<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable=[
          'name',
          'first_name',
          'last_name',
          'user_id',
          'designation',
          'profile_pic',
          'city',
        
    ];
}
