@extends ('web.template')
@section ('content')

<div class="container bg-light"">
    <div id="contanidor_fanfic" class="py-4" >
        <h3>
            {{$historia->titol}}
        </h3>

        <p> <b>Autor:</b> {{$historia->usuari}}</p>
        <p> <b>Categoria:</b> {{$historia->nom_categoria}}</p>
        <p>{{$historia->contingut}}</p>
        <h3>Comentaris</h3>
        <p>Aqui hi haurna els comentaris</p>
        
        <h7>Escriu el teu comentari!</h7>
        <div class="column" id="comentaris">
            <form action="">
                Comentari
                <div class="form-group">
                    <label for="comentari"></label>
                    <textarea id="txtArea"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Envia</button>
            </form>
        </div>
    </div>
</div>
<!--Comentaris-->

@stop

