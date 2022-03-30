<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>
    <link rel="stylesheet" href="{{ asset('css/exercicio.css') }}" type="text/css">
    <style>
        main{
            background: #48cae4;
        }

        h1{
            color: #023e8a;   
        }

        div > label,  button:hover{
            color: #023e8a;
        }

        button{
            background-color: #023e8a;
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
        <h1>Exercício 04</h1>
        <form action="/resultado04" method="post">
        @csrf
            <div>
                <label for="num">Digite um número</label><br>
                <input type="number" id="num" name="num">
            </div>
            <button type="submit">Verificar</button>
        </form>
    </main>
</body>
</html>