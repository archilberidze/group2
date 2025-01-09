<?php

use App\Actions\task\addTask;
use App\Actions\task\getTask;
use App\Actions\task\getTasks;
use App\Actions\team\addTeam;
use App\Actions\team\getFilteredTeams;
use App\Actions\team\getTeam;
use App\Actions\team\getTeams;
use App\Actions\task\updateTask;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('task')->group(function (){
    Route::post('add_task', addTask::class);
    Route::get('get_tasks', getTasks::class);
    Route::get('get_task', getTask::class);
    Route::put('update_task/{id}', updateTask::class);
});



Route::prefix('team')->group(function (){
    Route::post('add_team', addTeam::class);
    Route::get('get_teams', getTeams::class);
    Route::get('get_team', getTeam::class);
    Route::get('get_filtered_team', getFilteredTeams::class);
});
