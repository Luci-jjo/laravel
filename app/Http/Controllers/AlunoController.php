<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlunoController extends Controller
{
    function index() {
        return view('aluno.index');
    }
    function adicionar(request $dados) { //post
        $aluno = new \App\Models\AlunoModel();
        $aluno::create($dados->all());
        
        return view('aluno.index', ['sucesso'=>'Aluno cadastrado!']);


    }   

    function remover(request $dados) {} //post

    function atualizar(request $dados) {} //post

    function consultar() {}

}
