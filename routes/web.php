<?php

use App\Http\Controllers\EditorController;
use App\Http\Controllers\frontend\CoursesController;
use App\Http\Controllers\frontend\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeacherController;
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
    return view('frontend.home');
})->name('home');
Route::get('about',function(){
    return view('frontend.about');
})->name('about.us');
Route::get('contact',function(){
    return view('frontend.contact');
})->name('contact');
Route::get('orderform',function(){
    return view('frontend.order.orderform');
})->name('orderform');


// Route::get('courses',function(){
//     return view('frontend.course');
// })->name('courses');

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Data pass frontend by backend//
Route::get('courses',[CoursesController::class,'create'])->name('courses');

// Edit dashboard By Editor//
Route::get('editor/login',[EditorController::class ,'login'])->name('editor.login');
Route::post('editor/login',[EditorController::class,'store'])->name('EditorLogin');
Route::post('editor/logout',[EditorController::class,'logout'])->name('editor.logout');
Route::get('editor/edashboard',[EditorController::class,'edashboard'])->name('editor.edashboard')->middleware('editor');

// Frontend Order Stap                                              
Route::get('orderDetalils/{id}',[OrderController::class,'create'])->name('order.Details');

require __DIR__.'/auth.php';
