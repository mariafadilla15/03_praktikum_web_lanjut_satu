<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show($id)
    {
        return view('bladephp.contact-us');
    }
}