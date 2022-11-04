<?php

namespace App\Http\Controllers;

use App\Models\Aktivity;
use App\Models\Listing;
use App\Models\Prihlasenie;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AktivityController extends Controller
{
    public function index() {

        return view('listings.aktivity', [
            'aktivity' => Aktivity::get()
            //'aktivity' => auth()->user()->prihlasenie()->get()
        ]);
    }


    // Show form pre vytvorenie aktivity
    public function create() {
        return view('listings.createaktivity');
    }


    // Store aktivity Data
    public function store(Request $request) {
        $formFields = $request->validate([
            'pocet_hodin' => 'required',
            'homeoffice' => 'required'
        ]);

        Aktivity::create($formFields);

        return redirect('/aktivity')->with('message', 'Aktivita bola pridana!');
    }
}
