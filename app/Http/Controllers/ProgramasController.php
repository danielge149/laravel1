<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use App\Models\Program;
use App\Models\Faculty;

class ProgramasController extends Controller
{
    /*
    public function index()
    {
        $programas = DB::table('programa')
                    ->join('facultad', 'facultad', '=', 'codfacultad')
                    ->get();

        return view('programas.listado', ['program' => $programas]);
    }
    */


    public function index()
    {
        $query = Program::all(); // select * from programas
        return view('programas.listado', ['program' => $query]);
    }


    public function form_registro()
    {
        $query = Faculty::all();
        return view('programas.form_registro', compact('query'));
    }

    public function registrar()
    {
        
    }
}
