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

    // menu 

    public function login()
    {
     
      return view('index');
    }

    public function pengaturan_barang(){
        $response = $this->client->request('GET', 'barang');
        $data = (array)json_decode($response->getBody());
        $data['barang_detail'] = [];
        for ($i = 0; $i < count($data['barang']); $i++){
            $kodeBarang = $data['barang'][$i]->kode_barang;
            $data['barang_detail'][$kodeBarang] = $data['barang'][$i];
        }
        $data['barang_detail'] = json_encode( $data['barang_detail']);
        return view('layout.pengaturan_barang',$data);
    }

    public function barang_masuk(){
        $response = $this->client->request('GET', 'barang');
        $data = (array)json_decode($response->getBody());
        return view('layout.barang_masuk');
    }

    public function barang_keluar(){
        $response = $this->client->request('GET', 'barang');
        $data = (array)json_decode($response->getBody());
        return view('layout.barang_keluar');
    }
}

?>