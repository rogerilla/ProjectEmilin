@extends ('web.backend.admin.templateadmin')
@section ('content')
<div class='container text-center'>
    <div class="page-header">
        <h1>
            Noticia <small>Editar Noticia</small>
        </h1>
        <div class="row">
            <div class="col-md-offset-3 col-md-6">


                <div class="page">
                    @if (count($errors) > 0)
                    @include('web.backend.admin.errors')
                    @endif
                    {!! Form::open(['route' => ['update-noticia', $noticia]])!!}

                </div>
                <div class="form-group">
                    <label for="titol">Titol:</label>
                    {!! 
                    Form::text(
                    'titol', 
                    null, 
                    array(
                    'class'=>'form-control',
                    'placeholder' => 'Introdueix un titol...',
                    'autofocus' => 'autofocus'
                    )
                    ) 
                    !!}
                </div>
                <div class="form-group">
                    <label for="noticia">Noticia:</label>
                    {!! 
                    Form::textarea(
                    'noticia', 
                    null, 
                    array(
                    'class'=>'form-control'
                    )
                    ) 
                    !!}

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
