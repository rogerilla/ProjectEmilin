@extends ('web.template')
@section ('content')

<h3>
    {{$historia->titol}}
</h3>

<p>usuari: {{$historia->usuari}}</p>
<p>Categoria: {{$historia->nom_categoria}}</p>
<p>Contingut {{$historia->contingut}}</p
@stop
