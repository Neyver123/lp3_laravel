<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Nota;

class NotaController extends Controller
{
    public function notaPorId($id){
        //CON QUERY BUILDER (primero indicas la tabla)
        $resultado = DB::table('notas as n')
            ->join('matriculas as m', 'm.id', '=', 'n.id_matricula')
            ->join('cursos as c', 'c.id', '=', 'm.id_curso')
            ->join('estudiantes as e', 'e.id', '=', 'm.id_estudiante')
            //->select('e.nombre', 'e.apellidos', 'c.nombre', 'n.ta1','n.ta2','n.ta3','n.ta4','n.emc', 'n.ef')
            ->select('e.*', 'c.*', 'n.*')
            ->where('e.id', $id)
            ->get();
        return $resultado;
    }
}
