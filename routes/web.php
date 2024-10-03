<?php

use App\Http\Controllers\FechaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('home');
});

Route::get('/fecha', function () {

        $datosFecha = [
            'dia' => date('d'),  
            'mes' => date('m'),
            'ano' => date('Y')   
        ];

    $diaCompact = date('d');
    $mesCompact = date('m');
    $anoCompact = date('Y');

    $diaWith = date('d');
    $mesWith = date('m');
    $anoWith = date('Y');
    
        return view('fecha',$datosFecha,compact('diaCompact','mesCompact','anoCompact'))
        ->with('diaWith',$diaWith)
        ->with('mesWith',$mesWith)
        ->with('anoWith',$anoWith);
});

