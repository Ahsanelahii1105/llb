<?php

use App\Models\cases;
use App\Models\lawyers;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\userController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LawyerController;

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

Route::get('/admin/caseInsert', [AdminController::class, 'casecreate']);
Route::post('/admin/caseInsert', [AdminController::class, 'casestore']);
Route::get('/case', [AdminController::class, 'casedetails']);
Route::get('/', [AdminController::class, 'caseIndexdetails'])->name('index');


// Route::get('/case', function () {
//     return view('case');
// });

Route::get('/contact', [userController::class, 'contactcreate']);
Route::post('/contact', [userController::class, 'contactstore']);
Route::get('/admin/contactdetail', [userController::class, 'contactIndexdetails']);

// Route::get('/contact', function () {
//     return view('contact');
// });

Route::get('/appointment', [userController::class, 'appointmentcreate']);
Route::post('/appointment', [userController::class, 'appointmentstore']);
Route::get('/lawyers/client', [userController::class, 'clientdetails']);

// Route::get('/lawyers', function () {
//     return view('lawyers');
// });

Route::get('/admin/index', function () {
    return view('admin/index');
});

Route::get('/lawyerindex', function () {
    return view('lawyers/index');
});

Route::get('/admin/regtable', function () {
    return view('admin/regtable');
});

// Route::get('/casesDetails', function () {
//     return view('casesDetails');
// });

//------------------------ for lawyer data
Route::get('/lawyers/insertlawyer', [LawyerController::class, 'lawyercreate']);
Route::post('/lawyers/insertlawyer', [LawyerController::class, 'lawyerstore']);
Route::get('/lawyers', [LawyerController::class, 'lawyerdetails']);

Route::get('/index', function () {
    return view('lawyers/index');
});



Route::get('/login', function(){
    return view('auth.login');
})->name('login');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        if(Auth::User()->role==1){
            return view('admin.index');
        }else{
            $lawyers = lawyers::all();
            $case = cases::all();
            return view('index', compact([("lawyers"), ("case")]));
        }
    })->name('dashboard');
});

Route::get('/admin/regtable' , [AdminController::class , 'regtable']);
