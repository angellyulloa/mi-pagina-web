<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\alumnoscontrollers;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/listado', function(){

    $docentes=DB::table('profesores')->get();
    return response()->json($docentes);

});




Route:: resource('/profesores', alumnoscontrollers::class);
Route:: post('profesores', [alumnoscontrollers::class,'store'])->name('profesores.store');

