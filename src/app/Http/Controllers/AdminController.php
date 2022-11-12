<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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
        $zam = DB::table('users')->get()->whereNotNull('Povereny_pracovnik');
        return view('administrator.zoznam_pracovnikov', ['users' => $zam]);
    }

    public function manage_veducich(){
        // zobrazenie zamestnancov   prerobiť
        $ved = DB::table('users')->get()->whereNotNull('Veduci_pracoviska');
        return view('administrator.zoznam_veducich', ['users' => $ved]);
    }
}
