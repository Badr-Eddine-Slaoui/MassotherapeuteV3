<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::view(uri: '/', view: 'index')->name(name: 'home');

Route::view(uri: 'coaching', view: 'Pages.coaching')->name(name: 'coaching');

Route::view(uri: 'massotherapie', view: 'Pages.massotherapie')->name(name: 'massotherapie');

Route::view(uri: 'contact', view: 'Pages.contact')->name(name: 'contact');

Route::post(uri:'contact/store', action:[ContactController::class ,'store'])->name(name:'contact.store');

Route::get('/sitemap.xml', function () {
    return response()->file(public_path('sitemap.xml'))->headers('Content-Type', 'application/xml');
});
