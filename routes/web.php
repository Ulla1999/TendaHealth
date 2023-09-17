<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/services', 'pages.services')->name('services');
Route::view('/products', 'pages.products')->name('products');
Route::view('/contact', 'pages.contact')->name('contact');

// Our Products Routes
Route::view('/medical-scheme-cover', 'pages.medicalschemecover')->name('medical-scheme-cover');
Route::view('/bonitas', 'pages.bonitas')->name('bonitas');
Route::view('/gap-cover', 'pages.gapcover')->name('gap-cover');
Route::view('/medgap', 'pages.medgap')->name('medgap');
Route::view('/essentialmed', 'pages.essentialmed')->name('essentialmed');
Route::view('/sanlam', 'pages.sanlam')->name('sanlam');
Route::view('/short-term-insurance', 'pages.shortterminsurance')->name('short-term-insurance');
Route::view('/investments', 'pages.investments')->name('investments');

// Submit Contact Form
Route::post('/submit-form', 'App\Http\Controllers\ContactController@store')->name('submit-form');
Route::post('/contact/verify-captcha', [ContactController::class, 'verifyCaptcha'])->name('contact.verifyCaptcha');