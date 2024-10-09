<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerProject extends Controller
{
    public function home(){
        return view('pages.home');
    }

    public function admin(){
        return view('pages.admin');
    }

    public function contact()
{
    return view('pages.paginaContato');
}
}
