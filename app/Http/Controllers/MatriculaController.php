<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MatriculaController extends Controller
{
    public function mostrar(){
        //CON RAW QUERY
        $resultado = DB::select('select e.nombres, e.apellidos, c.nombre
                                       from matriculas as m
                                       join estudiantes as e
                                       on m.id_estudiante=e.id
                                       join cursos as c
                                       on m.id_curso = c.id');
        return dd($resultado);
    }
}
