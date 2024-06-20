<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
class GeneradorController extends Controller
{
    public function imprimir(){
        // $pdf = \PDF::loadView('ejemplo');
        // return $pdf->download('ejemplo.pdf');
        $today=Carbon::now()->format('d/m/y');
        $pdf = \PDF::loadView('ejemplo',compact('today'));
        return $pdf->download('ejemplo.pdf');
    }
}
