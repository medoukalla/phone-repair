<?php

use App\Livewire\AvertissementAppareilsApple;
use App\Livewire\Category;
use App\Livewire\Contact;
use App\Livewire\CookiesPolicy;
use App\Livewire\Device;
use App\Livewire\EnvoiPostal;
use App\Livewire\Faq;
use App\Livewire\Group;
use App\Livewire\HomePage;
use App\Livewire\LegalNotice;
use App\Livewire\PrivacyPolicy;
use App\Livewire\QualitesDePiecesDetachees;
use App\Livewire\Tarifs;
use App\Livewire\WarrantyConditions;
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
Route::get('command/{category:slug}', Category::class )->name('frontend.category');

// Show group devices
Route::get('command/{category:slug}/{group:slug}', Group::class )->name('frontend.group');

// Show device with list of repais
Route::get('command/{category:slug}/{group:slug}/{device:slug}', Device::class )->name('frontend.device');


// Privacy policy
Route::get('/Politique_confidentialite', PrivacyPolicy::class  )->name('frontend.privacy');
// Cookies policy
Route::get('/Politique_de_cookies', CookiesPolicy::class )->name('frontend.cookies.policy');
// Warranty conditions
Route::get('/Conditions_de_la_garantie', WarrantyConditions::class )->name('frontend.garantie');
// legal notice
Route::get('/Mentions_legales', LegalNotice::class )->name('frontend.legal.notice');
// Avertissement appareils Apple
Route::get('/Avertissement_appareils_apple', AvertissementAppareilsApple::class )->name('frontend.avertissment');
// Qualités de piéces détachées
Route::get('/Qualites_de_pieces_detachees', QualitesDePiecesDetachees::class )->name('frontend.pieces.detacheed');

Route::group(['prefix' => 'dashboard'], function () {
    Voyager::routes();
});
