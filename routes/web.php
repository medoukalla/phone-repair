<?php

use App\Livewire\Category;
use App\Livewire\Contact;
use App\Livewire\Device;
use App\Livewire\EnvoiPostal;
use App\Livewire\Faq;
use App\Livewire\Group;
use App\Livewire\HomePage;
use App\Livewire\Tarifs;
use App\Models\Order;
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
// Tarifs page
Route::get('/tarifs', Tarifs::class )->name('frontend.tarifs');
// F.A.Q page
Route::get('/faq', Faq::class )->name('frontend.faq');
// Contact page 
Route::get('/contact', Contact::class )->name('frontend.contact');
// Envoi postal page 
Route::get('/envoi_postal', EnvoiPostal::class )->name('frontend.postal');
// Store new order
Route::post('/envoi_postal', [Order::class, 'store'])->name('frontend.store.order');

// show category groups
Route::get('/category/{category}', Category::class )->name('frontend.category');

// Show group devices
Route::get('/group/{group}', Group::class )->name('frontend.group');

// Show device with list of repais
Route::get('/device/{device}', Device::class )->name('frontend.device');

Route::group(['prefix' => 'dashboard'], function () {
    Voyager::routes();
});
