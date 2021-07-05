<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/style.css">
   <script src="/js/scripts.js"></script>
</head>

<body>
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


</body>

</html>