<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado 04</title>
    <link rel="stylesheet" href="{{ asset('css/resultado.css') }}" type="text/css">
    <style>
        main{
            background: #48cae4;
        }

        p{
            color: #023e8a;
        }
    </style>
</head>
<body>
    <!-- 
        Desenvolva um programa que receba um valor digitado pelo usuário e verifique se esse valor é 
        positivo, negativo ou igual a zero. Imprima na tela: "Valor Positivo", "Valor Negativo", 
        "Igual a Zero".
    -->
    <main>
        <p>{{$result }}</p>
    </main>
</body>
</html>