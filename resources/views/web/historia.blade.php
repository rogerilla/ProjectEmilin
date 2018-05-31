@extends ('web.template')
@section ('content')
<div class="container bg-light text-dark">
    
    <a href='{{ route('fanfictions', $button = 'A-Z') }}'>A-Z</a>
    <a href='{{ route('fanfictions', $button = 'primers') }}'>Primers</a>
    <a href='{{ route('fanfictions', $button = 'ultims') }}'>Ultims</a>
    @foreach ($histories as $historia)
    <!-- Botons de ordre -->

    <!-- Aquí es posen totes els fanfics (de A a Z)-->
    <div class="border">
        <h3>
            <a class="text-dark" href="{{route('fanfic-escollit', $historia->titol)}}">{{$historia->titol}}</a>
        </h3>
        <p>Autor: {{$historia->usuari}}</p>
        <p>Categoria: {{$historia->nom_categoria}}</p>
        <p>Resum:{{$historia->resum}}</p>
    </div>
    @endforeach
</div>
@stop

