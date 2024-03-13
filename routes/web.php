<?php

use App\Events\MyEvent;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('notify', function(){
    return view('submit');
});

Route::post('submit', function(){
    $data = request()->get('data');
    event(new MyEvent($data));
    return redirect()->route('submit');
})->name('submit');

Route::get('test', function(){
    return view('test');
});
