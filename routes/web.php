<?php

use App\Http\Controllers\EditorController;
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

// Route::get('/', function () {
//     return view('backend.dashboard');
// });

Route::get('/', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Teacher Guide student login system//
Route::get('teacher/login',[TeacherController::class,'login']);
Route::post('teacher/login',[TeacherController::class,'store'])->name('TeacherLogin');
Route::get('teacher/tdashboard',[TeacherController::class,'tdashboard'])->name('teacher.tdashboard');

// Edit dashboard By Editor//
Route::get('editor/login',[EditorController::class , 'login']);
Route::post('editor/login',[EditorController::class,'store'])->name('EditorLogin');
Route::get('editor/edashboard',[EditorController::class,'edashboard'])->name('editor.edashboard');


require __DIR__.'/auth.php';
