<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;



class Personascontroller extends Controller
{
    
public function index()
{
$response = Http::get('http://localhost:3000/selectpersona', 'admin/persona');
//$Persona = $response->json();
//return view('Persona', compact('Persona'));
return view('Persona')->with('ResulPersona', json_decode($response,true));
}}
