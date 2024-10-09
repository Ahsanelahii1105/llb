<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\userController;

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

Route::get('/appointment', [userController::class, 'appointmentcreate']);
Route::post('/appointment', [userController::class, 'appointmentstore']);
Route::get('/lawyers/client', [userController::class, 'clientdetails']);

// Route::get('/appointment', function () {
//     return view('appointment');
// });

Route::get('/lawyers', function () {
    return view('lawyers');
});

Route::get('/admin/home', function () {
    return view('admin/index');
});

Route::get('/lawyerindex', function () {
    return view('lawyers/index');
});

//------------------------ for lawyer data
Route::get('/lawyers/insertlawyer', [LawyerController::class, 'lawyercreate']);
Route::post('/lawyers/insertlawyer', [LawyerController::class, 'lawyerstore']);
// Route::get('/lawyers', [LawyerController::class, 'lawyerdetails'])->name('lawyers.details');

// Route::get('/lawyerInsert', function () {
//     return view('lawyers/lawyerInsert');
// });

// Route::get('/lawyerclient', function () {
//     return view('lawyers/client');
// });

Route::get('/index', function () {
    return view('lawyers/index');
});


Route::group(['prefix'=>'admin','middleware'=>['admin:admin']],function(){
    Route::get('/login', [AdminController::class, 'loginForm']);
    Route::post('/login', [AdminController::class, 'store'])->name('admin.login');
   });



//    Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
//        return view(view: 'dashboard');
//    })->name('dashboard');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
