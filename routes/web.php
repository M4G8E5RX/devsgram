<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', function () {
    return view('principal');
});

Route::get('/registrar', [RegisterController::class, 'index'])->name("register");
Route::post('/registrar', [RegisterController::class, 'store']);

Route::get('/ingresar', [LoginController::class, 'index'])->name("login");


Route::get('/feed', [PostController::class, 'index'])->name('posts.index');