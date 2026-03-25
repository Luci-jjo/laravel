<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principal extends Controller
{
    function Principal(){
        echo 'Página Principal';
    }

    function somar(int $p1, int $p2){
        // echo "A soma entre $p1 + $p2 é ($p1+$p2)";
        return view('somar', ["p1"=> $p1, "p2"=> $p2]);
    }
    function sub(int $p1, int $p2){
        // echo "A soma entre $p1 + $p2 é ($p1+$p2)";
        return view('sub', ["p1"=> $p1, "p2"=> $p2]);
    }
    function mult(int $p1, int $p2){
        // echo "A soma entre $p1 + $p2 é ($p1+$p2)";
        return view('mult', ["p1"=> $p1, "p2"=> $p2]);
    }
    function div(int $p1, int $p2){
        // echo "A soma entre $p1 + $p2 é ($p1+$p2)";
        return view('div', ["p1"=> $p1, "p2"=> $p2]);
    }

    
}


