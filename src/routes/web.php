<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Listing;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PrihlasenieController;
use App\Http\Controllers\AktivityController;

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
//JK start


//-------------------------------------------------------------------------------Tabulka prihlasenie


// monittorovanie ponuk (zobrazenie)
Route::get('/prihlasenie',[PrihlasenieController::class, 'index']);

// Edit prihlasenie
Route::get('/prihlasenie/{aktivity}/edit', [PrihlasenieController::class, 'edit']);

// Update prihlasenie
Route::put('/prihlasenie/{aktivity}', [PrihlasenieController::class, 'update']);

// Delete prihlasenie
Route::delete('/prihlasenie/{aktivity}', [PrihlasenieController::class, 'destroy']);

// Store id_user a id_listing do tabulky prihlasenie
Route::get('/prihlas/{id}', [PrihlasenieController::class, 'store']);


//-------------------------------------------------------------------------------Tabulka aktivity

// vsetky aktivity
Route::get('/aktivity',[AktivityController::class, 'index']);

//show create aktivity
Route::get('/aktivity/create', [AktivityController::class, 'create']);

// Store aktivity Data
Route::post('/aktivity', [AktivityController::class, 'store']);

//-------------------------------------------------------------------------------Tabulka listings

// vsetky ponuky
Route::get('/',[ListingController::class, 'index']);

//show create form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// Store Listing Data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// Manage Listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

// jedna ponuka
Route::get('/listings/{listing}', [ListingController::class, 'show']);

//-------------------------------------------------------------------------------Tabulka user

// Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

//-------------------------------------------------------------------------------

// profil študenta
Route::get('/profilstudent', [UserController::class, 'profil']);

// nexus administrátor
Route::get('/nexus_admin', [UserController::class, 'nexusA']);

// zoznam firiem
Route::get('/zoznam_firiem', [UserController::class, 'zoz_firma']);

// nexus vedúci pracoviska
Route::get('/nexus_veduci', [UserController::class, 'nexusV']);

// nexus poverený zamestnanec pracoviska
Route::get('/nexus_povereny', [UserController::class, 'nexusPov']);
