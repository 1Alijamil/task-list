<?php

use Illuminate\Support\Facades\Route;

use function GuzzleHttp\Promise\task;

Route::get('/', function () {
        return view('welcome');
});
Route::get('about', function () {
    $name=request('name');
   // return view('about')-with('name',$name);
    return view('about',compact('name'));
});
Route::post('/store', function () {
$name=request('name');
    return view('about',compact('name'));
});

Route::get('tasks', function () {
   $tasks =[
       'task 1',
       'task 2',
       'task 3'
   ];
   return view('tasks',compact('tasks'));
});

Route::get('show/{id}', function ($id) {

    $tasks =[
        'task 1',
        'task 2',
        'task 3'
    ];
    $task=$tasks[$id];
    return view('show',compact('tasks'));

});


