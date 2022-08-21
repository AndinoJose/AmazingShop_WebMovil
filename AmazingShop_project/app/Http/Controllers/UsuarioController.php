<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;



class Usuariocontroller extends Controller
{
    
public function index()
{
$response = Http::get('http://localhost:3000/selectusuario', 'admin/usuario');
//$Usuario = $response->json();
//return view('Usuario', compact('Usuario'));
return view('Usuario')->with('ResulUsuario', json_decode($response,true));
}}
