@extends ('web.template')
@section ('content')
<div class="footerabaix">
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
<div class="container">
    <div class="text-center">
        <h1>Benvingut/da al teu perfil personal {{Auth::user()->name}} clica el panell de control per començar</h1>
    </div>
</div>
</div>
@stop