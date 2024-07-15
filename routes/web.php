<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FindViewController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\CollectionsController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\ThesisViewController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/find-consultation', [FindViewController::class, 'showlist'] )->name('find.showlist');
Route::get('find/action', [FindViewController::class, 'action'])->name('finds.action');

Route::get('/manage-collections', [CollectionsController::class,'index'])->name('collection.index');
Route::get('/collection/create', [CollectionsController::class,'create'])->name('collection.create');
Route::get('/collection/{collection}/edit', [CollectionsController::class,'edit'])->name('collection.edit');
Route::delete('/collection/{id}', [CollectionsController::class,'destroy'])->name('collection.destroy');
Route::post('/collection/store', [CollectionsController::class, 'store'])->name('collection.store');
Route::post('/collection/{id}/update', [CollectionsController::class, 'update'])->name('collection.update');

Route::get('/store-find', [FindViewController::class,'showStore'])->name('find.showstore');
Route::post('/store-find', [FindViewController::class,'store'])->name('find.store');
Route::get('/find-form/{id}', [FindViewController::class,'showfindform'] )->name('find.showform');
Route::get('/edit-find/{id}', [FindViewController::class, 'showupdate'])->name('find.showupdate');
Route::post('/find/{id}', [FindViewController::class, 'update'])->name('find.update');
Route::get('/find/{id}', [FindViewController::class,'destroy'])->name('find.destroy');

Route::get('/manage-deposits', [DepositController::class, 'index'] )->name('deposits.index');
Route::get('/deposits/create', [DepositController::class, 'create'] )->name('deposits.create');
Route::post('/deposits/store', [DepositController::class,'store'] )->name('deposits.store');
Route::get('/deposits/{deposit}/show', [DepositController::class,'show'] )->name('deposits.show');
Route::get('/deposits/{deposit}/edit', [DepositController::class, 'edit'] )->name('deposits.edit');
Route::post('/deposits/{deposit}/update', [DepositController::class, 'update'] )->name('deposits.update');
Route::delete('/deposits/{id}', [DepositController::class, 'destroy'])->name('deposits.destroy');

Route::get('/thesis-consultation', [ThesisViewController::class, 'showList'])->name('theses.showList');
Route::get('/theses/action', [ThesisViewController::class, 'action'])->name('theses.action');

Route::get('/store-theses', [ThesisViewController::class, 'showStore'])->name('theses.showStore');
Route::post('/store-theses', [ThesisViewController::class, 'store'])->name('theses.store');



require __DIR__.'/auth.php';
