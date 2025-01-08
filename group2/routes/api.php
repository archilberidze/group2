<?php

use App\Actions\task\addTask;
use App\Actions\task\getTask;
use App\Actions\task\getTasks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('task')->group(function (){
    Route::post('add_task', addTask::class);
    Route::get('get_tasks', getTasks::class);
    Route::get('get_task', getTask::class);
});

