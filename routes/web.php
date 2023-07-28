<?php

use App\Livewire\Contact;
use App\Livewire\EnvoiPostal;
use App\Livewire\Faq;
use App\Livewire\HomePage;
use App\Livewire\Tarifs;
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

// Route::get('/', function () {
//     return view('welcome');
// })->name();

// Index page
Route::get('/', HomePage::class )->name('frontend.index');
// // Tarifs page
Route::get('/tarifs', Tarifs::class )->name('frontend.tarifs');
// // F.A.Q page
Route::get('/faq', Faq::class )->name('frontend.faq');
// // Contact page 
Route::get('/contact', Contact::class )->name('frontend.contact');
// // Envoi postal page 
Route::get('/envoi_postal', EnvoiPostal::class )->name('frontend.postal');

Route::group(['prefix' => 'dashboard'], function () {
    Voyager::routes();
});
