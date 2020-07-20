<?php

use Illuminate\Support\Facades\Route;

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



Route::get("/" , "homepageController@index");
Route::get("/faq" , "homepageController@faq");
Route::get("/contact-us" , "homepageController@contactUs");
Route::post("/contact-us" , "homepageController@contactUsConfirm");
Route::get("/about-us" , "homepageController@aboutUs");
Route::get("/our-services" , "homepageController@ourServices");
Route::get("/job-order" , "homepageController@job_order");
Route::get("/gallery" , "homepageController@gallery");



Route::get("/advertising" , "homepageController@advertising");
Route::get("/strategic-branding" , "homepageController@strategic_branding");
Route::get("/exclusive-gift-pack" , "homepageController@exclusive_gift_pack");
Route::get("/distintive-award" , "homepageController@distintive_award");
Route::get("/prints" , "homepageController@prints");
Route::get("/digital-offset-machine" , "homepageController@digital_offset_machine");
Route::get("/website-development" , "homepageController@website_development");
Route::get("/mobile-app-development" , "homepageController@mobile_app_development");



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
