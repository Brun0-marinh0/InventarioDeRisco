<?php

namespace App\Http\Controllers;

use App\Models\Grupo_Risco;
use Illuminate\Http\Request;

class GrupoRiscoController extends Controller
{
    public function risco()
    {
        $riscos = Grupo_Risco::all();

        return view('site.configuracao.risco',['riscos'=> $riscos]);
    }

    public function destroy($id)
    {
       Grupo_Risco::findOrFail($id)->delete();

       return redirect('/config/risco');
    }
}
