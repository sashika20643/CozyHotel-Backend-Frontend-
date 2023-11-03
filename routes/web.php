<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomtypeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ReservationController;




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

//------Rooms--------------
    Route::get('room/create', [RoomController::class, 'create'])->name('Admin.room.create');
    Route::post('room/store', [RoomController::class, 'store'])->name('Admin.room.store');

    //--------resrve------------
    Route::get('reserve/index', [ReservationController::class, 'index'])->name('Admin.reserve.index');
    Route::get('reserve/filter', [ReservationController::class, 'filter'])->name('Admin.reserve.filter');

    Route::post('reserve/create', [ReservationController::class, 'create'])->name('Admin.reserve.create');
    Route::post('reserve/store', [ReservationController::class, 'store'])->name('Admin.reserve.store');



});
