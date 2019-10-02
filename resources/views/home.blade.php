@extends('templates.layout')

@section('css')

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

@endsection

@section('title', 'Home')

@section('content')

    <div class="container-fluid" id="mainblock">

        <div id="card1">

        </div>

        <div id="card2">

        </div>

    </div>

    <script>

        $('#card1').mouseenter(function(){
            $('#card1').css('background-image', 'none').css('background-color', 'white').append('<h3 class="text-center" style="padding:10px">Waarom?</h1><p style="padding:10px">Door jarenlange ervaring en kennis zijn wij uitgegroeid to een van de meest toonaangevende bedrijven in de bouwsector.</p>');
        });

        $('#card1').mouseleave(function(){
            $('#card1').css('background-image', 'url("/images/card1.jpeg")').empty();
        });

        $('#card2').mouseenter(function(){
            $('#card2').css('background-image', 'none').css('background-color', 'white').append('<h1 class="text-center">HEROKU REMOTE SUCCESS</h1>');
        });

        $('#card2').mouseleave(function(){
            $('#card2').css('background-image', 'url("/images/card2.jpeg")').empty();
        });

    </script>

@endsection
