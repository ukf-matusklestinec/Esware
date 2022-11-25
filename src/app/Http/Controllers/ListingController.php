<?php

namespace App\Http\Controllers;

use App\Models\Aktivity;
use App\Models\Listing;
use App\Models\Prihlasenie;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class ListingController extends Controller
{
    // zobrazenie všetkych ponúk
    public function index() {
        // zobrazenie počtu aktívnych a schválených praxí
        $student1 = Prihlasenie::get()->where('aktivna', '1')->count();
        $ponuky1 = Listing::get()->where('schvalena', 1)->count();
        // zobrazenie konkrétnych praxí, ktoré boli schválené
        return view('listings.index', [
            'heading' => 'Nove ponuky',
            'listings' => Listing::latest()->where('schvalena', 1)->filter(request(['tag', 'search']))->paginate(6),
            'aktivity' => Prihlasenie::with('listing', 'user')->get()->where('aktivna', 1),
            'aktivity2' => Aktivity::get(),
            'student' => $student1,
            'ponuky' => $ponuky1
        ]);
    }

    // zobrazenie jednej ponuky
    public function show(Listing $listing) {
        return view('listings.show', [
            'listing' => $listing,
            'pocet_prihlasenych' => Prihlasenie::with('listing', 'user')->get()->where('aktivna', 1)->where('listing_id', $listing->id)->count(),// data pre show blade kolko je na ponuke prihlasenych
            'aktivity' => Prihlasenie::with('listing', 'user')->get()->where('user_id', auth()->id())->where('aktivna', 1)
        ]);
    }

    // zobrazenie formulára na vytvorenie
    public function create() {
        return view('listings.create');
    }


    // uložiť ponuku do databázy
    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->id();
        $formFields['schvalena'] = 0;
        $formFields['aktivna'] = 1;

        Listing::create($formFields);

        return redirect('/')->with('message', 'Ponuka bola pridana!');
    }

    // zobraziť formulár na úpravu
    public function edit(Listing $listing) {
        return view('listings.edit', [
            'listing' => $listing,
        ]);
    }

    // upraviť ponuku
    public function update(Request $request, Listing $listing) {

        if($listing->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }


        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required'],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $listing->update($formFields);

        return back()->with('message', 'Ponuka bola úspešne zmenená!');
    }

    // odstrániť ponuku
    public function destroy(Listing $listing) {
        // Make sure logged in user is owner
        if($listing->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }


        $listing->delete();
        return redirect('/')->with('message', 'Ponuka úspešne odstránená!');
    }

    // spravovanie ponúk študenta/firmy
    public function manage() {
        return view('listings.manage', ['listings' => auth()->user()->listings()->get()]);
    }

}
