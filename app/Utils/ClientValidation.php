<?php
namespace App\Utils;

class ClientValidation {
    public static function validarCpf($cpf){
        $cpf = str_replace(' ','',$cpf);
        $cpf = str_replace('.','',$cpf);
        $cpf = str_replace('-','',$cpf);

        if(strlen($cpf) != 11){
            return false;
        } else {
            return true;
        }
    }
}