<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Curso extends Controller
{
    function show() {
        $cursos = [
            (object) ['nome'=>'Carlos', 'horario'=>'10:00'],
            (object) ['nome'=>'Carlos', 'horario'=>'10:00'],
            (object) ['nome'=>'Carlos', 'horario'=>'10:00']

        ];

        
    }
}
