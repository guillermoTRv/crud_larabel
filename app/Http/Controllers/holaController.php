<?php

namespace memin\Http\Controllers;

use memin\User;
use memin\Http\Controllers\Controller;

class holaController extends Controller
{

    public function index()
    {
        return "Hola desde controller";
    }

    public function nombre($nombre)
    {
        return "Hola mi nombre is". $nombre;
    }
}