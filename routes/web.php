<?php

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
    echo 'A rota acessada seria uma pagina inicial para aplicacão, <a href="'.route('album.index').'">clique aqui</a> para ir para página do gerenciador';
})->name('album.index');

// Auth::routes();

Route::resource('album', 'AlbumController');
Route::resource('track', 'TrackController');

Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="'.route('album.index').'">clique aqui</a> para ir para página inicial';
});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
