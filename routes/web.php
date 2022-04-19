<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/system', function () {
    return view('login');
});

Route::get('/donor-registration', function () {
    return view('donor-registration');
});

Route::get('/donor-list', function () {
    return view('donor-list');
});

Route::get('/donor-donate', function () {
    return view('donor-donate');
});

Route::get('/applicant-registration', function () {
    return view('applicant-registration');
});

Route::get('/applicant-application', function () {
    return view('applicant-application');
});

Route::get('/applicant-list', function () {
    return view('applicant-list');
});

Route::get('/community-registration', function () {
    return view('community-registration');
});

Route::get('/community-list', function () {
    return view('community-list');
});

Route::get('/community-application', function () {
    return view('community-application');
});

Route::get('/centre-registration', function () {
    return view('centre-registration');
});

Route::get('/centre-list', function () {
    return view('centre-list');
});

Route::get('/basic-needs', function () {
    return view('basic-needs');
});

Route::get('/donor-basic-needs', function () {
    return view('donor-basic-needs');
});

Route::get('/center-basic-needs', function () {
    return view('center-basic-needs');
});
