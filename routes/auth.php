<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\CourseController;
use App\Http\Controllers\backend\InstructorController;
use App\Http\Controllers\backend\LessonController;
use App\Http\Controllers\backend\SCategoryController;
use App\Http\Controllers\backend\SCourseController;
use App\Http\Controllers\backend\TopicController;
use App\Models\Instructor;
use Illuminate\Support\Facades\Route;








Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');

            });


            // Course Route Start//
                Route::get('course',[CourseController::class,'index'])->name('course.index');
                Route::get('course.create',[CourseController::class,'create'])->name('course.create');
                Route::post('course.store',[CourseController::class,'store'])->name('course.store');
                Route::get('course/edit/{id}',[CourseController::class,'edit'])->name('course.edit');
                Route::post('course/update/{id}',[CourseController::class,'update'])->name('course.update');
                Route::get('course/delete/{id}',[CourseController::class,'destroy'])->name('course.delete');

                 // course category route start//
                Route::get('category',[CategoryController::class,'index'])->name('category.index');
                Route::get('category/create',[CategoryController::class,'create'])->name('category.create');
                Route::post('category/store',[CategoryController::class,'store'])->name('category.store');
                Route::get('category/edit/{id}',[CategoryController::class,'edit'])->name('edit.category');
                Route::post('category/update/{id}',[CategoryController::class,'update'])->name('category.update');
                Route::get('category/delete/{id}',[CategoryController::class,'destroy'])->name('category.destroy');

             // separate of studetn course
                Route::get('scourse',[SCourseController::class,'index'])->name('scourse.index');
                Route::get('scourse/create',[SCourseController::class,'create'])->name('scourse.create');
                Route::post('scourse/store',[SCourseController::class,'store'])->name('scourse.store');
                Route::get('scourse/edit/{id}',[SCourseController::class,'edit'])->name('scourse.edit');
                Route::post('scourse/update/{id}',[SCourseController::class,'update'])->name('scourse.update');
                Route::get('scourse/delete/{id}',[SCourseController::class,'destroy'])->name('scourse.destroy');

                // resource Routing Start//
                Route::resource('lesson',LessonController::class);
                Route::resource('topic',TopicController::class);
                Route::resource('instructor',InstructorController::class);

                
                // Instructor Guide student login system//
                    Route::get('instructorLoginForm', [InstructorController::class, 'login'])->name('instructorLoginForm');
                    Route::post('instructor/login',[InstructorController::class,'LoginStore'])->name('InstructorLogin');
                    Route::post('instructor/logout',[InstructorController::class,'logout'])->name('inslogout');

                    Route::get('insdashboard', [InstructorController::class, 'Insdashboard'])
                    ->name('insdashboard')
                    ->middleware('instructor');
                    // Route::get('instructor/dashboard', [InstructorController::class, 'dashboard'])->name('dashboard.ins')->middleware('instructor');


          
