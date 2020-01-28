<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
  public $timestamps = false;

  protected $table = "admin";
  protected $primarykey = 'id_admin';
  protected $hidden = ['password'];
  protected $fillable = ['username'];
}
