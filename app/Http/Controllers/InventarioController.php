<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventarioController extends Controller
{
    public function inventario()
    {
        return view('site.inventario');
    }

    /*public function create(Request $request)
    {
        dd($request->all());
    }*/
}

