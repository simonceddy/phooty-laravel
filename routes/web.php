<?php

use App\Http\Controllers\GetJumper;
use App\Phooty\Contracts\Footy;
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

Route::get('/jumper', GetJumper::class);

Route::get('/', function () {
    dd(app(Footy::class));
});
