<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

use function GuzzleHttp\Promise\task;

Route::get('/', function () {
        return view('welcome');
});
/*
Route::get('tasks', function () {
    $tasks=DB::table('tasks')->get() ;
    //dd($tasks);
    return view('tasks',compact('tasks'));
});

Route::get('show/{id}', function ($id) {
    $task=DB::table('tasks')->find($id)->first();
    //dd($task);

    return view('show',compact('task'));

});
*/
