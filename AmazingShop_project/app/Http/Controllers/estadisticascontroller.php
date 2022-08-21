<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class estadisticascontroller extends Controller
{
    public function index() 
{
$response = Http::get('http://localhost:3000/show-estatics', 'admin/estadistica');
//$reportes = $response->json();
//return view('reports', compact('reportes'));
return view('estadisticas')->with('Resulestatics', json_decode($response,true));}

public function agregarestadistica()
    {
      return view('agregarestadistica');
    }

}
