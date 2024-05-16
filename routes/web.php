<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/',[HomeController::class,'index'])->name('pod.index');
route::get('pod/{slug}',[HomeController::class,'show'])->name('pod.details');
route::get('podtalk/category/{slug}',[HomeController::class,'list_category'])->name('pod.category');





