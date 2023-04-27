<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;
use App\Models\Cliente;
use App\Models\Veiculo;

class ConsultaController extends Controller
{
    public function consultar(Request $request){
        $contato = new Contato;
        $cliente = new Cliente;
        $veiculo = new Veiculo;
        $veiculo->modelo = 'nao cadastrado';

        $placa = $request->placa;
        $celular = $request->celular;

        if(strlen($placa) == 8){
            $veiculo->placa = $placa;
            $consveiculo = Veiculo::where('placa', $veiculo->placa)->first();
        }else if(strlen($placa) == 7){
            $placa = substr_replace($placa, "-", 3, 0);
            $veiculo->placa = $placa;
            $consveiculo = Veiculo::where('placa', $veiculo->placa)->first();
        }else{
            $veiculo->renavam = $placa;
            $consveiculo = Veiculo::where('renavam', $veiculo->renavam)->first();
        }

        if($consveiculo){
            $veiculo = $consveiculo;
        }else{
            $veiculo->save();
        }

        $cliente->telefone = $celular;
        $conscliente = Cliente::where('telefone', $cliente->telefone)->first();
        if($conscliente){
            $cliente = $conscliente;
        }else{
            $cliente->save();
        }

        $contato->clientes_id = $cliente->id;
        $contato->veiculos_id = $veiculo->id;

        $contato->save();

        return redirect('/')->with('msg', 'Solicitação de consulta enviada com sucesso, aguarde que um de nossos consultores irá retornar!');
    }
}
