<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\Principal::class, 'principal']);
Route::get('/contato', [App\Http\Controllers\Contato::class, 'contato']);

//ALUNO

Route::get('/aluno', [App\Http\Controllers\Aluno::class, 'aluno']);
Route::get('/aluno/login', [App\Http\Controllers\Aluno::class, 'aluno_login']);
Route::get('/aluno/logout', [App\Http\Controllers\Aluno::class, 'aluno_logout']);
Route::get('/aluno/consultar-nota', [App\Http\Controllers\Aluno::class, 'consultar_nota']);
Route::get('/aluno/horario-do-curso', [App\Http\Controllers\Aluno::class, 'horario_do_curso']);
Route::get('/aluno/vida-academica', [App\Http\Controllers\Aluno::class, 'vida_academica']);
Route::get('/aluno/emitir-documentos', [App\Http\Controllers\Aluno::class, 'emitir_documentos']);

//PROFESSOR

Route::get('/professor', [App\Http\Controllers\Professor::class, 'professor']);
Route::get('/professor/login', [App\Http\Controllers\Professor::class, 'professor_login']);
Route::get('/professor/logout', [App\Http\Controllers\Professor::class, 'professor_logout']);
Route::get('/professor/lancar-nota', [App\Http\Controllers\Professor::class, 'lancar_nota']);
Route::get('/professor/horario-do-curso', [App\Http\Controllers\Professor::class, 'grade_de_aula']);
Route::get('/professor/vida-academica', [App\Http\Controllers\Professor::class, 'vida_academica']);

Route::prefix('/aluno')->group(function(){
    Route::get('/index', [App\Http\Controllers\AlunoController::class, 'index'])->name('aluno.index');
    Route::post('/add', [App\Http\Controllers\AlunoController::class, 'add'])->name('aluno.add');
    Route::post('/remove', [App\Http\Controllers\AlunoController::class, 'remove'])->name('aluno.remove');
    Route::post('/edit', [App\Http\Controllers\AlunoController::class, 'edit'])->name('aluno.edit');
    Route::get('/list', [App\Http\Controllers\AlunoController::class, 'list'])->name('aluno.list');
}); 
