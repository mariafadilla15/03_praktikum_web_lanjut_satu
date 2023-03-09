<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news($nama=""){
        return view('bladephp.news', ['namaberita'=>'Hot News Minggu Ini']);
    }
}