@extends('templates.layout')

@section('css')

    <link rel="stylesheet" href="{{ asset('css/creator.css') }}">

@endsection

@section('title', 'Woning Creator')

@section('content')

    <div class="container-fluid" id="creatorcontainer">

        <div id="options">
            <h5 class="text-center">OPTIONS</h5>
        </div>

        <div id="house">
            <h5 class="text-center">HOUSE</h5>
        </div>

        <div id="price">
            <h5 class="text-center">PRICE</h5>
        </div>

    </div>

@endsection
