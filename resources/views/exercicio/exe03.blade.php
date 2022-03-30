<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
    <link rel="stylesheet" href="{{ asset('css/exercicio.css') }}" type="text/css">
</head>
<body>
    <!-- 
        Desenvolva um programa que receba um valor digitado pelo usuário e imprima o texto 
        "o valor é maior que 10" caso isso seja verdade, senão imprima "o valor é menor que 10".
    -->
    <main>
        <h1>Exercício 03</h1>
        <form action="/resultado03" method="post">
        @csrf
            <div>
                <label for="num">Digite um número</label><br>
                <input type="number" id="num" name="num" min="0">
            </div>
            <button type="submit">Verificar</button>
        </form>
    </main>
</body>
</html>