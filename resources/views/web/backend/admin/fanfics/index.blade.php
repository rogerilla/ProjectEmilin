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
                    <a href="{{route('fanfics.index')}} "class='bg-secondary'>Histories</a>
                </li>
                <li>
                    <a href="{{route('category.index')}}" >Categories</a>
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
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
        <!-- /#sidebar-wrapper -->
        
<!--Cateogries-->
<div class='col-lg-8 container text-center'>
    <div class="page-header ">
        <h1>
            Fanfictions
        </h1>
    </div>
    <div class='page'>
        <div class="row">       
            <div class="table-responsive">

                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>

                            <th>Autor</th>
                            <th>Titol</th>
                            <th>Id categoria</th>
                            <th>Resum</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>


                    @foreach ($histories as $historia)
                    <tr>

                        <td>{{$historia->nom_autor}}</td>
                        <td>{{$historia->titol}}</td>
                        <td>{{$historia->nom_categoria}}</td>
                        <td>{{$historia->resum}}</td>
                        
                        
                        <td>{!! Form::open(['route' => ['fanfics.destroy', $historia->id]]) !!}
                        <input type="hidden" name="_method" value="DELETE">
                        <button onClick="return confirm('Eliminar el fanfic?')" class="btn btn-danger">
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
