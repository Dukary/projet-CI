<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spa;

class SpaController extends Controller
{
    public function enreg_spa(request $req){

        $spa = new Spa;

        $spa->num_spa = $req->num_spa;
        $spa->matri = $req->matri;
        $spa->cath = $req->cath;
        $spa->date_jour = $req->date;

        $spa->save();

        return redirect('/suivi?p2=suivi')->with('vld_msg','Enregistrement reussi !!!');
    }
}
