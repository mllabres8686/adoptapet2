<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_profile extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_user' , 'name', 'city', 'picture', 'phone_number', 'email', 'description',
    ];
}
