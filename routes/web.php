<?php

use Illuminate\Support\Facades\Route;

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

/*
 *
 * Main Pages
 */

Route::get('/',['App\Http\Controllers\PageController','index'])->name('index');
Route::get('/about-us',['App\Http\Controllers\PageController','about'])->name('about-us');
Route::get('/contact-us',['App\Http\Controllers\PageController','contact'])->name('contact-us');
Route::get('/our-mission',['App\Http\Controllers\PageController','about'])->name('our-mission');
Route::get('/our-team',['App\Http\Controllers\PageController','team'])->name('our-team');
Route::get('/our-services',['App\Http\Controllers\PageController','services'])->name('our-services');
Route::get('/faqs',['App\Http\Controllers\PageController','faq'])->name('faqs');
Route::get('/testimonials',['App\Http\Controllers\PageController','testimonials'])->name('testimonials');



/*
 *
 * Resource Pages
 */

Route::resource('properties',\App\Http\Controllers\PropertyController::class)->only(['index','show']);
Route::resource('blogs',\App\Http\Controllers\BlogController::class)->only(['index','show']);
