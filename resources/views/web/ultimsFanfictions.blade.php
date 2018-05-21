@extends ('web.template')
@section ('content')
<div class="container">
    <div id="contanidor_fanfic" class="bg-light px-4">
        @foreach ($histories as $historia)
        <!-- Aquí es posen totes els fanfics (de A a Z)-->
        <h3>
            <a class="" href="{{route('fanfic-escollit', $historia->titol)}}">{{$historia->titol}}</a>
        </h3>
        <p> {{$historia->usuari}}</p>
        <p>{{$historia->nom_categoria}}</p>
        <p>{{$historia->resum}}</p>
        @endforeach
    </div>
</div>
@stop
