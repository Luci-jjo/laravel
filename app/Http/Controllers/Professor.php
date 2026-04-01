<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Professor extends Controller
{
    function show() {
        $professores = [
            (object) ['nome'=>'Carlos', 'cpf'=>'123.123.123-00'],
            (object) ['nome'=>'Carlos', 'cpf'=>'231.231.231-32'],
            (object) ['nome'=>'Carlos', 'cpf'=>'321.321.321.12']

        ];

        
    }
}
