<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contato;
use App\Models\Message;
use App\Models\Cliente;
use App\Models\Veiculo;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'teste index';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipo = $request->tipo;
        $texto = $request->texto;
        $data = $request->data;
        $dataencode = $request->input('data');
        $contato_id = 1;

        if($tipo == 3){
            $cliente = new Cliente;
            $cliente->name = $dataencode['name'];
            $cliente->telefone = $dataencode['telefone'];
            $veiculo = new Veiculo;
            $veiculo->placa = $dataencode['placa'];
            $conscliente = Cliente::where([
                ['telefone', $cliente->telefone]
            ])->first();
            
            $consveiculo = Veiculo::where([
                ['placa', $veiculo->placa]
            ])->first();
            if($conscliente == null){
                return 'teste nulo';
                $cliente->save();
            }else{
                $cliente = $conscliente;
                $cliente->telefone = $dataencode['telefone'];
                $cliente->update();
            }
            if($consveiculo == null){
                $veiculo->save();
            }else{
                $veiculo = $consveiculo;
            }
            $contato = new Cotnato;
            $contato->clientes_id = $cliente->id;
            $contato->veiculos_id = $veiculo->id;
            $contato->save();
            $contato_id = $contato->id;
        }else if($tipo == 4){
            $mensagem = new Message;
            $mensagem->description = $texto;
            $mensagem->contatos_id = $dataencode['contato_id'];
            $mensagem->save();
        }   

        $contato = [
            'contato_id' => $contato_id,
            'tipo' => $tipo,
            'texto' => $texto,
            'data' => $data
        ];
        
        return response()->json($contato);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
