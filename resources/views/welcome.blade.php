@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')
    <h1>Algum Titulo</h1>
    <img src="img/banner.jpg" alt="Banner">
    @if(10 > 5)
    <p>A condição é true </p>
    @endif
    <p>{{$nome}}</p>

    @if($nome == "Pedro")
    <p>O Nome é Perdro</p>
    @else
    <p>O nome não é Pedro {{$idade}} anos, profissão {{$profissao}}</p>
    @endif

    @for($i = 0; $i < count($arr); $i++) 
        <p>{{$arr[$i]}} - {{ $i }}</p>
        @if($i == 2)
        <p>O i é {{$i}}</p>
        @endif
    @endfor

    @foreach($nomes as $nome)
        <p> {{ $loop->index }} </p>
        <p> {{ $nome }}</p>
    @endforeach

    @php
        $name = "João";
        echo $name;
    @endphp
@endsection