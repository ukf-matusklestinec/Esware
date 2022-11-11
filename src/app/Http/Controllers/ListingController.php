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
        return view('listings.index', [
            'heading' => 'Nove ponuky',
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6),
            //'listings' => Listing::latest()->where('schvalena', 1)->filter(request(['tag', 'search']))->paginate(6),
            'aktivity' => Prihlasenie::with('listing', 'user')->get(),
            'aktivity2' => Aktivity::get()
        ]);
    }

    // zobrazenie jednej ponuky
    public function show(Listing $listing) {
        return view('listings.show', [
            'listing' => $listing,
            'aktivity' => Prihlasenie::with('listing', 'user')->get()->where('user_id', auth()->id())
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
