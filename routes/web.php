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

use App\Http\Controllers\Web\StudentController;
use App\Http\Controllers\TestController;
Route::get('/', function () {
    return view('welcome');
});
// Route::prefix('web')->group(function(){
//     Route::resource('students', 'StudentController');

// });

// Route::resource('students', 'web\StudentController');
// Route::get('students', 'Web\StudentController@index');
Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/test', [StudentController::class, 'test']);
Route::get('/test', [TestController::class, 'index']);