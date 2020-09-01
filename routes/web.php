<?php

use Illuminate\Support\Facades\Route;
use App\Mail\TestMail;

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

Route::get('check-queue',function(){
	\Mail::to('hmartinezreumann@gmail.com')->send(new TestMail());

	return 'Working';
});

Route::get('teamoestefi',function(){
	\Mail::to('tefi.arz@gmail.com')->send(new TestMail());

	return 'Working';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
