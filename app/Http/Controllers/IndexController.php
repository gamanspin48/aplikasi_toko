<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
   
    public function login()
    {
     
      return view('index');
    }

    public function pengaturan_barang(){
        return view('layout.pengaturan_barang');
    }

    public function barang_masuk(){
        return view('layout.barang_masuk');
    }

    public function barang_keluar(){
        return view('layout.barang_keluar');
    }
}

?>