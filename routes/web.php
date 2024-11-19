<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FindViewController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\CollectionsController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\ThesisViewController;
use App\Http\Controllers\EmployeeInfoController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AttachmentsController;
use App\Http\Controllers\ChartController;



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
Route::put('/find/{id}', [FindViewController::class, 'update'])->name('find.update');
Route::delete('/find/{id}', [FindViewController::class,'destroy'])->name('find.destroy');

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
Route::get('/theses-form/{id}', [ThesisViewController::class,'showThesisForm'] )->name('theses.showform');
Route::post('/theses/{id}', [ThesisViewController::class, 'update'])->name('theses.update');
Route::get('/theses/{id}', [ThesisViewController::class,'destroy'])->name('theses.destroy');
Route::get('/edit-thesis/{id}', [ThesisViewController::class, 'showupdate'])->name('theses.showupdate');
Route::put('/theses/{id}', [ThesisViewController::class, 'update'])->name('theses.update');
Route::get('/thesis-consultation', [ThesisViewController::class, 'showList'] )->name('theses.showList');
Route::get('/theses-form/{id}', [ThesisViewController::class,'showForm'] )->name('theses.showForm');

Route::get('/manage-roles', [RoleController::class,'showRole'] )->name('role.showRole');
Route::post('/manage-roles', [RoleController::class,'updateUserRole'] )->name('role.updateUserRole');


Route::get('/action', [RoleController::class,'action'] )->name('role.action');

Route::get('/finds/advanced-search', [FindViewController::class, 'showAdvancedSearch'])->name('finds.showadvancedSearch');
Route::get('/finds/advanced-search-results', [FindViewController::class, 'advancedSearch'])->name('finds.advancedSearch');


Route::get('/add-attached/{id}', [AttachmentsController::class,'create'] )->name('attached.create');
Route::post('/add-attached/{id}', [AttachmentsController::class,'store'] )->name('attached.store');
Route::get('/attachments/{id}', [AttachmentsController::class, 'edit'])->name('attached.edit');
Route::post('/attachments/{id}', [AttachmentsController::class, 'update'])->name('attached.update');
Route::delete('/attachments/{attachmentId}', [AttachmentsController::class, 'destroy'])->name('attached.destroy');
Route::get('/attachments-manage/{id}', [AttachmentsController::class, 'manage'])->name('attached.manage');



Route::get('/dashboard/data', [ChartController::class, 'getChartData'])->name('dashboard.data');






Route::get('/employee-info', [EmployeeInfoController::class, 'show'])->name('employeeinfo.show');


Route::post('finds/export', [ExportController::class, 'export'])->name('finds.export');


require __DIR__.'/auth.php';
