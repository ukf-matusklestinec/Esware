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

    public function manage_student(){
        // zobrazenie študentov podľa toho, že majú daný odbor
        $users = DB::table('users')->get()->whereNotNull('odbor');
        return view('administrator.zoznam_studentov', ['users' => $users]);
    }

    public function manage_pracovnikov(){
        // zobrazenie zamestnancov   prerobiť
        $zam = DB::table('users')->get()->where('Povereny_pracovnik');
        return view('administrator.zoznam_pracovnikov', ['users' => $zam]);
    }

    public function manage_veducich(){
        // zobrazenie zamestnancov   prerobiť
        $ved = DB::table('users')->get()->where('Veduci_pracoviska');
        return view('administrator.zoznam_veducich', ['users' => $ved]);
    }

    public function manage_firmy(){
        /*
        $zastupca = DB::table('users')
            ->join('listings', 'user_id', '=', 'listings.user_id')
            ->where('user_id', '=', 'id')
            ->get();
        return view('administrator.zoznam_firiem', ['users' => $zastupca]); */
        $listing = DB::table('listings')->distinct('company')->get();
        return view('administrator.zoznam_firiem', ['listings' => $listing]);
    }

    public function odstranenie_firmy(Listing $listing){
        // odstránenie ponuky ak je už na ňu prihlásený študent WIP
        $listing->delete();
        return redirect('/zoznam_firiem')->with('message', 'Firma bola úspešne odstránená!');
    }


    // stále to nefunguje
    public function odstranenie_studenta($id){
        // myslím, že názov funkcie hovorí za všetko

        $user = DB::table('users')
            ->join('listings', 'user_id', '=', 'listings.user_id')
            ->where('user_id', $id);

        DB::table('listings')->where('user_id', $id)->delete();
        $user->delete();

        return view('administrator.zoznam_studentov')->with('message', 'Študent bol úspešne odstránený!');
    }


}
