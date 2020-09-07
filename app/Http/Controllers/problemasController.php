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
        $respuesta = $problems->resolverProblemas( $nmroProblema, $older );
        return view('problema', [
            'respuesta' => $respuesta,
            'id' => $nmroProblema,
            'older' => $older,
        ]);
    }

}
