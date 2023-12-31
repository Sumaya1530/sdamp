<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\HomeController;
use App\Http\controllers\BokingController;
use App\Http\controllers\MbookingController;
use App\Http\controllers\AdoctorController;
use App\Http\controllers\MpatientController;
use App\Http\controllers\AmedicineController;


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

Route::get('/', [HomeController::class, 'home']);
//Route::get('/boking/list', [BokingController::class, 'list']);

Route::get('/boking', [BokingController::class, 'book']);


Route::get('/Mbooking', [MbookingController::class, 'mbooking']);
// Route::get('/Mbooking/table', [MbookingController::class, 'table']);

Route::get('/Adoctor', [AdoctorController::class, 'adoctor']);


Route::get('/Mpatient', [MpatientController::class, 'mpatient']);


Route::get('/Amedicine', [AmedicineController::class, 'amedicine']);