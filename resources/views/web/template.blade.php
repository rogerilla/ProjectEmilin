<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang='es'>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'ProjectEmilin')</title>
        <!-- Jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!--Css-->
        <link rel="stylesheet" href="{{asset("css/main.css")}}">
        <!--Bootstrap-->
        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        
        <!-- Font awesome-->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        
        <!-- Faig servir litera-->
        <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.1/litera/bootstrap.min.css" rel="stylesheet" integrity="sha384-+YpxMU1QQywaQtI3dMQAwIcu0vVDuOREjQPC59qblQHg9nTdcrUXMPnanUaldUnY" crossorigin="anonymous">
        
    </head>
    <body>
        <div class="costats_web">
        @include ('web.extrems.nav')
        @yield ('content')
        @include ('web.extrems.footer')
        </div>
    </body>
</html>
