<?php

use App\Actions\singers\addSinger;
use App\Actions\singers\getOldestSinger;
use App\Actions\singers\getSinger;
use App\Actions\singers\getSingers;
use App\Actions\task\addTask;
use App\Actions\task\getOldestTask;
use App\Actions\task\getTask;
use App\Actions\task\getTasks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('task')->group(function (){
    Route::post('add_task', addTask::class);
    Route::get('get_tasks', getTasks::class);
    Route::get('get_task', getTask::class);
    Route::get('get_oldest_task', getOldestTask::class);
});


Route::prefix('singers')->group(function (){
    Route::post('add_singer', addSinger::class);
    Route::get('get_singers', getSingers::class);
    Route::get('get_singer', getSinger::class);
    Route::get('get_oldest_singer', getOldestSinger::class);

});
