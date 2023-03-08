<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function edugames(){
        return view('bladephp.product', ['namaproduk'=>'Marbel - Educational Games']);
    }
    public function kidsgames(){
        return view('bladephp.product', ['namaproduk'=>'Marbel & Friends - Kids games']);
    }
    public function riristory(){
        return view('bladephp.product', ['namaproduk'=>'Riri - Story Books & Animations']);
    }
    public function kolakkids(){
        return view('bladephp.product', ['namaproduk'=>'Kolak - Kids Songs']);
    }
}