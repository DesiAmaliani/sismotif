<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
  public $timestamps = false;

  protected $table = "produk";
  protected $primarykey = "id_produk";
  protected $fillable = ['nama_produk','jenis_produk','spek','foto1','foto2','foto3'];
}
