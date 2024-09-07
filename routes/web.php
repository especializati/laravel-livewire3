<?php

use App\Livewire\User\Create;
use App\Livewire\User\Login;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', Login::class);
Route::get('/new', Create::class);