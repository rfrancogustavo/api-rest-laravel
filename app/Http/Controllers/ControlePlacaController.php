<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Models\ControlePlaca;
use App\Utils\ClientValidation;
use App\Utils\ClientFormatter;

class ControlePlacaController extends Controller
{
    public function cadastrarCliente(Request $request) {
        if(!ClientValidation::validarCpf($request['cpf'])){
            return Response::json(array(
                'code'      =>  400,
                'message'   =>  'CPF inválido'
            ), 400);
        } else {
            $client = new ClientFormatter($request);
            return ControlePlaca::create($client->montarCliente()->all());
        }
    }

    public function buscarCliente($id){
        return ControlePlaca::find($id);
    }

    public function consultarFinalPlaca($numero){
        return ControlePlaca::where('placa', 'like', '%' . $numero . '%')->get();
    }

    public function delete($id){
        $cliente = ControlePlaca::findOrFail($id);
        $cliente->delete();

        return 204;
    }

    public function alterar(Request $request,$id) {
        if(!ClientValidation::validarCpf($request['cpf'])){
            return Response::json(array(
                'code'      =>  400,
                'message'   =>  'CPF inválido'
            ), 400);
        } else {
            $clienteObj = ControlePlaca::findOrFail($id);
            $client = new ClientFormatter($request);
            $clienteObj->update($client->montarCliente()->all());
            return $clienteObj;
        }
    }
}
