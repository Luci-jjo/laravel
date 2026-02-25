<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Aluno extends Controller
{
    function aluno(){
        echo 'Página Do Aluno';
    }

    function aluno_login(){
        echo 'Página de Login do Aluno';
    }

    function aluno_logout(){
        echo 'Página de logout do Aluno';
    }

    function consultar_nota(){
        echo 'Notas do aluno';
    }

    function vida_academica(){
        echo 'Consultar vida acadêmica';
    }

    function horario_do_curso(){
        echo 'Horarios do curso';
    }

    function emitir_documentos(){
        echo 'Emissão de Documentos do Aluno';
    }

    
}


