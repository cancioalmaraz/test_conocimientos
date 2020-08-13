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
    public function index($nmroProblema, Request $request)
    {
        $problems = new problemas();
        $older = $request->get('text');
        if ($nmroProblema == 1){
            $id = 1;
            $respuesta = $problems->resolverProblema_1( $request->get('text') );
        }
        else{
            $id = 2;
            $respuesta = $problems->resolverProblema_2( $request->get('text') );
        }

        return view('problema_'.$nmroProblema, compact('respuesta', 'id', 'older'));
    }

}
