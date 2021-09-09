<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SurveyController;

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
//     return view('welcome');
// });

Route::get('/', [SurveyController::class, 'index']);
Route::get('save/{nilai1}/{nilai2}/{nilai3}/{nilai4}/{nilai5}/{nilai6}/', [SurveyController::class, 'save']);
Route::get('exportexcel',[SurveyController::class, 'export']);