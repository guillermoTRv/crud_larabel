<?php

namespace memin\Http\Controllers;

use memin\User;
use memin\Http\Controllers\Controller;

class holaController extends Controller
{

    public function index()
    {
        return view('index');
    }
    public function contacto()
    {
        return view('contacto');
    }
    public function revi(){
        return view('revi');
    }


}