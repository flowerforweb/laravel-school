<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/edit', function () {
    $tryit = ['name'=> 'flower spring', 'comment'=>'create lesson'];
    return view('authenticated.teacher.editCour',compact('tryit'));
});

Route::get('/courses', function () {
    return view('courses');
})->name('coursesView');
Route::get('/auth', function () {
    return view('auth');
})->name('auth');
Route::get('/view', function () {
    $tryit = ['name'=> 'flower spring', 'comment'=>'this is a comment'];
    return view('authenticated.courView' , compact('tryit'));
})->name('viewCour');

Route::get('/tdash', function () {
    return view('authenticated.teacher.dash');
})->name('techDash');
Route::get('/addTest', function () {
    return view('authenticated.teacher.addTest');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});