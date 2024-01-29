<?php

use App\Http\Controllers\ProjectController;
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

Route::get('/',[ProjectController::class,'showItemGroup'])->name('welcome');
Route::get('/itemgroup',[ProjectController::class,'getItemgroup'])->name('itemgroup');
Route::get('/apane',[ProjectController::class,'DisplayItems'])->name('controlpanel');
Route::get('/logout',[ProjectController::class,'logout'])->name('logout');
Route::get('/login',[ProjectController::class,'login'])->name('login');
Auth::routes();
//->middleware('auth')
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::post('/save', [ProjectController::class, 'saveGroup'])->name('save');

Route::get('/items',[ProjectController::class,'getitem'])->name('items');

Route::get('/delete/{x}',[ProjectController::class,'delete'])->name('delete');

Route::get('/pageadditem',[ProjectController::class,'pageadditem'])->name('pageadditem');

Route::post('/additem',[ProjectController::class,'additems'])->name('additem');
route::get('/showproduct/{id}',[ProjectController::class,'Showproduct'])->name('showproduct');

Route::get('/showproduct',[ProjectController::class,'showproduct'])->name('showproductshowproduct');
Route::get('/addtocart/{id}',[ProjectController::class,'AddtoCart'])->name('addtocart');
Route::get('/checkout',[ProjectController::class,'checkout'])->name('checkout')->middleware('auth');







