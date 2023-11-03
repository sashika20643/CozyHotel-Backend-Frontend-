<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomtypeController;


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
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware([
    'auth',

])->group(function () {

    Route::get('roomtype/create', [RoomtypeController::class, 'create'])->name('Admin.roomtype.create');
    Route::post('roomtype/store', [RoomtypeController::class, 'store'])->name('Admin.roomtype.store');
    Route::get('roomtype/edit/{id}', [RoomtypeController::class, 'edit'])->name('Admin.roomtype.edit');
    Route::put('roomtype/update/{id}', [RoomtypeController::class, 'update'])->name('Admin.roomtype.update');
    Route::delete('roomtype/delete/{id}', [RoomtypeController::class, 'delete'])->name('Admin.roomtype.delete');



});
