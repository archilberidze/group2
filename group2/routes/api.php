<?php

use App\Actions\singers\addSinger;
use App\Actions\singers\deleteSinger;
use App\Actions\singers\getName;
use App\Actions\singers\getOldestSinger;
use App\Actions\singers\getSinger;
use App\Actions\singers\getSingers;
use App\Actions\task\addTask;
use App\Actions\task\deleteTask;
use App\Actions\task\getOldestTask;
use App\Actions\task\getTask;
use App\Actions\task\getTasks;
use App\Actions\task\getTittle;
use App\Actions\team\addTeam;
use App\Actions\team\deleteTeam;
use App\Actions\team\getFilteredTeams;
use App\Actions\team\getTeam;
use App\Actions\team\getTeamName;
use App\Actions\team\getTeams;
use App\Actions\task\updateTask;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('task')->group(function (){
    Route::post('add_task', addTask::class);
    Route::get('get_tasks', getTasks::class);
    Route::get('get_task', getTask::class);
    Route::get('get_tittle', getTittle::class);
    Route::get('get_oldest_task', getOldestTask::class);
    Route::put('update_task/{id}', updateTask::class);
    Route::delete('delete_task', deleteTask::class);
});


Route::prefix('singers')->group(function (){
    Route::post('add_singer', addSinger::class);
    Route::get('get_singers', getSingers::class);
    Route::get('get_singer', getSinger::class);
    Route::get('get_oldest_singer', getOldestSinger::class);
    Route::get('get_name', getName::class);
    Route::delete('delete_singer', deleteSinger::class);

});

Route::prefix('team')->group(function (){
    Route::post('add_team', addTeam::class);
    Route::get('get_teams', getTeams::class);
    Route::get('get_team', getTeam::class);
    Route::get('get_filtered_team', getFilteredTeams::class);
    Route::get('get_team_name', getTeamName::class);
    Route::delete('delete_team', deleteTeam::class);
});
