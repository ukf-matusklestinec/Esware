<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\User;
use App\Models\Prihlasenie;
use App\Models\Aktivity;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class PrihlasenieController extends Controller
{
    // Show all listings
    public function index() {

        return view('listings.prihlasenie', [
            'aktivity' => Prihlasenie::with('listing', 'user')->get()
        ]);
    }

    // Show Edit Form
    public function edit(Prihlasenie $aktivity) {
        return view('listings.prihlasenieedit', ['aktivity' => $aktivity]);
    }

    // Update Listing Data
    public function update(Request $request, Prihlasenie $aktivity) {

        $formFields = $request->validate([
            'aktivna' => 'required',
            'spatna_vazba' => 'required'
        ]);

        $aktivity->update($formFields);

        return back()->with('message', 'Ponuka bola uspesne zmenena!');
    }

    public function destroy(Prihlasenie $aktivity) {
        $aktivity->delete();
        return redirect('/prihlasenie')->with('message', 'Prax pre študenta bola odstranená!');
    }

    // Store Data na prihlasenie pre prax
    public function store($id) {

        $listing = Listing::find($id);

        if($listing) {
            Prihlasenie::create([
                'user_id' => auth()->id(),
                'listing_id' => $listing->id
            ]);

            return redirect('/')->with('message', 'Ste prihlaseny do ponuky!');
        } else {
            return redirect('/')->with('message', 'Neexistujuca ponuka!');
        }

    }



}
