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
        //ak je admin tak ukáže všetky údaje z tabuľky prihlásenie
        if(auth()->user()->Admin == 1 | auth()->user()->Veduci_pracoviska == 1 | auth()->user()->Povereny_pracovnik == 1) {
            return view('listings.prihlasenie', [
                'aktivity2' => Prihlasenie::with('listing', 'user', 'aktivity')->get()->where('aktivna', 1)
            ]);
        }
        // ak je zástupca tak len študentov prihlasených na jeho ponuke
        else{
            if(auth()->user()->Zastupca_firmy == 1) {
                $bla = Listing::with('user', 'prihlasenie')->get()->where('user_id', auth()->id());
                $krat = Listing::with('user', 'prihlasenie')->get()->where('user_id', auth()->id())->count(); // kolko ponuk vytvoril
                $count = Prihlasenie::with('listing', 'user', 'aktivity')->get()->count();
                return view('listings.prihlasenie_zastupca', [
                    'aktivity2' => Prihlasenie::with('listing', 'user', 'aktivity')->get(),
                    //'aktivity3' => Prihlasenie::with('listing', 'user', 'aktivity')->get()->count(),
                    'zas' => $bla,
                    'count' => $count*$krat, // ak ma ponuky ale niesu ziadny studenti prihlaseny
                    'zascount' => $krat
                ]);
            }
            else{abort(403, 'Unauthorized Action');}
        }

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

        return back()->with('message', 'Ponuka bola úspešne zmenená!');
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
                'listing_id' => $listing->id,
                'aktivna' => 1
            ]);

            return redirect('/')->with('message', 'Ste prihlasený do ponuky!');
        } else {
            return redirect('/')->with('message', 'Neexistujúca ponuka!');
        }

    }



}
