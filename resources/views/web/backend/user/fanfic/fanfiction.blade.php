@extends ('web.template')
@section ('content')
<div class="footerabaix"
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
                    <a href="{{route('category.index')}}"class='bg-secondary'>Usuaris</a>
                </li>
                <li>
                    <a href="{{route('fanfiction.index', Auth::user()->name)}}">Fanfictions</a>
                </li>
                <li>
                    <a href="{{route('fanfiction.create', Auth::user()->name)}}">Creador de Fanfictions</a>
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
    </div>
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

                                <th>Titol</th>
                                <th>Id categoria</th>
                                <th>Resum</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>


                        @foreach ($histories as $historia)
                        <tr>
                            <td>{{$historia->titol}}</td>
                            <td>{{$historia->nom_categoria}}</td>
                            <td>{{$historia->resum}}</td>   
                            <td><a href="{{route('fanfiction.edit', [Auth::user()->name, $historia])}}"> <button type="button" class="btn btn-warning"><i class ='fa fa-pencil-square'></i></button></a></td>

                            <td>{!! Form::open(['route' => ['fanfiction.destroy', $historia->id,  Auth::user()->name]]) !!}
                                <input type="hidden" name="_method" value="DELETE">
                                <button onClick="return confirm('Eliminar el fanfic?')" class="btn btn-danger">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                {!! Form::close() !!}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop