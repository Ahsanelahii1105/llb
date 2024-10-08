<?php

use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/case', function () {
    return view('case');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/appointment', function () {
    return view('appointment');
});

Route::get('/lawyers', function () {
    return view('lawyers');
});

Route::get('/admin/home', function () {
    return view('admin/index');
});


Route::group(['prefix'=>'admin','middleware'=>['admin:admin']],function(){
    Route::get('/login', [AdminController::class, 'loginForm']);
    Route::post('/login', [AdminController::class, 'store'])->name('admin.login');
   });



   Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
       return view('dashboard');
   })->name('dashboard');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
