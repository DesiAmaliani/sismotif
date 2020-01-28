<?php

namespace App\Http\Controllers;

use Session;
use View;
use redirect;
use Input;
use Hash;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\admin;
use App\produk;

class index extends Controller
{
    public function home()
    {
      return view('produk');
    }
    public function awal()
    {
      return view('home');
    }
    public function dealer()
    {
      return view('dealer');
    }
    public function detail_produk()
    {
      return view('detail_produk');
    }
    public function matic_produk()
    {
      return view('matic_produk');
    }
    public function sport_produk()
    {
      return view('sport_produk');
    }
    // public function produk()
    // {
    //   return view('produk');
    // }
}
