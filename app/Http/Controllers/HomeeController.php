<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeeController extends Controller
{
    public function homee(){
        return view('bladephp.homee', ['nama'=>'Maria Fadilla - 2141720063']);
    }
    public function index(){
        return view('bladephp.homee');
    }
}
