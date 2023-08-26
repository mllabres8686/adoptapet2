<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entity_profile extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'id_user', 'name', 'logo', 'banner', 'address', 'time_table', 'phone_number', 'email', 'description',
  ];
}
