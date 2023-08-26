<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet_pictures extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'id_pet', 'picture', 'path',
  ];
}
