<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function IMC()
    {
        $peso = $_GET['peso'];
        $altura = $_GET['altura'];
        $nome = $_GET['nome'];
        $idade = $_GET['idade'];

        $res = ($altura*$altura) / $peso;
        return array('Seu IMC: '.$res, 'Seu Nome: '.$nome, 'Sua idade: '.$idade);
    }

    public function somar(){
        $numero1 = $_GET['n1'];
        $numero2 = $_GET['n2'];

        $res = $numero1 + $numero2;

        return 'A soma dos dois números digitados é: '.$res;
    }

    public function calcular()
    {
        $base = $_GET['base'];
        $exp = $_GET['exp'];

        $res = pow($base, $exp);

        return $res;

     
    }
}
