@extends ('web.template')
@section ('content')
<div class="container  bg-light">
    <div class="row">
        <div class="col-lg-9  col-12 py-4 border-right">

            <h1 class="text-center">Benvinguts a ProjectEmilin</h1>
            <div class="text-justify">
                <p>ProjectEmilin és una pàgina de Fanfictions que serveix perquè tothom que vulgui fer fanfictions en Català pugui crear-los
                    i compartir-los amb altra gent de cultura catalana.</p>
                <p>Es demana si sou nous a la pàgina llegir les normes i seguir-les, i que tampoc munteu molt rebombori.</p>
                <p>Moltes gràcies per llegir aquesta carta de presentació i que gaudiu tant escrivint com llegint en la nostra pàgina!</p>
                <p>Ah! I si us agrada, acceptem donacions de paypal pels manteniments del servidor i per pogut seguir mantenint aquest món
                    meravellós</p></div>



            <div class="row border-right">

                <div class="col-12 col-md-6 py-4 border-top border-right">
                    <h2><i class="fa fa-free-code-camp"></i> Fanfictions més nous</h2>
                    @foreach ($last_histories as $histories)
                    <div class=" border-bottom ">
                        <h3>{{$histories->titol}}</h3>
                        <b>Autor: {{$histories->usuari}}</b>
                        <p class="text-justify">Resum: {{$histories->resum}}</p>
                    </div>
                    @endforeach
                </div>
                <div class="col-12 col-md-6 py-4 border-top">
                    <div class="row">
                        <div class="col-lg-10">
                            <h2 class="border-bottom">Llegeix-n'he un d'aleatori!</h2>
                        </div>
                        <div class="col-lg-2">
                            <!--Carregar amb ajax un nou aleatori-->
                            <button type="button" class="btn btn-secondary" onClick="window.location.reload()"><i class="fa fa-random"></i></button>
                        </div>
                    </div>
                    <h3>
                        <a class="" href="{{route('fanfic-escollit', $historia_rand->titol)}}">{{$historia_rand->titol}}</a>
                    </h3>
                    <b>Autor: {{$historia_rand->usuari}}</b>
                    <p class="text-justify">Resum: {{$historia_rand->resum}}</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3" id="noticiesFont">
            <div class="border-bottom">
                <h1><i class="fa fa-newspaper-o"></i> Noticies</h1>
            </div>
            @foreach ($noticies as $noticia)
            <h4>            
                {{$noticia->titol}}
            </h4>
            <p>{{$noticia->noticia}}</p>
            <div class="text-right">{{$noticia->autor}}</div>
            @endforeach
        </div>

    </div>
</div>
@stop
