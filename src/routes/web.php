<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Listing;

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


// vsetky ponuky
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Nove ponuky',
        'listings' => Listing::all()
    ]);
});
// jedna ponuka
Route::get('/listings/{idPonuky}', function ($idPonuky) {
    return view('listing', [
        'listing' => Listing::find($idPonuky)
    ]);
});

