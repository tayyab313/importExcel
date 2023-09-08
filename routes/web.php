<?php

use App\Http\Controllers\ExcelImportController;
use Illuminate\Support\Facades\Route;

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

Route::controller(ExcelImportController::class)->group(function () {
    Route::get('/', 'index')->name('import.index');
    Route::get('/filedetail/{fileName}', 'fileDetail')->name('import.filedetail');
    Route::post('/import-excel', 'import')->name('import.excel');
});
