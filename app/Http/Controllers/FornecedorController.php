<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => [
                'nome' => '|Judas',
                'status' => 'N',
                'cnpj' => '00.000.000/0000-00'
            ], 
            1 => [
                'nome' => 'Chicão',
                'status' => 'S'
            ]
        ];

        echo isset($fornecedores[1]['cnpj']) ? 'cnpj informado' : 'cnpj nao informado';

        return view('app.fornecedores.index', compact('fornecedores'));
    }
}
