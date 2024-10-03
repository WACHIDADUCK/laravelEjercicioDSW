<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FechaController extends Controller
{
    public function index()
    {
         // Definir la variable
         $fechaController  = date('Y-m-d H:i:s');

         // Pasar la variable a la vista usando compact()
         return view('fecha', compact('fechaController'));
    }
}
