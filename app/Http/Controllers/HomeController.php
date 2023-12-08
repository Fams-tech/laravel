<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        $age = 20;
    return view('home',/*["nom" => $nom]*/compact('age'));
    }
}
