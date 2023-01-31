<?php

namespace App\Utils;

use Illuminate\Http\Request;

class ClientFormatter {

    private Request $request;

    function __construct($request) {
        $this->request = $request;
    }

    function montarCliente(){
        $this->request['cpf'] = $this -> formatarCpf($this->request['cpf']);
        $this->request['phone'] = $this -> formatarTelefone($this->request['phone']);

        return $this->request;
    }

    private function formatarCpf($cpf) {
        $cpf = str_replace(' ','',$cpf);
        $cpf = str_replace('.','',$cpf);
        $cpf = str_replace('-','',$cpf);

        return $cpf;
    }

    private function formatarTelefone($telefone) {
        $telefone = str_replace(' ','',$telefone);
        $telefone = str_replace('(','',$telefone);
        $telefone = str_replace(')','',$telefone);
        $telefone = str_replace('-','',$telefone);

        return $telefone;
    }
}