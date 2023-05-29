<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CasaController extends Controller
{
    public function home(){
        return view("Pagina_Inicial");
    }
    public function add(){
        return view("Pagina_Add");
    }
    public function mod(){
        return view("Pagina_Mod");
    }
}
