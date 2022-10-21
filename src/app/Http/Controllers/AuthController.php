<?php



namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;



class AuthController extends Controller{

    public function index(){
        return view('login');
    }

    public function registration(){
        return view('registration');
    }

    // kontrola správneho prihlásenia
    public function postLogin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')->withSuccess('Úspešne ste sa prihlásil');
        }

        return redirect("login")->withSuccess('Nesprávne prihlasovacie údaje');
    }

    // ešte pridať zvyšné položky
    public function postRegistration(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);
        return redirect("dashboard")->withSuccess('Ste prihlásený');
    }

    public function dashboard(){
        if(Auth::check()){
            return view('dashboard');
        }
        return redirect("login")->withSuccess('Nemáte prístup');
    }


    //ešte pridať zvyšné položky
    public function create(array $data){
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }

}
