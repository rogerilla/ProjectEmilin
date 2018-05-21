@extends ('web.template')
@section ('content')

    <div class="container  bg-light">
        <div class="border-bottom">
            <h1>Noticies</h1>
        </div>
        @foreach ($noticies as $noticia)
        <h3>            
            {{$noticia->titol}}
        </h3>
        <p>{{$noticia->noticia}}</p>
        <div class="text-right">Hola</div>
        @endforeach

        <div class="row">

            <div class="col-12 col-md-6 ">
                <h2>Els Fanfictions més nous</h2>

            </div>
            <div class="col-12 col-md-6 ">
                <h2 class="border-top border-bottom">Llegeix-n'he un d'aleatori!</h2>
                <h3>
                <a class="" href="{{route('fanfic-escollit', $historia_rand->titol)}}">{{$historia_rand->titol}}</a>
                </h3>
                <b>Autor: {{$historia_rand->usuari}}</b>
                <p>Resum: {{$historia_rand->resum}}</p>
            </div>
        </div>
    </div>
@stop
