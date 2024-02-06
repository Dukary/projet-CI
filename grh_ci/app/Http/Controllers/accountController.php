<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Spa;
use App\Models\Cathegorieperso;
use App\Models\Personnel;
use App\Models\Formation;
use App\Models\Infostag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class accountController extends Controller
{
    public  function home(){

        return view('layouts.home');
    }

    public function gest_spa(request $req){

        $q = $req->opt;
        $opt = '';
        if ($q == '1'){
            $opt = 'perso_pre';
        }

        if ($q == '2'){
            $opt = 'perso_abs_jus';
        }

        if ($q == '3'){
            $opt = 'perso_abs_non_jus';
        }

        $cath = Cathegorieperso::where('etat',$opt)->get();
        $perso = Personnel::all();

        return view('layouts.spa.gest_spa', compact('cath','perso'));
    }

    public function gest_users(){

        return view('layouts.gest_users.gest_users');
    }

    public function profil(){

        return view('layouts.profil.profil');
    }

    public function page_upd_perso(){

        $grade = Grade::all();

        return view('layouts.gest_perso.gest_identif.page_upd_perso',compact('grade'));
    }

    public function logout(){
        auth()->logout();

        return redirect('/')->with('log','Vous avez bien été déconnecter');
    }
    public function suivi(){

        $list = Spa::all();

        return view('layouts.spa.gest_spa', compact('list'));
    }


    public function suivi_form(){

        return view('layouts.gest_form.gest_form');
    }

    public function homepage(){
        $list = Personnel::all();



        $nb_h = Personnel::where('sexe', '=', 'Masculin');
        $nh = $nb_h->count('matri');

        $list_grades = Grade::all();

        $sel_all = Formation::all();


        $list_grades = Grade::all();

        $nb_f = Personnel::where('sexe', '=', 'Feminin');
        $nf = $nb_f->count('matri');

        $stat1 = Personnel::where('grade', '=', 'Colonel')->count('grade');
        $stat2 = Personnel::where('grade', '=', 'Lieutenant-colonel')->count('grade');
        $stat3 = Personnel::where('grade', '=', 'Commandant')->count('grade');
        $stat4 = Personnel::where('grade', '=', 'Capitaine')->count('grade');
        $stat5 = Personnel::where('grade', '=', 'Lieutenant')->count('grade');
        $stat6 = Personnel::where('grade', '=', 'Sous-lieutenant')->count('grade');
        $stat7 = Personnel::where('grade', '=', 'Adjoudant-chef Major')->count('grade');
        $stat8 = Personnel::where('grade', '=', 'Adjudant-chef')->count('grade');
        $stat9 = Personnel::where('grade', '=', 'Adjudant')->count('grade');
        $stat10 = Personnel::where('grade', '=', 'Sergent-chef')->count('grade');
        $stat11= Personnel::where('grade', '=', 'Sergent')->count('grade');
        $stat12 = Personnel::where('grade', '=', 'Caporal-chef')->count('grade');
        $stat13 = Personnel::where('grade', '=', 'Caporal')->count('grade');
        $stat14 = Personnel::where('grade', '=', '1ere classe')->count('grade');
        $stat15 = Personnel::where('grade', '=', '2e classe')->count('grade');

        return view('layouts.home', compact(
            'nh',
            'nf',
            'sel_all',
            'list',
            'list_grades',
            'stat1','stat2','stat3','stat4','stat5','stat6','stat7','stat8','stat9','stat10','stat11','stat12','stat13','stat14','stat15'));
    }

    public function upd(request $req){
        $mat = $req->mat;
        $grade = Grade::all();
        $p = personnel::where('matri',$mat)->get();
        return view('layouts.gest_perso.gest_identif.page_upd_perso', compact('grade','p'));
    }

    public function fiche_suivi_spa(request $req){

        $num = $req->num;
        $cc1 = cathegorieperso::join('spas','cathegoriepersos.etat','=','spas.cath')
        ->select('cathegoriepersos.*','spas.*')
        ->where('cathegoriepersos.etat','perso_pre')
        ->get();
        $nb_cc1 = $cc1->count();
        $cc2 = cathegorieperso::where('etat','perso_abs_jus')->get();
        $cc3 = cathegorieperso::where('etat','perso_abs_non_jus')->get();

        $inf = spa::where('num_spa',$num)->get();

        return view('layouts.spa.fiche_suivi', compact('cc1','cc2','cc3','inf','nb_cc1'));
    }
}
