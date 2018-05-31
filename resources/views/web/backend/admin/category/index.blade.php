@extends ('web.backend.admin.templateadmin')
@section ('content')
<!--Menu del costat-->
<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="#">
                    Menu d'admin
                </a>
            </li>
            <li>
                <a href="">Usuaris</a>
            </li>
            <li>
                <a href="{{route('fanfics.index')}}">Histories</a>
            </li>
            <li>
                <a href="{{route('category.index')}}" class='bg-secondary'>Categories</a>
            </li>
            <li>
                <a href="{{route('noticies.index')}}">Noticies</a>
            </li>
            <li>
                <a href="{{route('noticies')}}">Tornar al ProjectEmilin</a>
            </li>
        </ul>
    </div>
    <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Panell de control</a>
    <script>
        $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
    <!-- /#sidebar-wrapper -->

    <!--Cateogries-->
    <div class='col-lg-8 container text-center'>
        <div class="page-header ">
            <h1>
                CATEGORIES <h3><a href="{{Route('category.create')}}" class ='btn btn-success'><i class ='fa fa-plus-circle'></i>Nova Categoria</a></h3> 
            </h1>
        </div>
        <div class='page'>
            <div class="row">       
                <div class="table-responsive">

                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>


                        @foreach ($categories as $categoria)
                        <tr>
                            <td>{{$categoria->id}}</td>
                            <td>{{$categoria->nom}}</td>
                            <td><a href="{{route('category.edit',$categoria)}}"> <button type="button" class="btn btn-warning"><i class ='fa fa-pencil-square'></i></button></a></td>
                            <td>{!! Form::open(['route' => ['category.destroy', $categoria]]) !!}
                        <input type="hidden" name="_method" value="DELETE">
                        <button onClick="return confirm('Eliminar registre?')" class="btn btn-danger">
                            <i class="fa fa-trash-o"></i>
                        </button>
                        {!! Form::close() !!}</td>
                        </tr>
                        @endforeach
                        
                </div>
            </div>
        </div>
    </div>


    <!--Usuaris-->

    @stop