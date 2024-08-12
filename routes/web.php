<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ReportController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('contacts', ContactController::class);
Route::resource('activites', ActivityController::class);
Route::resource('invoices', InvoiceController::class);
Route::resource('reports', ReportController::class);
