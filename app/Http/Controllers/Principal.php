<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principal extends Controller
{
    function principal(){
        echo 'Página Principal';
    }

    function contato(string $nome){
        // echo "O nome do contato é: $nome";
        $contato = [
            "nome" => $nome
        ];
        return view('contato', $contato);
    }

    function contatoNomeCompleto(string $nome, string $sobrenome){
        echo "O nome completo do contato é: $nome $sobrenome";
    }

    function assunto(string $nome, string $sobrenome, string $assunto){
        echo "<h1>Contato: $nome $sobrenome </h1>";
        echo "<marquee> $assunto</marquee>";
    }

    function mensagem(string $nome, string $sobrenome, string $assunto, string $email, $telefone = 'Telefone não informado'){
        echo "<h1>Contato: $nome $sobrenome </h1>";
        echo "<marquee> $assunto</marquee>";
        echo "Email: $email<br>"; 
        echo "Telefone: $telefone";
    }
    
}


