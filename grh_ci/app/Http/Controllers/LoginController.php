<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        request()->validate([
            'matricule' => ['required'],
            'password' => ['required']
        ]);
        $result = auth()->attempt([
            'matri' => request('matricule'),
            'password' => request('password'),
        ]);
        if ($result){
            return redirect('home#home')->with('suc_con','Connexion reussi');
        }
        return back()->withInput()->with('err_con','<b>Erreur de connexion</b> <br>Veuillez vérifiez le Matricule et ou le Password');
    }
}
