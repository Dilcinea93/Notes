<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cursoModel;

class CursoController extends Controller
{
    //
    public function index(){
        $cursos=cursoModel::all();
        return view('listaCursos',compact('cursos'));
    }
}
