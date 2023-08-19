<?php

use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\TokenVerificationMiddleware;
use Illuminate\Support\Facades\Route;





// // todo-list route
 Route::get('/list-todo',[TodoController::class,'getTodoList']);
 Route::post('/create-todo',[TodoController::class,'createList']);
 Route::post('/update-todo',[TodoController::class,'updateList']);
 Route::post('/delete-todo',[TodoController::class,'deleteList']);
 Route::post('/todo-by-id',[TodoController::class,'TodoById']);

//  todo list

Route::get('/todo',[TodoController::class,'todo']);

