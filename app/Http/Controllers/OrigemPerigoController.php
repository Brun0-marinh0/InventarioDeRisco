<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrigemPerigoController extends Controller
{
    public function origemPerigo(){

        return view('site.configuracao.menuOrigem');
    }
}
