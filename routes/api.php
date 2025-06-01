<?php

use App\Http\Controllers\ChatGPTController;
use Illuminate\Support\Facades\Route;

Route::get('/chat-gpt', [ChatGPTController::class, 'index']);
Route::get('/ping', fn() => response()->json(['pong' => true]));
