<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
    <link rel="stylesheet" href="{{ asset('css/exercicio.css') }}" type="text/css">
    <style>
        main{
            background: #c71f37;
        }

        h1{
            color: #641220;   
        }

        div > label, button:hover{
            color: #641220;
        }

        button{
            background-color: #641220;
        }
    </style>
</head>
<body>
    <!-- 
        Faça um programa que receba um valor pago, um segundo valor 
        que é o preço do produto e retorne o troco a ser dado. 
    -->
    <main>
        <h1>Exercício 01</h1>
        <form action="/resultado01" method="post">
        @csrf
            <div>
                <label for="valor_pago">Valor pago: R$</label><br>
                <input type="number" id="valor_pago" name="pago" min="0">
            </div>
            <div>
                <label for="valor_pro">Valor do Produto: R$</label><br>
                <input type="number" name="produto" id="valor_pro" min="0">
            </div>
            <button type="submit">Troco</button>
        </form>
    </main>
</body>
</html>