<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\CrudController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', [TestController::class, 'index']);

route::get('/lara',[TestController::class, 'lara']);

route::get('/crud',[CrudController::class,'index'])->name('crud');
route::get('/crud/create',[CrudController::class,'create'])->name('crud.create');
route::get('/crud/edit/{id}',[CrudController::class,'edit'])->name('crud.edit');
route::post('/crud/store',[CrudController::class,'store'])->name('crud.store');
route::post('/crud/update',[CrudController::class,'update'])->name('crud.update');
route::get('/crud/delete/{id}',[CrudController::class,'delete'])->name('crud.delete');