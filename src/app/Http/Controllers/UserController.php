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

    // ADMINISTRATOR

    // nexus administratora
    public function nexusA(){
        return view('administrator.nexus_admin');
    }

    // zoznam firiem pre administratora
    public function zoz_firma(){
        return view('administrator.zoznam_firiem');
    }

    // VEDUCI PRACOVISKA

    // nexus vedúci pracoviska
    public function nexusV(){
        return view('veduci_pracoviska.nexus_veduci');
    }

    // POVERENÝ PRACOVNÍK PRACOVISKA

    // nexus poverený pracovník pracoviska
    public function nexusPov(){
        return view('povereny_pracovnik.nexus_povereny');
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

            return redirect('/')->with('message', 'Ste prihláseny!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
}
