<?php

use App\Http\Livewire\Comments;
use App\Http\Livewire\ParamComponent;
use App\Http\Livewire\Registration;
use App\Http\Livewire\ShowPosts;
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
    return view('welcome');
});

Route::get('/show-posts',ShowPosts::class);
Route::get('/registration',Registration::class);
Route::get('/comments',Comments::class);
Route::get('/param-component/{param}',ParamComponent::class);
