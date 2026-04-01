<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Aluno extends Controller
{
    function show() {
        $alunos = [
            (object) ['nome'=>'Seleide', 'telefone'=>'123', 'email'=>'seleide@gmail.com'],
            (object) ['nome'=>'Carlos', 'telefone'=>'456', 'email'=>'carlos@gmail.com'],
            (object) ['nome'=>'Samuel', 'telefone'=>'789', 'email'=>'samuel@gmail.com']
        ];
        return view('aluno',compact ('alunos'));
        
    }

    function add($nome, $telefone, $email) {
        $alunos = []
    }
}
