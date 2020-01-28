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

class data extends Controller
{
    public function __construct()
    {
      $this->middleware('login', ['only'=>['user']]);
    }

    public function login()
    {
      session_start();
      if(Session::get('username')){
              return redirect('/page')->with('alert','Kamu harus login dulu');
          }
          else{
              return view('admin/login');
          }
    }

    public function signin(Request $request)
    {
      session_start();
      $username = $request->username;
      $password = $request->password;

      $data = admin::where('username',$username)->first();
          if($data){
                    Session::put('username',$data->username);
                    Session::put('login',TRUE);
                    return redirect('/page');
            }else{
                  return redirect('login')->with('alert','Password atau Email, Salah !');
              }
    }

    public function logout(){
         Session::flush();
         return redirect('login')->with('alert','Kamu sudah logout');
     }

    public function home()
    {
      session_start();
      if(!Session::get('username')){
              return redirect('login')->with('alert','Kamu harus login dulu');
          }else{
      return view('admin/page');
    }
    }

    public function ambilProduk()
    {
      session_start();
      if(!Session::get('username')){
              return redirect('loginAdmin')->with('alert','Kamu harus login dulu');
          }
      $data = produk::orderBy('id_produk','DESC')->get();
      return view('admin/produk', compact('data'));
    }

    public function inputProduk()
    {
      session_start();
      if(!Session::get('username')){
              return redirect('login')->with('alert','Kamu harus login dulu');
          }else{
      return view('admin/inputProduk');
      }
    }

    public function kirimProduk(Request $request)
    {
      session_start();
      if(!Session::get('username')){
              return redirect('login')->with('alert','Kamu harus login dulu');
          }else{
            $nama_produk = $request->nama_produk;
            $jenis_produk = $request->jenis_produk;
            $spek = $request->spek;
            $foto1 = $request->file('foto1');
            $foto2 = $request->file('foto2');
            $foto3 = $request->file('foto3');
            $namefile1 = $foto1->getClientOriginalName();
            $namefile2 = $foto2->getClientOriginalName();
            $namefile3 = $foto3->getClientOriginalName();
            $foto1->move('../public/uploadFoto/',$namefile1);
            $foto2->move('../public/uploadFoto/',$namefile2);
            $foto3->move('../public/uploadFoto/',$namefile3);

            $isiProduk = produk::insert(
              ['id_produk' => null, 'nama_produk' => $nama_produk, 'jenis_produk' => $jenis_produk, 'spek' => $spek, 'foto1' => $namefile1, 'foto2' => $namefile2, 'foto3' => $namefile3]
            );
            if ($isiProduk) {
            return redirect("/inputProduk")->with('alert-success','Data Berhasil Ditambah');
          }else{
            return redirect("/inputProduk")->with('alert','Data Gagal Ditambah');
          }
          }
    }

    public function edit($id_produk)
    {
      session_start();
      if(!Session::get('username')){
              return redirect('login')->with('alert','Kamu harus login dulu');
          }

          $edit = produk::where('id_produk','=',$id_produk)->get()[0];
          return view('admin/editProduk', compact('edit'));
    }

    public function editProduk(Request $request, $id_produk)
    {
      session_start();
      if(!Session::get('username')){
              return redirect('login')->with('alert','Kamu harus login dulu');
          }
          $getfoto = produk::where('id_produk','=',$id_produk)->get()[0];

          $nama_produk = $request->nama_produk;
          $jenis_produk = $request->jenis_produk;
          $spek = $request->spek;

          if($request->hasFile('foto1')) {
          $foto1 = $request->file('foto1');
          $namefile1 = $foto1->getClientOriginalName();
          $foto1->move('../public/uploadFoto/',$namefile1);
        }else{$namefile1 = $getfoto->foto1;}

          if($request->hasFile('foto2')) {
          $foto2 = $request->file('foto2');
          $namefile2 = $foto2->getClientOriginalName();
          $foto2->move('../public/uploadFoto/',$namefile2);
        }else{$namefile2 = $getfoto->foto2;}

          if($request->hasFile('foto3')) {
          $foto3 = $request->file('foto3');
          $namefile3 = $foto3->getClientOriginalName();
          $foto3->move('../public/uploadFoto/',$namefile3);
        }else{$namefile3 = $getfoto->foto3;}



          $isiProduk = produk::insert(
            ['id_produk' => null, 'nama_produk' => $nama_produk, 'jenis_produk' => $jenis_produk, 'spek' => $spek, 'foto1' => $namefile1, 'foto2' => $namefile2, 'foto3' => $namefile3]
          );
          if ($isiProduk) {
          return redirect("/inputProduk")->with('alert-success','Data Berhasil Diupdate');
        }else{
          return redirect("/inputProduk")->with('alert','Data Gagal Diupdate');
        }

    }

    public function hapusProduk($id_produk)
    {
      session_start();
      if(!Session::get('username')){
              return redirect('login')->with('alert','Kamu harus login dulu');
          }
      $hapus = produk::where('id_produk','=',$id_produk)->delete()[0];
      return redirect('/produk');
    }
}
