<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;


Route::get('/', [App\Http\Controllers\Principal::class, 'principal']);


Route::get('/somar/{p1}/{p2}', [App\Http\Controllers\Principal::class, 'somar']);
Route::get('/sub/{p1}/{p2}', [App\Http\Controllers\Principal::class, 'sub']);
Route::get('/mult/{p1}/{p2}', [App\Http\Controllers\Principal::class, 'mult']);
Route::get('/div/{p1}/{p2}', [App\Http\Controllers\Principal::class, 'div']);

Route::get('/produto/listar', [App\Http\Controllers\produto::class, 'Listar']);



