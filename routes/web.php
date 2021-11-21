<?php

use App\Http\Controllers\User\TicketController;
use App\Http\Controllers\Admin\TicketController as Adminticket;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

// Route::get('/', function () {
//     return view('home');
// });
Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/ticket/index', [Adminticket::class,'index'])->name('ticket.index');
    Route::get('/ticket/show/{ticket}', [Adminticket::class,'show'])->name('ticket.show');
    Route::post('/ticket/reply/{ticket}', [Adminticket::class,'reply'])->name('ticket.reply');
});


Route::prefix('user')->group(function(){


    Route::get('/ticket/index', [TicketController::class,'index'])->name('ticket.index');

    Route::get('/ticket/create', [TicketController::class,'create'])->name('ticket.create');

    Route::post('/ticket/index', [TicketController::class,'store'])->name('ticket.store');

    Route::post('/ticket/reply/{ticket}', [TicketController::class,'reply'])->name('ticket.reply');


    Route::get('/ticket/show/{ticket}', [TicketController::class,'show'])->name('ticket.show');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('tst', function () {

    return Hash::make('12345678');
});
