@extends ('web.backend.admin.templateadmin')
@section ('content')
<!--Cateogries-->
<div class='container text-center'>
    <div class="page-header">
        <h1>
            CATEGORIES <h3><a href="" class ='btn btn-success'><i class ='fa fa-plus-circle'></i>Nova Categoria</a></h3> 
        </h1>
    </div>
    <div class='page'>
        <div class="table-responsive">

            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        
                        <th>Nom</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>

                <body>

                    @foreach ($categories as $categoria)
                <tr>
                    
                    <td>{{$categoria->nom}}</td>
                    <td><button type="button" class="btn btn-warning"><i class ='fa fa-pencil-square'></i></button></td>
                    <td><button type="button" class="btn btn-danger">X</button></td>
                </tr>
                @endforeach
        </div>
    </div>

</body>

<!--Usuaris-->

@stop