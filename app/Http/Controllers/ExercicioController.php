<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioController extends Controller
{
    // Exercicios
    public function exe01(){
        return view("/exercicio/exe01");
    }

    public function exe02(){
        return view("/exercicio/exe02");
    }

    public function exe03(){
        return view("/exercicio/exe03");
    }

    public function exe04(){
        return view("/exercicio/exe04");
    }

    public function exe05(){
        return view("/exercicio/exe05");
    }

    // Resultados
    public function resultado01(Request $request){
        $erro = "ERRO!!! PREENCHA TODOS OS CAMPOS";
        $pago = $request['pago'];
        $valor_pro = $request['produto'];
        if (isset($pago) && isset($valor_pro)){
            if($pago < $valor_pro){
                $resultado = "ERRO!!! Valor Pago < Valor do Produto.";
            }
            else if($pago == $valor_pro){
                $resultado = "Valor Pago = Valor do Produto. Não há Troco!!";
            }
            else{
                $resultado = "O troco é de ".($pago - $valor_pro)." reais";
            }
            return view("/resultado/resultado01",['result' => $resultado ]);
        }
        else{
            return view("/resultado/resultado01", ['result' => $erro]);
        }
       
    }

    public function resultado02(Request $request){
        $erro = "ERRO!!! PREENCHA TODOS OS CAMPOS";
        $Kg = $request['kg'];
        $Qtd = $request['qtd'];
        if(isset($Kg) && isset($Qtd)){
            $total = "O total é ".$Kg * $Qtd." reais";
            return view("/resultado/resultado02", ['result' => $total]);
        }
        else{
            return view("/resultado/resultado02", ['result' => $erro]);
        }
    }

    public function resultado03(Request $parametro){
        $erro = "ERRO!!! PREENCHA TODOS OS CAMPOS";
        $num = $parametro['num'];
        if (isset($num)){
            if($num < 10){
                $resultado = "O valor é menor que 10";
            }
            else if($num > 10){
                $resultado = "O valor é maior que 10";
            }
            else{
                $resultado = "O valor é igual a 10";
            }
            return view("/resultado/resultado03", ['result' => $resultado]);
        }
        else{
            return view("/resultado/resultado03", ['result' => $erro]);
        }
       
    }

    public function resultado04(Request $arg){
        $erro = "ERRO!!! PREENCHA TODOS OS CAMPOS";
        $num = $arg['num'];
        if(isset($num)){
            if($num < 0){
                $resultado = "Valor Negativo!!";
            }
            else if($num > 0){
                $resultado = "Valor Positivo!!";
            }
            else{
                $resultado = "Igual a Zero";
            }
            return view("/resultado/resultado04", ['result' => $resultado]);
        }
        else{
            return view("/resultado/resultado04", ['result' => $erro]);
        }
    }

    public function resultado05(Request $request){
        for($i=1; $i<5; $i++){
            $vetor[$i] = $request["nota{$i}"];
        }
        $tamanho = count($vetor);
        $soma = array_sum($vetor);
        $media = $soma / $tamanho;
        if($media >= 7){
            $mensagem = "Aprovado com média {$media}";
            return view("/resultado/resultado05", ['result' => $mensagem]);
        }
        else if($media < 7 && $media >=6){
            $mensagem = "Recuperação com média {$media}";
            return view("/resultado/resultado05", ['result' => $mensagem]);
        }
        else{
            $mensagem = "Reprovado com média {$media}";
            return view("/resultado/resultado05", ['result' => $mensagem]);
        }
    }
}
