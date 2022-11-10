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


// monitorovanie ponuk (zobrazenie)
Route::get('/prihlasenie',[PrihlasenieController::class, 'index'])->middleware('auth');

// Edit prihlasenie
Route::get('/prihlasenie/{aktivity}/edit', [PrihlasenieController::class, 'edit'])->middleware('auth');

// Update prihlasenie
Route::put('/prihlasenie/{aktivity}', [PrihlasenieController::class, 'update'])->middleware('auth');

// Delete prihlasenie
Route::delete('/prihlasenie/{aktivity}', [PrihlasenieController::class, 'destroy'])->middleware('auth');

// Store id_user a id_listing do tabulky prihlasenie
Route::get('/prihlas/{id}', [PrihlasenieController::class, 'store'])->middleware('auth');


//-------------------------------------------------------------------------------Tabulka aktivity

// vsetky aktivity
Route::get('/aktivity/{prihlasenie}',[AktivityController::class, 'index'])->middleware('auth');

//show create aktivity
Route::get('/aktivity/{prihlasenie}/create', [AktivityController::class, 'create'])->middleware('auth');

// Store aktivity Data
Route::post('/aktivity/{prihlasenie}', [AktivityController::class, 'store'])->middleware('auth');

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

// ADMIN
// nexus administrátor
Route::get('/nexus_admin', [UserController::class, 'nexusA']);

Route::get('/zoznam_firiem', [UserController::class, 'zoz_firma']);

Route::get('/zoznam_studentov', [UserController::class, 'zoz_student']);

Route::get('/zoznam_pracovisk', [UserController::class, 'zoz_pracov']);

Route::get('/zoznam_pracovnikov', [UserController::class, 'zoz_pracov']);


// VEDUCI PRACOVNIK
// nexus vedúci pracoviska
Route::get('/nexus_veduci', [UserController::class, 'nexusV']);


// POVERENY PRACOVNIK PRACOVISKA
// nexus poverený zamestnanec pracoviska
Route::get('/nexus_povereny', [UserController::class, 'nexusPov']);

Route::get('/zoznam_akad_student', [UserController::class, 'zoz_ak_stud']);

Route::get('/zoznam_org_firm', [UserController::class, 'zoz_or_fi']);

Route::get('/zoznam_praxi', [UserController::class, 'zoz_prax']);
