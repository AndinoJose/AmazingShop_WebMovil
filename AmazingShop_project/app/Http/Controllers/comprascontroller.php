<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class comprascontroller extends Controller
{
    public function index()
    {
        $response = Http::get('http://localhost:3000/showPurchases', 'admin/Compras');
      //$Compras = $response->json();
      //return view('Purchases', compact('Compras'));
        return view('Purchases')->with('ResulCompra', json_decode($response,true));
    }

}

