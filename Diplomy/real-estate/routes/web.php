<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;

Route::get('/create', function () {
    return view('layouts.create');
})->name('create');



Route::get('/', function () {
    return view('layouts.registr');
})->name('registr');

Route::post('/сreatesubmit', [MessagesController::class, 'сreatesubmit'])->name('сreatesubmit');
Route::get('/login', [ContactController::class, 'login'])->name('login');
Route::post('/submit', [ContactController::class, 'submit'])->name('contact-form');
Route::post('/auth', [ContactController::class, 'authenticate'])->name('auth');
Route::get('/message/update/{id}', [MessagesController::class, 'update'])->name('update');
Route::get('/message/all/{id}', [MessagesController::class, 'message'])->name('message');
Route::post('/updatesubmit/{id}/update', [MessagesController::class, 'updatesubmit'])->name('updatesubmit');
Route::get('/messagedelete/{id}', [MessagesController::class, 'messagedelete'])->name('messagedelete');
Route::get('/list', [MessagesController::class, 'showarticle'])->name('list');
