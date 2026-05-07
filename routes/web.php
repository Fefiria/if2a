<?php

use App\Http\Controllers\FakultasController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\PriodeController;
use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;

Route::get('/', function(){
    return view('welcome');
});

Route::get('/tentang', function(){
    return view('tentang');
});

Route::resource('/fakultas', FakultasController::class);

Route::resource('/periode', PeriodeController::class);


Route::resource('/priode', PriodeController::class);

Route::resource('/prodi', ProdiController::class);

Route::get('/main', function(){
    return view('main');
});