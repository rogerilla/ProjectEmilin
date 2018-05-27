@extends ('web.template')
@section ('content')
<div class="container bg-light text-dark">
    <div class="d-flex justify-content-center">
        <button class="btn-secondary m-2"><a class="text-dark"  href="{{route('fanfictions')}}">A-Z</a></button>
        <button class="btn-secondary m-2"><a class="text-dark" href="{{route('fanfic-ultims')}}">Ultims</a></button>
            <button class="btn-secondary m-2"><a class="text-dark" href="{{route('fanfic-nous')}}">Nous</a></button>

    </div>

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

