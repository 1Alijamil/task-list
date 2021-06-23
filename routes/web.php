<?php

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use function GuzzleHttp\Promise\task;

Route::get('/', function () {
  //  dd('fff');
        return view('welcome');
});

Route::get('tasks', function () {
    $tasks=DB::table('tasks')->get() ;
    //dd($tasks);0
    return view('tasks',compact('tasks'));
});

Route::get('show/{id}', function ($id) {
    $task=DB::table('tasks')->find($id);
   // dd($task);

    return view('show',compact('task'));

});
Route::get('app', function () {
    $tasks = DB::table('tasks')->get();
    return view('tode',compact('tasks'));

});
Route::post('store', function (Request $request) {
    DB::table('tasks')->insert([
    'title'=>$request->title
    ]);
    return redirect()->back();

});

