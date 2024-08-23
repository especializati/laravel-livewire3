<?php

use App\Livewire\Teste;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', Teste::class);
