<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Componente extends Controller
{
    function show() {
        $componentes = [
            (object) ['nome'=>'Carlos', 'horario'=>'10:00'],
            (object) ['nome'=>'Carlos', 'horario'=>'10:00'],
            (object) ['nome'=>'Carlos', 'horario'=>'10:00']

        ];

        
    }
}
