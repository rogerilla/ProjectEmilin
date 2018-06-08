@extends ('web.template')
@section ('content')
<div class='container '>
    <div class="page-header text-center">
        {!! Form::model($historia, ['route' => ['fanfiction.update', Auth::user()->name, $historia]])!!}
        <input type="hidden" name="_method" value="PUT">
        <h1>
            Fanfictions <small>Edita el teu Fanfiction</small>
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
                array(
                'class'=>'form-control',
                'placeholder' => 'Introdueix un el titol del fanfic',
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


        </div>
        <div class="form-group">
            {!! Form::submit('Desar', array('class'=>'btn btn-primary')) !!}
            <a href="{{ route('noticies.index') }}" class="btn btn-danger">Cancel·lar</a>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@stop