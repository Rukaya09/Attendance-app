<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\login;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\leavecontroller ;

use Illuminate\Http\Request;


Route::view('userform', 'attendancelogin'); 
Route::view('dashboard1', 'dashboard1'); 
Route::view('dashboard2', 'dashboard2'); 
Route::view('form', 'form'); 

Route::view('contact', 'contact');
Route ::get('logout',[login::class,'logout']);
Route ::post('processform',[login::class,'login']);
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/role/create', [RoleController::class,'createForm'])->name('role.create');
Route::post('role/store', [RoleController::class,'store'])->name('role.store');
Route::post('/roles', [RoleController::class,'storeRoles'])->name('role.storeRoles');
// Define the 'roles' route here
Route::get('/roles', [RoleController::class, 'manageRoles'])->name('roles');
Route::put('/roles/{role}', [RoleController::class, 'update'])->name('roles.update');
Route::get('/roles/{role}/edit', [RoleController::class, 'edit'])->name('roles.edit');
Route::delete('/roles/{role}', [RoleController::class, 'destroy'])->name('roles.destroy');
// Define the 'users' route here
Route::get('/role/attendanceuser', [UsersController::class,'create'])->name('attendanceuser');
Route::post('/role/attendanceuser', [UsersController::class,'store'])->name('store');

Route::get('/role/userprofile', [UserProfileController::class,'create'])->name('userprofile');

Route::get('/role/userprofile', [UserProfileController::class,'create'])->name('userprofile');
// Route to show the user profile creation form
// Route to store user profile data in the database
// For displaying the form
Route::get('/userprofile/create', [UserProfileController::class, 'create'])->name('userprofile.create');
// For submitting the form data
// Route::post('/userprofile/store', [UserProfileController::class, 'store'])->name('userprofile.store');
Route::post('/userprofile', [UserProfileController::class, 'store'])->name('userprofile.store');
Route::get('/users', [UsersController::class, 'index'])->name('users.index');
// Route to show the leave creation form

Route::get('/role/leave', [leavecontroller::class,'create'])->name('leave');
Route::post('/role/leave', [leavecontroller::class,'store'])->name('store');

