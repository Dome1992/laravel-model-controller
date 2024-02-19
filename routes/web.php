<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

//IMPORTARE LA ROTTA CHE PORTA AL MAINCONTROLLER
Route::get('/', [MainController :: class, 'index']);

