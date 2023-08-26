<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet_profile extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'id_user' , 'img_thumbnail', 'name', 'gender', 'species', 'breed', 'birthdate', 'sterilized', 'weight', 'description',
  ];
}
