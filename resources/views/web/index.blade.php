@extends ('web.template')
@section ('content')
<div class="costats_web">
    <div class="container border-left border-light border-right bg-light">
        <div class="noticies border-bottom">
            <h1> Noticies</h1>
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

                <div class="border-top border-bottom ">Aqui hi hauran les 3 histories repetides</div>
                <div class="border-top border-bottom ">Aqui hi hauran les 3 histories repetides</div>
                <div class="border-top border-bottom ">Aqui hi hauran les 3 histories repetides</div>
            </div>
            <div class="col-12 col-md-6 ">
                <h2 class="border-top border-bottom">Llegeix-n'he un d'aleatori!</h2>
                Aqui hi haura l'historia aleatoria
            </div>
        </div>
    </div>
</div>
@stop
