<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stage;
use App\Models\Grade;
use App\Models\Formation;
use App\Models\Personnel;
use App\Models\Infostag;

class FormationController extends Controller{

    public function gest_form(){
        $list = Stage::all();
        $grade = Grade::all();
        $suiv = Formation::all();
        $perso = Personnel::all();
        return view('layouts.gest_form.gest_form',compact('list','grade','suiv','perso'));
    }

    public function enreg_form1(request $req){

        //Enregistrement d'une formation
        $form = new Formation;
        $form->matri = $req->matri;
        $form->form = $req->form;
        $form->lieu_form = $req->lieu_form;
        $form->stage = $req->stage;

        $form->save();

        return redirect('/suivi_form?p3=suivi');
    }

    public function enreg_form2(request $req){

        //Enregistrement Informations stagiaire d'une autre base

        $chemin = $req->img->store('img/img_new_stag','public');

        $inf_sta = new Infostag;
        $inf_sta->img = $chemin;
        $inf_sta->matri = $req->matri;
        $inf_sta->nom = $req->nom;
        $inf_sta->grade = $req->grade;
        $inf_sta->sexe = $req->sexe;
        $inf_sta->date_nais = $req->date_nais;
        $inf_sta->lieu_nais = $req->lieu_nais;
        $inf_sta->ethnie = $req->ethnie;
        $inf_sta->reg_ori = $req->reg_ori;
        $inf_sta->dep = $req->dep;
        $inf_sta->arron = $req->arron;
        $inf_sta->mat_sold = $req->mat_solde;
        $inf_sta->num_cni = $req->num_cni;
        $inf_sta->date_deliv = $req->date_deliv;
        $inf_sta->date_eng = $req->date_eng;
        $inf_sta->relig = $req->relig;
        $inf_sta->tel = $req->tel;
        $inf_sta->dip_elev = $req->dip_elev;
        $inf_sta->nom_pere = $req->nom_pere;
        $inf_sta->nom_mere = $req->nom_mere;
        $inf_sta->unite = $req->unite;
        $inf_sta->emp_tenu = $req->emp_ten;
        $inf_sta->qual_alea = $req->qual_alea;
        $inf_sta->form_spe = $req->form_spe;
        $inf_sta->stat_civ = $req->stat_civ;
        $inf_sta->nom_per_acc = $req->nom_pra;
        $inf_sta->lien_par_per_acc = $req->lien_pa_pra;
        $inf_sta->tel_per_acc = $req->tel_pra;
        $inf_sta->adress_per_acc = $req->add_ser_pra;
        $inf_sta->ville_per_acc = $req->ville_pra;

        $inf_sta->save();

        //Enregistrement d'une formation
        $form = new Formation;
        $form->matri = $req->matri;
        $form->form = $req->form;
        $form->lieu_form = $req->lieu_form;
        $form->stage = $req->stage;

        $form->save();

        return redirect('/suivi_form?p3=suivi');
    }

    public function suivi_form1(request $req){
        $mat = $req->mat;
        $info_stag = Infostag::where('matri',$mat)->get();
        $info_form = Formation::where('matri',$mat)->get();
        return view('layouts.gest_form.fiche_stag',compact('info_stag','info_form'));
    }

    public function suivi_form2(request $req){
        $mat = $req->mat;
        $info_stag = Personnel::where('matri',$mat)->get();
        $info_form = Formation::where('matri',$mat)->get();
        return view('layouts.gest_form.fiche_stag',compact('info_stag','info_form'));
    }
}
