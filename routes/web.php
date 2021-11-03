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
    return view('site.home');
}) ->name('site.home');

Route::get('/home', function () {
    return view('home');
})->name('site.home');

Route::get('/quemSomos', function () {
    return view('quemSomos');
})->name('site.quemSomos');

Route::get('/servicos', function () {
    return view('servicos');
})->name('site.servicos');

Route::get('/servicoOne', function () {
    return view('servicoOne');
})->name('site.servicoOne');

Route::get('/servicoTwo', function () {
    return view('servicoTwo');
})->name('site.servicoTwo');

Route::get('/servicoThree', function () {
    return view('servicoThree');
})->name('site.servicoThree');

Route::get('/contato', function () {
    return view('contato');
})->name('site.contato');

Route::get('/adminSite', function () {
    return view('adminSite');
})->name('site.adminSite');
