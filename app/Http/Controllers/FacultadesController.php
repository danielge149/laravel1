<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacultadesController extends Controller
{
    //
    public function index(){
        return view('facultades.listado');
    }

}
