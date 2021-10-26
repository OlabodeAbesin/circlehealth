<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PatientBloodPressureController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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


Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');

    Route::resource('users', UserController::class);

    Route::resource('patientbloodpressure', PatientBloodPressureController::class);
});

require __DIR__.'/auth.php';
