<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Grade;
use App\Models\Personnel;
use App\Models\Users;

class PersonnelController extends Controller
{
    public function enreg_perso(){

        $chemin = $req->img->store('img/users','public');

        $perso = new Personnel;
        $perso->matri = request('matri');
        $perso->nom = request('nom');
        $perso->grade = request('grade');
        $perso->sexe = request('sexe');
        $perso->date_nais = request('date_nais');
        $perso->lieu_nais = request('lieu_nais');
        $perso->ethnie = request('ethnie');
        $perso->reg_ori = request('reg_ori');
        $perso->dep = request('depart');
        $perso->arron = request('arrond');
        $perso->mat_solde = request('mat_sold');
        $perso->date_eng = request('date_eng');
        $perso->relig = request('religion');
        $perso->tel = request('num_tel');
        $perso->nom_pere = request('nom_pere');
        $perso->nom_mere = request('nom_mere');
        $perso->dip_elev = request('dip_ele');
        $perso->stat_civ = request('stat_civ');
        $perso->num_cni = request('num_cni');
        $perso->unit = request('unite');
        $perso->img = $chemin;
        $perso->descrip = '';

        $perso->save();

        $user = new Users;
        $user->matri = request('matri');
        $user->pseudo = request('nom');
        $user->password = bcrypt('user');
        $user->niv_sec = 'niv1';
        $user->statut = '0';
        $user->img = $chemin;

        $user->save();

        return redirect('/perso_mod?p=upd')->with('vld_msg', 'Enregistrement reussi');
    }

    public function list_perso(){
        $list = Personnel::all();

        return view('layouts.gest_perso.gest_identif.gest_identif', compact('list'));
    }

    public function list_grade(){
        $grade = Grade::all();

        return view('layouts.gest_perso.gest_identif.gest_identif', compact('grade'));
    }



    public function list_users(){
        $list_users = Users::where('matri', '<>', 'VBNET')->get();

        return view('layouts.gest_users.gest_users', compact('list_users'));
    }

    public function delete_personel($mat){
        Personnel::where('matri', '=', $mat)->delete();
        Users::where('matri', '=', $mat)->delete();
        return redirect('/gest_identif?p=upd');
    }
    public function update_perso(request $req){

        $num_cni = $req->num_cni;
        $mat = $req->matri;
        $nom = $req->nom;
        $grade = $req->grade;
        $sexe = $req->sexe;
        $date_nais = $req->date_nais;
        $lieu_nais = $req->lieu_nais;
        $ethnie = $req->ethnie;
        $reg_ori = $req->reg_ori;
        $dep = $req->dep;
        $arron = $req->arron;
        $mat_sold = $req->mat_solde;
        $date_eng = $req->date_eng;
        $religion = $req->relig;
        $num_tel = $req->tel;
        $nom_pere = $req->nom_pere;
        $nom_mere = $req->nom_mere;
        $dip_ele = $req->dip_elev;
        $stat_civ = $req->stat_civ;
        $unite = $req->unit;

        $sel_p = personnel::where('matri',$mat)->get();
        $id = $sel_p[0]->id;

        $perso = Personnel::find($id);
        $perso->num_cni = $num_cni;
        $perso->matri = $mat;
        $perso->nom = $nom;
        $perso->grade = $grade;
        $perso->sexe = $sexe;
        $perso->date_nais = $date_nais;
        $perso->lieu_nais = $lieu_nais;
        $perso->ethnie = $ethnie;
        $perso->reg_ori = $reg_ori;
        $perso->dep = $dep;
        $perso->arron = $arron;
        $perso->mat_solde = $mat_sold;
        $perso->date_eng = $date_eng;
        $perso->relig = $religion;
        $perso->tel = $num_tel;
        $perso->nom_pere = $nom_pere;
        $perso->nom_mere = $nom_mere;
        $perso->dip_elev = $dip_ele;
        $perso->stat_civ = $stat_civ;
        $perso->unit = $unite;
        $perso->save();


        return redirect('/perso_mod?p=upd');
    }

    public function fiche_perso(request $req){
        $mat = $req->mat;
        $info_perso = Personnel::where('matri',$mat)->get();
        return view('layouts.dash.fiche_perso',compact('info_perso'));
    }
}
