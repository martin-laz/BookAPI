<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  protected $fillable = ['title', 'author', 'summary'];
  protected $hidden =['id', 'created_at', 'updated_at'];

}
