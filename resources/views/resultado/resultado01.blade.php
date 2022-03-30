<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado 01</title>
    <link rel="stylesheet" href="{{ asset('css/resultado.css') }}" type="text/css">
    <style>
        main{
            background: #c71f37;
        }

        p{
            color: #641220;
        }
    </style>
</head>
<body>
    <!-- 
        Faça um programa que receba um valor pago, um segundo valor 
        que é o preço do produto e retorne o troco a ser dado. 
    -->
    <main>
        <p>{{$result }}</p>
    </main>
</body>
</html>