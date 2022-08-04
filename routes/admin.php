<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\SpecialistController;
use App\Http\Controllers\TimeDoctorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.layout.master');
})->name('home');

Route::resource('/specialist', SpecialistController::class)->except([
    'show',
]);
Route::resource('/appointment', AppointmentController::class)->except([
    'show',
]);
Route::resource('/doctor', DoctorController::class)->except([
    'show',
]);
Route::resource('/customer', CustomerController::class)->except([
    'show',
]);
Route::get('/customer/view/{customer}',[CustomerController::class,'viewAppointment'])->name('customer.viewAppointment');
Route::resource('/time_doctor', TimeDoctorController::class)->except([
    'show',
]);
Route::middleware('superadmin')->group(function() {
    Route::resource('/employee', AdminController::class)->except([
        'show',
    ]);
    Route::PUT('/employee/{employee}',[AdminController::class,'resetPassword'])->name('employee.resetPassword');
});

