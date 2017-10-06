<?php

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

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/users/admin', function () {
    return view('users.admin');
});

Route::get('/users/employee', function () {
    return view('users.employee');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/services/abap-factory', function () {
    return view('services.abap-factory');
});

Route::get('/services/abap-support', function () {
    return view('services.abap-support');
});

Route::get('/services/web-development', function () {
    return view('services.web-development');
});

Route::get('/services/mobile-development', function () {
    return view('services.mobile-development');
});

Route::get('/services/net-development', function () {
    return view('services.net-development');
});

Route::get('/services/java-development', function () {
    return view('services.java-development');
});

Route::get('/services/training', function () {
    return view('services.training');
});

Route::get('/services/staffing', function () {
    return view('services.staffing');
});

Route::get('/jobs', function () {
    return view('jobs');
});

Route::get('/clients', function () {
    return view('clients');
});
