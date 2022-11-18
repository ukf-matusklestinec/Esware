<?php

namespace App\Http\Controllers;

use App\Models\Aktivity;
use App\Models\Listing;
use App\Models\Prihlasenie;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AktivityController extends Controller
{
    // Show ale len studentove aktivity
    public function index( $prihlasenie) {

        return view('listings.aktivity', [
            'aktivity' => Aktivity::get()->where('prihlasenie_id', $prihlasenie),
            'priid' => $prihlasenie,
            //data
            'pocethodin' =>Aktivity::get()->where('prihlasenie_id', $prihlasenie)->sum('pocet_hodin'),
            'pocetdni' =>Aktivity::get()->where('prihlasenie_id', $prihlasenie)->count(),
            //----
            'SV' => Prihlasenie::get()->where('id', $prihlasenie),// spätna väzba
            'prihlasenie' => Prihlasenie::with('listing', 'user')->get()//->where('user_id', auth()->id())
        ]);
    }


    // Show form pre vytvorenie aktivity
    public function create( $prihlasenie) {
        return view('listings.createaktivity', [
            //'aktivity' => Aktivity::find($prihlasenie)
            'aktivity' => Aktivity::get()->where('prihlasenie_id', $prihlasenie),
            'priid' => $prihlasenie
        ]);
    }


    // Store aktivity Data
    public function store( $prihlasenie, Request $request) {
        $formFields = $request->all();
        $formFields['prihlasenie_id'] = $prihlasenie;

        Aktivity::create($formFields);

        return redirect('/')->with('message', 'Aktivita bola pridana!');
    }
}
