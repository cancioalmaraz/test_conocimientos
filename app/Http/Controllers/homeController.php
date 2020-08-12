<?php

namespace App\Http\Controllers;

use App\myClass\problemas;
use Illuminate\Http\Request;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $problems = new problemas();
        return view('home');
    }

}
