<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function config()
    {
        return view('site.configuracao.config');
    }

    public function sair()
    {
        return redirect('/home');
    }
}
