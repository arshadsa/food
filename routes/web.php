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


Auth::routes();
// Route::get('/', function () {
//     return view('web');
// });
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/question', [App\Http\Controllers\AnswareController::class, 'question'])->name('question.show');
Route::post('/answare/store', [App\Http\Controllers\AnswareController::class, 'answare_store'])->name('answare.store');
Route::get('/user/profile', [App\Http\Controllers\AnswareController::class, 'user_profile'])->name('user.profile');
Route::get('/answare/delete/{id}', [App\Http\Controllers\AnswareController::class, 'answare_delete'])->name('answare.delete');
Route::post('ck-editor/ckimgupload', [App\Http\Controllers\AnswareController::class,'ckimgupload'])->name('ckeditor.upload');


