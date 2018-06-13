<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  protected $table = 'students';

/**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
<<<<<<< HEAD
      'name', 'fatherName', 'email', 'phone','address', 'joined', 'secId', 'password'
=======
      'name', 'fatherName', 'email', 'phone','address', 'joined', 'secId'
>>>>>>> 36b615645537cc9deccbf491342f197eae9630b2
  ];
}
