<!-- fazendo o include do layout -->
@extends('layout')  


<!-- criando uma section, nesse caso o que estiver no título-->
@section('titulo')
    Isso é um teste
@endsection

<!-- criando uma section, que muda o que estiver no conteúdo -->
@section('conteudo')
    Não farei exercícios no sábado!!!
@endsection
