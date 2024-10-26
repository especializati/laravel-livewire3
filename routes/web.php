<?php

use App\Livewire\User\Create;
use App\Livewire\User\Edit;
use App\Livewire\User\Login;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', Login::class)->name('user.login');
Route::get('/new', Create::class)->name('user.new');
Route::get('/edit/{user}', Edit::class)->name('user.edit');