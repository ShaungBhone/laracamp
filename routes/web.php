<?php

use App\Livewire\ContactForm;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('laracamp-form', ContactForm::class);
