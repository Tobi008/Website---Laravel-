<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\PagesController;


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

Route::get('/', [PagesController::class, 'getHomePage']);

Route::get('/about', [PagesController::class, 'getAboutPage']);

Route::get('/contact', [PagesController::class, 'getContactPage']);

Route::get('/messages', [MessagesController::class, 'getMessages']);

Route::post('/contact/submit', [MessagesController::class, 'submit']);

