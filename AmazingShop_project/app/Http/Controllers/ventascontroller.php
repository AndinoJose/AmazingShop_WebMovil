<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ventascontroller extends Controller
{
  public function index()
  {
      $response = Http::get('http://localhost:3000/showSales', 'admin/Ventas');
    //$Ventas = $response->json();
    //return view('Sales', compact('Ventas'));
      return view('Sales')->with('ResulVenta', json_decode($response,true));
  }

  public function create()
  {
    return view('agregarventa');
  }

  public function store()
  {
    


  }

}
