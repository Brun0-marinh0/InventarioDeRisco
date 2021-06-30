<?php

namespace App\Http\Controllers;

use App\Models\Maquina;
use Illuminate\Http\Request;




class HomeController extends Controller
{
    public function home()
    {

            $maquinas = Maquina::all();

        return view('site.home', ['maquinas'=> $maquinas]);
    }

    public function store(Request $request)
    {   
        //validar existência no banco
        $nome_da_maquina = $request->get('nome_da_maquina');
        $unidade = $request->get('unidade');

        $new_maquina = new Maquina();

        $existe = $new_maquina->where('nome_da_maquina', $nome_da_maquina)->where('unidade', $unidade)->get()->first();

        if($existe){
            session_start();
            $_SESSION['msg'] = "<p class='erro-maquina'> Máquina Já está cadastrada </p>";
            return redirect()->route('site.home');
        }
        else{
            //inserir dados no banco
            Maquina::create([
                'nome_da_maquina' => $request->nome_da_maquina,
                'tipo' => $request->tipo,
                'unidade' => $request->unidade,
                'fabricante' => $request->fabricante,
                'modelo'=> $request->modelo
        ]);

        return redirect()->route('site.home');
        }
    }

    public function destroy(Request $request)
    {
       $maquinas = Maquina::findOrFail($request->InputId);
       $maquinas->delete();
        return redirect('/home');
    }
}
?>