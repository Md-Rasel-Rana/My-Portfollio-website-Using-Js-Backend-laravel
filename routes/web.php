<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;
Route::get('/',[DemoController::class,'index']);
Route::get('/About',[DemoController::class,'Aboutpage']);
