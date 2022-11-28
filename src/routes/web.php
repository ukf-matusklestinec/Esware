<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Listing;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PrihlasenieController;
use App\Http\Controllers\AktivityController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PoverenyController;

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
// ak niekomu sa nezobrazia obrazky z db tak: spustit dokcer otvorit terminal php, vlozit kod: php artisan storage:link
// ak napise "The links have been created" tak je to v poriadku

//Route::get('/potvrdenie', [UserController::class, 'potvrdenie'])->middleware('auth');
//stiahnut report pdf
Route::get('/potvrdenie_download', [UserController::class, 'potvrdeniedownload'])->middleware('auth');

//Route::get('/report', [UserController::class, 'reportfakulty'])->middleware('auth');
//stiahnut potvrdenie pdf
Route::get('/report_download', [UserController::class, 'reportfakultydownload'])->middleware('auth');

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




// -------------------------------------------------------------------------- profil
// profil študenta
Route::get('/profilstudent', [UserController::class, 'profil']);
//Route::get('/profilstudentedit', [UserController::class, 'profiledit']);
//Route::put('/profilstudentedit/{users}', [UserController::class, 'update_prof'])->middleware('auth');
Route::get('profilstudentedit/{id}', [UserController::class, 'edit_function']);
Route::post('/update/{id}', [UserController::class, 'update_function']);
//Route::get('/profilstudent', [UserController::class, 'viewform']);
//Route::get('/profilstudent', [UserController::class, 'index']);

//------------------------------------------------------------------------------- ADMIN rozhranie

// nexus administrátor
Route::get('/nexus_admin', [UserController::class, 'nexusA']);

//------

// spravovanie používateľov resp. študentov
Route::get('/zoznam_studentov', [AdminController::class, 'manage_student']);

// otvorí profil študenta
Route::get('/profil/{users}', [AdminController::class, 'profil']);

// odstránenie používateľov resp. študentov
Route::delete('/zoznam_studentov/{user}', [AdminController::class, 'odstranenie_studenta'])->middleware('auth');

//------

// spravovanie pracovísk
Route::get('/zoznam_pracovisk', [UserController::class, 'zoz_pracovisk']);

//------

// spravovať poverených zamestnancov
Route::get('/zoznam_pracovnikov', [AdminController::class, 'manage_pracovnikov']);

// tabuľka na pridelenie role poverený zamestnanec
Route::get('/pridanie_povereneho_zam', [AdminController::class, 'tab_pridanie_pracovnikov']);

// pridelenie role používateľovi - poverený zamestnanec
Route::put('/pridanie_povereneho_zam/{users}', [AdminController::class, 'pridanie_pracovnikov']);

// odobranie role povereného zamestanca
Route::put('/zoznam_pracovnikov/{users}', [AdminController::class, 'odobranie_prav_pracovnika']);

//------

// spravovať  vedúcich pracovísk
Route::get('/zoznam_veducich', [AdminController::class, 'manage_veducich']);

// tabuľka na pridelenie role vedúci pracoviska
Route::get('/pridanie_ved_prac', [AdminController::class, 'tab_pridanie_ved']);

// pridelenie role používateľovi - vedúci pracoviska
Route::put('/pridanie_ved_prac/{users}', [AdminController::class, 'pridanie_ved']);

// odobranie role vedúci pracoviska
Route::put('/zoznam_veducich/{users}', [AdminController::class, 'odobranie_prav_ved']);

//------

// spravovať firmy a organizácie
Route::get('/zoznam_firiem', [AdminController::class, 'manage_firmy']);

// otvorí profil firmy
Route::get('/profilfirma/{listing}', [AdminController::class, 'profil_firma']);

// odstránenie firmy zo zoznamu
Route::delete('/listings/{listing}', [AdminController::class, 'odstranenie_firmy'])->middleware('auth');




//------------------------------------------------------------------------------- VEDUCI PRACOVNIK
// nexus vedúci pracoviska
Route::get('/nexus_veduci', [UserController::class, 'nexusV']);

// zoznam firiem
Route::get('/zoznam_firm', [UserController::class, "zoznamfirm"]);

// zoznam archivovaných praxí
Route::get('/archiv_praxe', [UserController::class, 'archPrax']);


// ------------------------------------------------------------------------------- POVERENY PRACOVNIK PRACOVISKA
// nexus poverený zamestnanec pracoviska
Route::get('/nexus_povereny', [UserController::class, 'nexusPov']);

// zoznam študentov
Route::get('/zoznam_akad_student', [PoverenyController::class, 'manage_student']);

// otvorí profil študenta
Route::get('/profil/{users}', [PoverenyController::class, 'profil']);

// zoznam firiem
Route::get('/zoznam_org_firm', [PoverenyController::class, 'manage_org_firm']);

// zoznam praxí
Route::get('/zoznam_praxi', [PoverenyController::class, 'manage_schval_prax']);

// zmeniť prax na potvrdenú
Route::put('/zoznam_praxi/{listings}', [PoverenyController::class, 'update_prax'])->middleware('auth');

// odstránenie praxe
Route::delete('/zoznam_praxi/{listings}', [PoverenyController::class, 'odstranenie_praxe'])->middleware('auth');
