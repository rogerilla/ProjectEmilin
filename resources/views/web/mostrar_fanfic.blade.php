@extends ('web.template')
@section ('content')

<div class="container">
    <div id="contanidor_fanfic" class="bg-light px-4">
        <h3>
            {{$historia->titol}}
        </h3>

        <p> <b>Autor:</b> {{$historia->usuari}}</p>
        <p> <b>Categoria:</b> {{$historia->nom_categoria}}</p>
        <p>{{$historia->contingut}}</p>
    </div>
</div>
@stop

