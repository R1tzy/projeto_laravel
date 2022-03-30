<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado 05</title>
    <link rel="stylesheet" href="{{ asset('css/resultado.css') }}" type="text/css">
    <style>
        main{
            background: #9d4edd;
        }

        p{
            color: #3c096c;
        }
    </style>
</head>
<body>
    <!-- 
        Desenvolva um programa que receba quatro notas de um aluno, calcule e imprima a média aritmética 
        das notas e a mensagem de aprovado para média superior ou igual a 7.0 ou a mensagem de reprovado 
        para média inferior a 7.0
    -->
    <main>
        <p>{{$result }}</p>
    </main>
</body>
</html>