<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class IndexController extends Controller
{   
    private $client;

    public function __construct()
    {
        $this->client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://localhost:3000/'
        ]);
    }
    public function login()
    {
     
      return view('index');
    }

    public function pengaturan_barang(){
        $response = $this->client->request('GET', 'barang');
        $data = (array)json_decode($response->getBody());
        return view('layout.pengaturan_barang',$data);
    }

    public function barang_masuk(){
        return view('layout.barang_masuk');
    }

    public function barang_keluar(){
        return view('layout.barang_keluar');
    }
}

?>