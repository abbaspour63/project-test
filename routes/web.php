<?php

use App\Http\Controllers\VideoController;
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
     return view('index');
 });


//Route::get('/','App\Http\Controllers\usercontroller@index');

//Route::get('/',function (){
//   return view ('welcome');
//});

//Route::get('/panel',function (){
//   echo "hello from panel";
//});
Route::get('videos',[VideoController::class,'index']);


//Route::get('/videos',[\App\Http\Controllers\VideoController::class,'index']);
