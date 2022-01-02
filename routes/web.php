<?php

use App\Http\Controllers\CadastroAlunosController;
use App\Http\Controllers\CadastroNotasController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index' , [IndexController::class, 'Index']);
Route::get('/cadastraralunos' , [CadastroAlunosController::class, 'Create']);
Route::post('/cadastraralunos' , [CadastroAlunosController::class, 'Store']);
Route::get('/listaralunos' , [CadastroAlunosController::class, 'listarAlunos']);
Route::delete('/cadastraralunos/remover/{id}' , [CadastroAlunosController::class, 'Destroy']);
Route::get('/cadastrarnotas' , [CadastroNotasController::class, 'Create']);
Route::post('/cadastrarnotas' , [CadastroNotasController::class, 'Store']);
