<?php

namespace App\Http\Controllers;

use App\Models\Carregadores;
use Illuminate\Http\Request;

class CarregadoresController extends Controller
{
    public function criarCarregador(Request $request){
        $items = new Carregadores();

        $items->data_de_criacao = $request->data_de_criacao;
        $items->hardware_id = $request->hardware_id;
        $items->tarifa = $request->tarifa;

        $items-> save();

        return response()->json('Criado com sucesso!');
    }

    public function verTodosCarregador(){
        $items = Carregadores::all();

        return response()->json($items);
    }

    public function editarCarregador(Request $request){
        $items = Carregadores::findorfail($request->id);

        $items->data_de_criacao = $request->data_de_criacao;
        $items->hardware_id = $request->hardware_id;
        $items->tarifa = $request->tarifa;

        $items-> update();

        return response()->json('Atualizado com sucesso!');
    }

    public function apagarCarregador(Request $request){
        $items = Carregadores::findorfail($request->id)->delete();

        return response()->json('Apagado com sucesso!');
    }
}
