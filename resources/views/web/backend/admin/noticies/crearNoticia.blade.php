@extends ('web.backend.admin.templateadmin')
@section ('content')
<div class='container '>
    <div class="page-header text-center">
        {!! Form::open(['route'=>'noticies.store']) !!}
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
                    <label for="name">Titol:</label>
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
                            <label for="noticia">Cos de la Noticia</label>
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
   
@endsection