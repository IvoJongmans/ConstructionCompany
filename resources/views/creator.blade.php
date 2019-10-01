@extends('templates.layout')

@section('css')

    <link rel="stylesheet" href="{{ asset('css/creator.css') }}">

@endsection

@section('title', 'Woning Creator')

@section('content')

<div id="app">

    <comp1></comp1>
    <comp2></comp2>
    <comp3></comp3>

</div>

<script src="{{ asset('js/app.js') }}"></script>

@endsection
