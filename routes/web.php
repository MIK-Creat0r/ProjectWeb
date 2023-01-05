<?php
use App\Http\Controllers\WebController;
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

Route::get('/', [WebController::class, 'home']);

Route::get('/tabel', [WebController::class, 'index']);

Route::get('/cari/{id}', [WebController::class, 'cari']);

Route::post('/tambah', [WebController::class, 'tambah']);

Route::get('/hapus/{id}', [WebController::class, 'hapus']);

Route::get('/show/{id}', [WebController::class, 'show']);

Route::post('/edit', [WebController::class, 'edit']);

Route::get('/konten', [WebController::class, 'konten']);

Route::get('/about', [WebController::class, 'about']);

Route::get('/register', [WebController::class, 'register']);

Route::get('/backcoding', [WebController::class, 'backcoding']);