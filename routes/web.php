<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DomainController;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'domains' ], function () {
    Route::get('/index', [DomainController::class, 'index'])->name('index');
    Route::get('/create', [DomainController::class, 'create'])->name('create');
    Route::post('/store', [DomainController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [DomainController::class, 'edit'])->name('edit');
    Route::delete('/delete/{id}', [DomainController::class, 'destroy'])->name('delete');
    Route::put('/update/{id}', [DomainController::class, 'update'])->name('update');
});