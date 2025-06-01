<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatGPTController;

Route::get('/', function () {
    return view('welcome');
});

  
Route::get('/chat-gpt', [ChatGPTController::class, 'index'])->name('chat-gpt.index');