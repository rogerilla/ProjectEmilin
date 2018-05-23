@extends ('web.backend.admin.templateadmin')
@section ('content')
<div class='container text-center'>
    <div class="page-header">
        <h1>
            CATEGORIES <small>Afegir Categoria</small>
        </h1>
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <div class="page">
                    @if (count($errors) > 0)
                    @include('admin.partials.errors')
                    @endif
                </div>
                <div class="form-group">
                    <label for="name">Nom:</label>
                    {!! 
                    Form::text(
                    'name', 
                    null, 
                    array(
                    'class'=>'form-control',
                    'placeholder' => 'Introdueix un nom...',
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
    <!--{!! Form::open(['route'=>'categories.projectemilin']) !!};-->