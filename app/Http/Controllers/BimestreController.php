<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BimestreController extends Controller
{

    public function bimuno()
    {
        return view('unidades/bimestreuno');
    }

    public function bimdos(){
        return view('unidades/bimestredos');
    }

    public function bimtres() {
        return view('unidades/bimestretres');
    }

    public function bimcuatro() {
        return view('unidades/bimestrecuatro');
    }
}
