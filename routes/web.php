<?php

use App\Models\formModel;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;

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


Route::get('/form', function () {
    $getUsers = formModel::all();
    return view('form', compact('getUsers'));
});

Route::get('/getData', function () {
    $getUsers = formModel::all();
    return view('getDataTableForm', compact('getUsers'));
});


Route::post('/form',[formController::class,'show']);
Route::get('/getDataTableForm/delete/{id}',[formController::class,'delete'])->name('form-delete'); 
Route::get('/getDataTableForm/edit/{id}',[formController::class,'edit'])->name('formedit'); 
Route::post('/getDataTable/update/{id}',[formController::class,'editForm'])->name('edit_form'); 