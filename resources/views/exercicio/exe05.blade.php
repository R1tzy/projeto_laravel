<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05</title>
    <link rel="stylesheet" href="{{ asset('css/exercicio.css') }}" type="text/css">
    <style>
        main{
            background: #9d4edd;;
            height: max(450px, 25vh);
        }

        h1{
            color: #3c096c; 
        }
        div > label,  button:hover{ 
            color: #3c096c;
        }

        button{
            background-color: #3c096c; 
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
        <h1>Exercício 05</h1>
        <form action="/resultado05" method="post">
            @csrf
            @for($i = 1; $i < 5; $i++)
            <div>
                <label for="nota{{ $i }}">Digite Nota {{ $i }}</label><br>
                <input type="number" id="nota{{ $i }}" name="nota{{ $i }}" min="0" required>
            </div>
            @endfor
            <button type="submit" name="btn">Ver Média</button>
        </form>
    </main>
</body>
</html>