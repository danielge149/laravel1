<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProgramasController extends Controller
{
    //
    public function index(){
        $programas = DB::table ('programa')
                    ->join('facultad','facultad','=','codfacultad')->get();
        return view('programas.listado', ['program'=>$programas]);
    }

}
