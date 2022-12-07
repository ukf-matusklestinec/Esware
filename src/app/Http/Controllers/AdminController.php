<?php

namespace App\Http\Controllers;

use App\Models\Prihlasenie;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Listing;
use Illuminate\Support\Facades\DB;



class AdminController extends Controller
{
    //spravovanie admina

    public function manage_student()
    {
        // zobrazenie študentov podľa toho, že majú daný odbor
        $users = DB::table('users')->get()->whereNotNull('odbor');
        return view('administrator.zoznam_studentov', ['users' => $users]);
    }

    public function manage_pracovnikov()
    {
        // zobrazenie zamestnancov   prerobiť
        $zam = DB::table('users')->get()->where('Povereny_pracovnik');
        return view('administrator.zoznam_pracovnikov', ['users' => $zam]);
    }

    public function tab_pridanie_pracovnikov()
    {
        // tabuľka na pridanie role povereného zamestnanca
        $users = DB::table('users')->get()->where('Povereny_pracovnik', 0)->where('Admin', 0)->where('Zastupca_firmy', 0)->where('Veduci_pracoviska', 0);
        return view('administrator.pridanie_povereneho_zam', ['users' => $users]);
    }

    public function pridanie_pracovnikov(User $users)
    {
        // funkcia na pridanie povereného zamestnanca
        $formFields['Povereny_pracovnik'] = 1;

        $users->update($formFields);

        return redirect('zoznam_pracovnikov')->with('message', 'Používateľovi bola pridelená rola "Poverený pracovník"');
    }

    public function odobranie_prav_pracovnika(User $users)
    {
        // odobranie funcie povereného zamestnanca
        $formFields['Povereny_pracovnik'] = 0;

        $users->update($formFields);

        return redirect('zoznam_pracovnikov')->with('message', 'Používateľovi bola odobraná rola "Poverený pracovník"');
    }

    public function manage_veducich()
    {
        // zobrazenie zamestnancov   prerobiť
        $ved = DB::table('users')->get()->where('Veduci_pracoviska');
        return view('administrator.zoznam_veducich', ['users' => $ved]);
    }

    public function tab_pridanie_ved()
    {
        // tabuľka na pridanie role vedúceho pracoviska
        $users = DB::table('users')->get()->where('Povereny_pracovnik', 0)->where('Admin', 0)->where('Zastupca_firmy', 0)->where('Veduci_pracoviska', 0);
        return view('administrator.pridanie_ved_prac', ['users' => $users]);
    }

    public function pridanie_ved(User $users)
    {
        // funkcia na pridanie vedúceho pracoviska
        $formFields['Veduci_pracoviska'] = 1;

        $users->update($formFields);

        return redirect('zoznam_veducich')->with('message', 'Používateľovi bola pridelená rola "Vedúci pracoviska"');
    }

    public function odobranie_prav_ved(User $users)
    {
        // odobranie funcie vedúceho pracoviska
        $formFields['Veduci_pracoviska'] = 0;

        $users->update($formFields);

        return redirect('zoznam_veducich')->with('message', 'Používateľovi bola odobraná rola "Vedúci pracoviska"');
    }

    public function manage_firmy()
    {
        /*
        $zastupca = DB::table('users')
            ->join('listings', 'user_id', '=', 'listings.user_id')
            ->where('user_id', '=', 'id')
            ->get();
        return view('administrator.zoznam_firiem', ['users' => $zastupca]); */
        $listing = DB::table('listings')->distinct('company')->get();
        return view('administrator.zoznam_firiem', ['listings' => $listing]);
    }

    public function odstranenie_firmy(Listing $listing)
    {
        // odstránenie ponuky ak je už na ňu prihlásený študent WIP
        $listing->delete();
        return redirect('/zoznam_firiem')->with('message', 'Firma bola úspešne odstránená!');
    }


    // stále to nefunguje
    public function odstranenie_studenta($id)
    {
        // myslím, že názov funkcie hovorí za všetko

        $user = DB::table('users')
            ->join('listings', 'user_id', '=', 'listings.user_id')
            ->where('user_id', $id);

        DB::table('listings')->where('user_id', $id)->delete();
        $user->delete();

        return view('administrator.zoznam_studentov')->with('message', 'Študent bol úspešne odstránený!');
    }

    public function profil(User $users)
    {
        // zobrazenie profilu študenta
        return view('administrator.profil', ['users' => $users]);
    }

    public function profil_firma(Listing $listing)
    {
        // zobrazenie profilu firmy
        return view('administrator.profilfirma', ['listings' => $listing]);
    }
}
