<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //aqui eu poderia verificar se um user existe
    //buscar dados de um user
    public function index(){
       
        return view("bemvindo");
    }
}
