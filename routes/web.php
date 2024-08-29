<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\AdminController;

Route::get('/', [BaseController::class, 'index'])->name('index');
Route::get('/about', [BaseController::class, 'about'])->name('about');
Route::get('/services', [BaseController::class, 'services'])->name('services');
Route::get('/contact', [BaseController::class, 'contact'])->name('contact');

Route::post('/contact-store', [BaseController::class, 'store'])->name('contact.store');
Route::delete('/contact/{id}', [BaseController::class, 'destroy'])->name('contact.destroy');

Route::get('/em', [BaseController::class, 'em'])->name('em');
Route::get('/pa', [BaseController::class, 'pa'])->name('pa');
Route::get('/or', [BaseController::class, 'or'])->name('or');
Route::get('/gyne', [BaseController::class, 'gyne'])->name('gyne');
Route::get('/privacy-policy', [BaseController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/terms-of-service', [BaseController::class, 'termsOfService'])->name('terms-of-service');


    Route::get('/admin', [AdminController::class, 'index'])->name('index');
    Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('/edit-profile', [AdminController::class, 'editProfile'])->name('admin.editProfile');

    Route::get('/doctors', [AdminController::class, 'doctors'])->name('doctors');
    Route::get('/doctors/create', [AdminController::class, 'create'])->name('doctors.create');
    Route::post('/doctors-store', [AdminController::class, 'doctorsStore'])->name('admin.doctors.doctorsStore');
    Route::put('/doctors-update/{id}', [AdminController::class, 'doctorsUpdate'])->name('admin.doctors.doctorsUpdate');
    Route::delete('/doctors-destroy/{id}', [AdminController::class, 'doctorsDestroy'])->name('admin.doctors.doctorsDestroy');



    Route::get('/patients', [AdminController::class, 'patients'])->name('patients');
    Route::get('/appointments', [AdminController::class, 'appointments'])->name('appointments');
    Route::post('/appointments-store', [AdminController::class, 'appointmentsStore'])->name('admin.appointments.appointmentsStore');
    Route::put('/appointments-update/{id}', [AdminController::class, 'appointmentsUpdate'])->name('admin.appointments.appointmentsUpdate');
    Route::delete('/appointments-destroy/{id}', [AdminController::class, 'appointmentsDestroy'])->name('admin.appointments.appointmentsDestroy');

    Route::get('/departments', [AdminController::class, 'departments'])->name('departments');
    Route::post('/departments-store', [AdminController::class, 'departmentsStore'])->name('admin.departments.departmentsStore');
     Route::put('/departments-update/{id}', [AdminController::class, 'departmentsUpdate'])->name('admin.departments.departmentsUpdate');
    Route::delete('/departments-destroy/{id}', [AdminController::class, 'departmentsDestroy'])->name('admin.departments.departmentsDestroy');

    Route::get('/services', [AdminController::class, 'services'])->name('services');

    Route::post('/services-store', [AdminController::class, 'servicesStore'])->name('admin.services.servicesStore');
    Route::put('/services-update/{id}', [AdminController::class, 'servicesUpdate'])->name('admin.services.servicesUpdate');
    Route::delete('/services-destroy/{id}', [AdminController::class, 'servicesDestroy'])->name('admin.services.servicesDestroy');
    

    Route::get('/testimonials', [AdminController::class, 'testimonials'])->name('testimonals');
    
    Route::post('/testimonials-store', [AdminController::class, 'testimonialsStore'])->name('admin.testimonials.testimonialsStore');
    Route::put('/testimonials-update/{id}', [AdminController::class, 'testimonialsUpdate'])->name('admin.testimonials.testimonialsUpdate');
    Route::delete('/testimonials-destroy/{id}', [AdminController::class, 'testimonialsDestroy'])->name('admin.testimonials.testimonialsDestroy');
    Route::post('/admin/testimonials/toggle-status/{id}', [AdminController::class, 'toggleStatus'])->name('testimonials.toggleStatus');
    //Route::get('/testimonials', [AdminController::class, 'showTestimonials'])->name('testimonials');
    
    Route::get('/gallery', [AdminController::class, 'gallery'])->name('gallery');
    Route::post('/gallery/store', [AdminController::class, 'galleryStore'])->name('admin.gallery.galleryStore');
    Route::delete('/gallerys-destroy/{id}', [AdminController::class, 'gallerysDestroy'])->name('admin.gallery.gallerysDestroy');
    //Route::get('/gallery/{department}', [AdminController::class, 'getByDepartment'])->name('gallery.department');
    Route::get('/contacts', [AdminController::class, 'contacts'])->name('contacts');