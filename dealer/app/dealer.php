<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dealer extends Model
{
  public $timestamps = false;

  protected $table = "dealer";
  protected $primarykey = "id_user";
  protected $fillable = ['review','rating','waktu'];
}
