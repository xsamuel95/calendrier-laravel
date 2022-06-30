<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\CalenderController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('full-calender', [FullCalenderController::class, 'index']);

Route::post('full-calender/action', [FullCalenderController::class, 'action']);

Route::get('calender', [CalenderController::class, 'index']);

Route::post('calender/action', [CalenderController::class, 'action']);

Route::post('calendrier/update', [CalenderController::class, 'update']);

?>
