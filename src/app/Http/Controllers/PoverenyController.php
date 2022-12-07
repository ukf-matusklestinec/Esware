<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Listing;
use App\Models\User;



class PoverenyController extends Controller
{
    //spravovanie povereného pracovníka

    public function manage_student()
    {
        // zobrazenie študentov podľa toho, že majú daný odbor
        $users = DB::table('users')->get()->whereNotNull('odbor');
        return view('povereny_pracovnik.zoznam_akad_student', ['users' => $users]);
    }

    public function manage_org_firm()
    {
        //zobrazenie firiem a organizácií
        $listings = DB::table('listings')->distinct('company')->get();
        return view('povereny_pracovnik.zoznam_org_firm', ['listings' => $listings]);
    }

    public function manage_schval_prax()
    {
        //zobrazenie praxí na schválenie
        $listings = DB::table('listings')->get()->where('schvalena', 0);
        return view('povereny_pracovnik.zoznam_praxi', ['listings' => $listings]);
    }

    public function odstranenie_praxe(Listing $listings)
    {
        // odstránenie ponuky praxe pri schvaľovaní
        $listings->delete();
        return redirect('povereny_pracovnik.zoznam_praxi')->with('message', 'Prax úspešne odstránená!');
    }

    public function update_prax(Request $request, Listing $listings)
    {
        // úprava praxe na schválenú
        $formFields['schvalena'] = 1;


        $listings->update($formFields);

        return redirect('zoznam_praxi')->with('message', 'Prax bola schválená!');
    }

    public function profil(User $users)
    {
        // zobrazenie profilu študenta
        return view('administrator.profil', ['users' => $users]);
    }
}
