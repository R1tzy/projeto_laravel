<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
    <link rel="stylesheet" href="{{ asset('css/exercicio.css') }}" type="text/css">
    <style>
        main{
            background: #979dac;
        }

        h1{
            color: #001233;   
        }

        div > label,  button:hover{
            color: #001233;
        }

        button{
            background-color: #001233;
        }
    </style>
</head>
<body>
    <!-- 
        Faça um programa que receba o valor do quilo de um produto e a quantidade 
        de quilos do produto consumida, calculando o valor final a ser pago.
    -->
    <main>
        <h1>Exercício 02</h1>
        <form action="/resultado02" method="post">
        @csrf
            <div>
                <label for="valor_kg">Valor do KG:R$</label><br>
                <input type="number" id="valor_kg" name="kg" min="0">
            </div>
            <div>
                <label for="qtd">Quantidade:</label><br>
                <input type="number" name="qtd" id="qtd" min="0">
            </div>
            <button type="submit">Valor Final</button>
        </form>
    </main>
</body>
</html>