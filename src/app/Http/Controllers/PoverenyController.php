<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;





class PoverenyController extends Controller
{
    //spravovanie povereného pracovníka

    public function manage_student(){
        // zobrazenie študentov podľa toho, že majú daný odbor
        $users = DB::table('users')->get()->whereNotNull('odbor');
        return view('povereny_pracovnik.zoznam_akad_student', ['users' => $users]);
    }

}
