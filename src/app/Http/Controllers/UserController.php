<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\Prihlasenie;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // Show Register/Create Form
    public function create() {
        return view('users.register');
    }

    // profil študenta
    public function profil(){
        return view('users.profilstudent');
    }


        // zobraziť formulár na úpravu profilu
        public function profiledit(User $users) {
            return view('users.profilstudentedit', [
                'users' => $users,
            ]);
        }

        // upraviť ponuku
        public function update_prof(Request $request, User $users) {

            if($users->id != auth()->id()) {
                abort(403, 'Unauthorized Action');
            }


            $formFields = $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',

            ]);



            $users->update($formFields);

            return back()->with('message', 'Ponuka bola úspešne zmenená!');
        }

        public function edit_function($id){
            $users = DB::select('select * from users where id = ?', [$id]);
            return view('users.profilstudentedit', ['users'=>$users]);
        }


 
        public function update_function(Request $request,$id){
            $name = $request->input('name');
            $email = $request->input('email');
            $password = bcrypt( $request->input('password'));
            $tel_cislo = $request->input('tel_cislo');

            DB::update('update users set name = ?, email = ?, password = ?, tel_cislo = ? where id = ?'
            ,[$name, $email, $password, $tel_cislo, $id ]);

            return redirect('profilstudent')->with('success', 'Data Updated');

        }



    //--------------------------------------------------------------------------------------------------------
    // ADMINISTRATOR

    // nexus administratora
    public function nexusA(){
        //vypocitanie graf4
        $student1 = User::get()->where('Admin', '0')->where('Veduci_pracoviska', '0')->where('Povereny_pracovnik', '0')->where('Zastupca_firmy', '0')->count();
        $zamestnanec1 = User::get()->count();
        $zamestnane2 = $zamestnanec1-$student1;

        if(auth()->user()->Admin == 1) {
            return view('administrator.nexus_admin', [

                // data pre grafy ********************************************************************************************************************
                // graf1 Ponuka a ich lokacie
                'nitra' => Listing::get()->where('location', 'Nitra')->count(),
                'vrable' => Listing::get()->where('location', 'Vrable')->count(),
                'zvolen' => Listing::get()->where('location', 'Zvolen')->count(),
                'levice' => Listing::get()->where('location', 'Levice')->count(),
                'zilina' => Listing::get()->where('location', 'Žilina')->count(),
                'bratislava' => Listing::get()->where('location', 'Bratislava')->count(),

                // grafX(pie) odbor studenta
                'IA' => User::get()->where('odbor', 'Informatika aplikovaná')->count(),
                'IU' => User::get()->where('odbor', 'Informatika učiteľstvo')->count(),
                'F' => User::get()->where('odbor', 'Fyzika')->count(),
                'FM' => User::get()->where('odbor', 'Fyzika materialov')->count(),
                'FU' => User::get()->where('odbor', 'Fyzika učiteľstvo')->count(),
                'MU' => User::get()->where('odbor', 'Matematika učiteľstvo')->count(),
                'IMEF' => User::get()->where('odbor', 'Informačné metódy v ekonómii a finančníctve')->count(),
                'G' => User::get()->where('odbor', 'Geografia v regionálnom rozvoji')->count(),
                'GU' => User::get()->where('odbor', 'Geografia učiteľstvo')->count(),
                'CHU' => User::get()->where('odbor', 'Chemia učiteľstvo')->count(),
                'B' => User::get()->where('odbor', 'Biologia')->count(),
                'BU' => User::get()->where('odbor', 'Biologia učiteľstvo')->count(),

                // graf2 Rola zamestnanca
                'admin' => User::get()->where('Admin', '1')->count(),
                'veduci' => User::get()->where('Veduci_pracoviska', '1')->count(),
                'povereny' => User::get()->where('Povereny_pracovnik', '1')->count(),
                'zastupca' => User::get()->where('Zastupca_firmy', '1')->count(),

                // graf3 Pohlavie pouzivatelov
                'muz' => User::get()->where('pohlavie', '0')->count(),
                'zena' => User::get()->where('pohlavie', '1')->count(),
                'nezvolene' => User::get()->where('pohlavie', null)->count(),

                // graf4 Pocet student zamestnanec
                'student' => $student1,
                'zamestnanec3' => $zamestnane2,

                //graf5 Pocet aktivnich praxi studentov
                'aktivna' => Prihlasenie::get()->where('aktivna', '1')->count(),
                'neaktivna' => Prihlasenie::get()->where('aktivna', '0')->count(),

                //graf6 Pocet schvalenych ponuk
                'schvalena' => Listing::get()->where('schvalena', '1')->count(),
                'neschvalena' => Listing::get()->where('schvalena', '0')->count(),
            ]);

        }
        else{abort(403, 'Unauthorized Action');}
    }

    //zoznam pracovísk
    public function zoz_pracovisk(){
        if(auth()->user()->Admin == 1) {
            return view('administrator.zoznam_pracovisk');

        }
        else{abort(403, 'Unauthorized Action');}
    }


    // ------------------------------------------------------------------------------------------
    // VEDUCI PRACOVISKA

    // nexus vedúci pracoviska
    public function nexusV(){
        if(auth()->user()->Veduci_pracoviska == 1) {
            return view('veduci_pracoviska.nexus_veduci');

        }
        else{abort(403, 'Unauthorized Action');}
    }

    //zoznam oraganizacii a firiem
    public function zoznamfirm(){

        $listing = DB::table('listings')->distinct('company')->get();
        return view('veduci_pracoviska.zoznam_firm', ['listings' => $listing]);

    }

    // -------------------------------------------------------------------------------------------
    // POVERENÝ PRACOVNÍK PRACOVISKA

    // nexus poverený pracovník pracoviska
    public function nexusPov(){
        if(auth()->user()->Povereny_pracovnik == 1) {
            return view('povereny_pracovnik.nexus_povereny');

        }
        else{abort(403, 'Unauthorized Action');}

    }


    // Create New User
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'odbor' => ['required'],
            'password' => 'required|confirmed|min:6'

        ]);
        $formFields['Admin'] = 0;
        $formFields['Veduci_pracoviska'] = 0;
        $formFields['Povereny_pracovnik'] = 0;
        $formFields['Zastupca_firmy'] = 0;

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);

        // Login
        auth()->login($user);

        return redirect('/')->with('message', 'Pouzivatel bol vytvoreny aj prihlaseny');
    }

    // Logout User
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'Práve ste sa odhlásili!');

    }

    // Show Login Form
    public function login() {
        return view('users.login');
    }

    // Authenticate User
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();
            if(auth()->user()->Admin == 1){
                return redirect('/nexus_admin')->with('message', 'Ste prihláseny!');
            }
            if(auth()->user()->Veduci_pracoviska == 1){
                return redirect('/nexus_veduci')->with('message', 'Ste prihláseny!');
            }
            if(auth()->user()->Povereny_pracovnik == 1){
                return redirect('/nexus_povereny')->with('message', 'Ste prihláseny!');
            }
            if(auth()->user()->Zastupca_firmy == 1){
                return redirect('/')->with('message', 'Ste prihláseny!');
            }
            else{ return redirect('/')->with('message', 'Ste prihláseny!');}
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
}
