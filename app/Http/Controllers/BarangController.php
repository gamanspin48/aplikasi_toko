<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class BarangController extends Controller
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

    public function all()
    {
     
      return view('index');
    }

    public function find($id){
        $response = $this->client->request('GET', 'barang/'.$id);
        $data = (array)json_decode($response->getBody());
        return $data;
    }
}

?>