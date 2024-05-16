<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Auth;


use App\Http\Controllers\Admin\DashboardController;


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
Auth::routes();

Route::get('/clear-cache', function () {
    // Clear the application cache
    Artisan::call('cache:clear');
    // Clear the route cache
    Artisan::call('route:clear');
    // Optimize the application
    Artisan::call('optimize');
    // Output a message indicating that the cache is cleared
    return "Cache is cleared";
});


Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home'); 
    Route::get('/home', 'index')->name('home'); 
    Route::get('/about-us', 'about')->name('about.us'); 
    Route::get('/contact-us', 'contact')->name('contact.us'); 
    Route::post('/contact-submit', 'contactSubmit')->name('contact.submit'); 
    Route::post('/subscribe-newsletter', 'newsletterSubscribe')->name('subscribe.newsletter');
    Route::get('/vacation-homes', 'vacation')->name('vacation.homes'); 
    Route::get('/vacation-detail/{slug}', 'vacationDetail')->name('vacation.detail'); 
    Route::get('/fetch-property', 'fetchProperty')->name('fetch-property');
    Route::get('/vacation-management', 'management')->name('vacation.management'); 
    Route::get('/logouts', 'logouts')->name('logouts'); 
});


Route::middleware(['auth','auth.admin'])->group(function(){
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/admin', 'index')->name('admin.home'); 
        Route::get('/admin/home', 'index')->name('admin.home'); 
        Route::get('/admin/contact-list', 'contactList')->name('admin.contact.list');
        Route::get('/admin/subscribe-list', 'subscribeList')->name('admin.subscribe.list');
        Route::get('/admin/property-list', 'propertyList')->name('admin.property.list');
        Route::get('/admin/property-add', 'propertyAdd')->name('admin.property.add');
      
        Route::post('/admin/property-submit', 'propertySubmit')->name('admin.property.submit');
        
        Route::get('/admin/property-edit/{id}', 'propertyEdit')->name('admin.property.edit');
        Route::get('/admin/property-delete/{id}', 'propertyDelete')->name('admin.property.delete');
    });
});

 


