<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news($nama=""){
        if ($nama== ""){
            return view('bladephp.news', ['namaberita'=>'Hot News Minggu Ini']);
        }else{
            $pesan="Sorry, it can't access. Please entry the correct keyword";
            echo "<script>alert('$pesan')</script>";
            return view('homee', ['nama'=>'dayudayoo']);
        }
    }
}
