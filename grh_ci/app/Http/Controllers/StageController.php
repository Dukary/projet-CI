<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stage;

class StageController extends Controller
{
    public function list_stage(){
        $list = Stage::all();
        return view('layouts.gest_form.suivi_form',compact('list'));
    }
}
