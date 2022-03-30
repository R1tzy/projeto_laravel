<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado 02</title>
    <link rel="stylesheet" href="{{ asset('css/resultado.css') }}" type="text/css">
    <style>
        main{
            background: #979dac;
        }

        p{
            color: #001233;
        }
    </style>
</head>
<body>
    <!-- 
        Faça um programa que receba o valor do quilo de um produto e a quantidade 
        de quilos do produto consumida, calculando o valor final a ser pago.
    -->
    <main>
        <p>{{$result }}</p>
    </main>
</body>
</html>