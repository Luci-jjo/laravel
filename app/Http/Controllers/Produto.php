<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Produto extends Controller
{
   function listar(){
    $produtos = [
        "produto1"  => ["id"=>1, "nome"=>"computador", "preco"=>2000],
        "produto2"  => ["id"=>2, "nome"=>"monitor 24 polegadas", "preco"=>850],
        "produto3"  => ["id"=>3, "nome"=>"teclado mecanico", "preco"=>350],
        "produto4"  => ["id"=>4, "nome"=>"mouse gamer", "preco"=>180],
        "produto5"  => ["id"=>5, "nome"=>"headset bluetooth", "preco"=>450],
        "produto6"  => ["id"=>6, "nome"=>"webcam full hd", "preco"=>280],
        "produto7"  => ["id"=>7, "nome"=>"impressora multifuncional", "preco"=>900],
        "produto8"  => ["id"=>8, "nome"=>"ssd 1tb nvme", "preco"=>520],
        "produto9"  => ["id"=>9, "nome"=>"memoria ram 16gb", "preco"=>380],
        "produto10" => ["id"=>10, "nome"=>"placa de video", "preco"=>2500],
        "produto11" => ["id"=>11, "nome"=>"roteador wi-fi 6", "preco"=>600],
        "produto12" => ["id"=>12, "nome"=>"caixa de som pc", "preco"=>150],
        "produto13" => ["id"=>13, "nome"=>"microfone condensador", "preco"=>420],
        "produto14" => ["id"=>14, "nome"=>"nobreak 1200va", "preco"=>750],
        "produto15" => ["id"=>15, "nome"=>"cadeira gamer", "preco"=>1200],
        "produto16" => ["id"=>16, "nome"=>"suporte articulado monitor", "preco"=>220],
        "produto17" => ["id"=>17, "nome"=>"hd externo 2tb", "preco"=>480],
        "produto18" => ["id"=>18, "nome"=>"hub usb-c", "preco"=>130],
        "produto19" => ["id"=>19, "nome"=>"mesa digitalizadora", "preco"=>390],
        "produto20" => ["id"=>20, "nome"=>"pendrive 128gb", "preco"=>90],
        "produto21" => ["id"=>21, "nome"=>"cooler processador", "preco"=>210]
    ];
    return view('estoque', ["produtos"=>$produtos]);
   }

    

    
}


