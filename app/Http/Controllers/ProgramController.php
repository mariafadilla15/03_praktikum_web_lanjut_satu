<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function karir(){
        return view('bladephp.program', ['namaprogram'=>'Karir']);
    }
    public function magang(){
        return view('bladephp.program', ['namaprogram'=>'Magang']);
    }
    public function industri(){
        return view('bladephp.program', ['namaprogram'=>'Kunjungan Industri']);
    }
}