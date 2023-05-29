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
    $data = [
        'comics' => config('db')
    ];
    //dd($data);
    return view('welcome', $data);
});

Route::get('/main', function () {
    $data = [
        'comics' => config('db')
    ];
    //dd($data);
    return view('/main.home', $data);
})->name('main.home');

Route::get('/comics/{index}', function ($index) {
    $comics = config('db');
    if (is_numeric($index) && $index >= 0 && $index < count($comics)) {
        $comic = $comics[$index];
        return view('main.show', compact('comic'));
    } else {
        abort('404');
    }
})->name('main.show');
