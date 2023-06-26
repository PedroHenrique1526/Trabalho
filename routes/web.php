<?php
use App\Http\Controllers\PizzaController;
use App\Models\Pizza;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/show', [PizzaController::class, 'show'])->name('show');

Route::get('/apaga/{id}', [PizzaController::class, 'apaga'])->name('apaga');

Route::get('/cadastro', [PizzaController::class, 'cadastro'])->name('cadastro');
Route::post('/cadastro', [PizzaController::class, 'store'])->name('store');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/edita/{id}', [PizzaController::class, 'edita'])->name('edita');
Route::post('/atualiza/{id}', [PizzaController::class, 'atualiza'])->name('atualiza');