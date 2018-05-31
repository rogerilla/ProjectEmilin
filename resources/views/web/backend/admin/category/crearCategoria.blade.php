@extends ('web.backend.admin.templateadmin')
@section ('content')
<div class='container text-center'>
    <div class="page-header">
        {!! Form::open(['route'=>'category.store']) !!}
        <h1>
            CATEGORIES <small>Afegir Categoria</small>
        </h1>

            <div class="">
                <div class="page">
                    @if (count($errors) > 0)
                    @include('web.backend.admin.errors')
                    @endif
                </div>
                <div class="form-group">
                    <label for="name">Nom:</label>
                    {!! 
                    Form::text(
                    'nom', 
                    null, 
                    array(
                    'class'=>'form-control',
                    'placeholder' => 'Introdueix un nom de la categoria que vulguis',
                    'autofocus' => 'autofocus'
                    )
                    ) 
                    !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::submit('Desar', array('class'=>'btn btn-primary')) !!}
                <a href="{{ route('category.index') }}" class="btn btn-danger">Cancel·lar</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
   
@endsection