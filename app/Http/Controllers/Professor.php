<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Professor extends Controller
{
    function professor(){
        echo 'Página Do Professor';
    }

    function professor_login(){
        echo 'Página de Login do Aluno';
    }

    function professor_logout(){
        echo 'Página de logout do Professor';
    }

    function lancar_nota(){
        echo 'Lançamento de notas';
    }

    function abrir_chamada(){
        echo 'Abrir chamada';
    }

    function grade_de_aula(){
        echo 'Horarios das aulas';
    }

    
}


