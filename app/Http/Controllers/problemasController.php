<?php

namespace App\Http\Controllers;

use App\myClass\problemas;
use Illuminate\Http\Request;

class problemasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($nmroProblema)
    {
        $problems = new problemas();
        if ($nmroProblema == 1){
            $respuesta = "Respuesta de Problema 1";
        }
        else{
            $respuesta = "Respuesta de Problema 2";
        }
        return view('problema_'.$nmroProblema, compact('respuesta'));
    }
}
