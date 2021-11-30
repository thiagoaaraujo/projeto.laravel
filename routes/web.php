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

Route::get('/quemSomos', function () {
    return view('site.quemSomos');
})->name('site.quemSomos');

Route::get('/servicos', function () {
    return view('site.servicos');
})->name('site.servicos');

Route::get('/servicoOne', function () {
    return view('site.servicoOne');
})->name('site.servicoOne');

Route::get('/servicoTwo', function () {
    return view('site.servicoTwo');
})->name('site.servicoTwo');

Route::get('/contato', function () {
    return view('site.contact');
})->name('site.contact');

Route::get('/adminSite', function () {
    return view('site.adminSite');
})->name('site.adminSite');



