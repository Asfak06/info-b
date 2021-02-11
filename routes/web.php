<?php

use Illuminate\Support\Facades\Route;
use App\Models\Image;

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
    return view('welcome');
})->name('home');

Route::get('/delete', function () {
    return view('delete')->with('images', Image::all());
})->middleware(['auth','authorized'])->name('delete');

Route::get('/panel', function () {
    return view('panel');
})->middleware(['auth','authorized','system_admin'])->name('panel');

Route::get('/image/add', function () {
    return view('image');
})->middleware(['auth'])->name('image.add');


Route::post('image/store', [
'uses' => 'ImageController@store',
'as' => 'image.store'
])->middleware(['auth']);

Route::post('image/delete', [
'uses' => 'ImageController@delete',
'as' => 'image.delete'
])->middleware(['auth','authorized']);

Route::get('/dashboard', function () {
    return view('dashboard')->with('images', Image::all());
})->middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php';
