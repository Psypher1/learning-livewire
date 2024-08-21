<?php

use App\Livewire\Counter;
use App\Livewire\Todos;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Todos::class);
Route::get('/counter', Counter::class);
