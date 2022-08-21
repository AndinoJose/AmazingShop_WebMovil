<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;



class reportescontroller extends Controller
{
// GET REPORTS
public function index() 
{
$response = Http::get('http://localhost:3000/showreports', 'admin/reporte');
//$reportes = $response->json();
//return view('reports', compact('reportes'));
return view('reports')->with('ResulReporte', json_decode($response,true));}


//INSERT REPORTS

 public function create(){
{
    $response = Http::post('http://localhost:3000/insertreport', '/insert-report');
    return view('reports')->with('insertarreporte', json_decode($response,true));}
    }


    public function agregarreporte()
    {
      return view('agregarreporte');
    }
}





