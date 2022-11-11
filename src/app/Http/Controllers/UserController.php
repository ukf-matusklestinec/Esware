<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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

    //--------------------------------------------------------------------------------------------------------
    // ADMINISTRATOR

    // nexus administratora
    public function nexusA(){
        if(auth()->user()->Admin == 1) {
            return view('administrator.nexus_admin');

        }
        else{abort(403, 'Unauthorized Action');}
    }

    //zoznam studentov
    public function zoz_student(){
        if(auth()->user()->Admin == 1) {
            return view('administrator.zoznam_studentov');

        }
        else{abort(403, 'Unauthorized Action');}
    }

    // zoznam firiem pre administratora
    public function zoz_firma(){
        if(auth()->user()->Admin == 1) {
            return view('administrator.zoznam_firiem');

        }
        else{abort(403, 'Unauthorized Action');}
    }

    //zoznam pracovnikov
    public function zoz_pracov(){
        if(auth()->user()->Admin == 1) {
            return view('administrator.zoznam_pracovnikov');

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

    // spravovanie používateľov prerobiť
    public function manage_users(User $user){
        if(auth()->user()->Admin == 1) {
            return view('administrator.zoznam_studentov');
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








    // -------------------------------------------------------------------------------------------
    // POVERENÝ PRACOVNÍK PRACOVISKA

    // nexus poverený pracovník pracoviska
    public function nexusPov(){
        if(auth()->user()->Povereny_pracovnik == 1) {
            return view('povereny_pracovnik.nexus_povereny');

        }
        else{abort(403, 'Unauthorized Action');}

    }

    // zoznam študentov do príslušného akademického roka
    public function zoz_ak_stud(){
        if(auth()->user()->Povereny_pracovnik == 1) {
            return view('povereny_pracovnik.zoznam_akad_student');

        }
        else{abort(403, 'Unauthorized Action');}
    }

    // zoznam organizácií a firiem
    public function zoz_or_fi(){
        if(auth()->user()->Povereny_pracovnik == 1) {
            return view('povereny_pracovnik.zoznam_org_firm');

        }
        else{abort(403, 'Unauthorized Action');}
    }

    // zoznam praxí vykonávaných študentmi
    public function zoz_prax(){
        if(auth()->user()->Povereny_pracovnik == 1) {
            return view('povereny_pracovnik.zoznam_praxi');

        }
        else{abort(403, 'Unauthorized Action');}
    }



    // Create New User
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

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
