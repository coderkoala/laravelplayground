<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    public function pagelanding(){
        return view('landing');
    }

    public function pagewelcome(){
        return view('welcome');
    }
}
