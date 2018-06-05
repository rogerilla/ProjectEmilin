@extends ('web.template')
@section ('content')
<div class='container '>
    <div class="page-header text-center">
        {!! Form::open(['route'=>['crear-historia', Auth::user()->name]]) !!}
        <h1>
            Noticies <small>Crear noticia</small>
        </h1>

        <div class="">
            <div class="page">
                @if (count($errors) > 0)
                @include('web.backend.admin.errors')
                @endif
            </div>
            <div class="form-group">
                <label for="titol">Titol:</label>
                {!! 
                Form::text(
                'titol', 
                null, 
                array(
                'class'=>'form-control',
                'placeholder' => 'Introdueix un el titol de la noticia que vulguis',
                'autofocus' => 'autofocus'
                )
                ) 
                !!}
            </div>
            <div class="form-group">
                <label for="Resum">Crea el resum</label>
                {!! 
                Form::textarea(
                'resum', 
                null, 
                array(
                'class'=>'form-control'
                )
                ) 
                !!}
            </div>
            <div class="form-group">
                <label for="Resum">Contingut</label>
                {!! 
                Form::textarea(
                'contingut', 
                null, 
                array(
                'class'=>'form-control'
                )
                ) 
                !!}
            </div>

            Selecciona les categories que vols implementar a les histories
            <div class='d-flex wrap'>
                @foreach ($categories as $categoria) 
                {{ Form::checkbox('categoria[]', $categoria->id, null, ['class' => 'field']) }}{{$categoria->nom}}
                @endforeach
        </div>
        </div>
        <div class="form-group">
            {!! Form::submit('Desar', array('class'=>'btn btn-primary')) !!}
            <a href="{{ route('noticies.index') }}" class="btn btn-danger">Cancel·lar</a>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@stop