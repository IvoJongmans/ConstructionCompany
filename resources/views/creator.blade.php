@extends('templates.layout')

@section('css')

    <link rel="stylesheet" href="{{ asset('css/creator.css') }}">

@endsection

@section('title', 'Woning Creator')

@section('content')

<div id="app">

    <option_roofcolor></option_roofcolor>
    <option_wall_material></option_wall_material>
    <house_roof></house_roof>
    <house_wall_material></house_wall_material>
    <price_roof></price_roof>
    <price_total></price_total>

</div>

<script src="{{ asset('js/app.js') }}"></script>

@endsection
