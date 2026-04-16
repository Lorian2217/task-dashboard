<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/main', function () {
//     return view('newmain');
// });
Route::get('/main', [TaskController::class, 'list']);