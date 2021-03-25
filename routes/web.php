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
    return view('welcome');
});

Route::get('/layout',function(){
    return view('layout.main');
});

//Route::get('/room-meeting',[
//    'uses' => 'RoomMeetingController@index',
//    'as' => 'room-meeting'
//]);

use App\Http\Controllers\RoomMeetingController;
Route::get('/room-meeting' , [RoomMeetingController::class,'index'])
->name('room-meeting');

