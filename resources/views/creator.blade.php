@extends('templates.layout')

@section('css')

    <link rel="stylesheet" href="{{ asset('css/creator.css') }}">

@endsection

@section('title', 'Woning Creator')

@section('content')

    <div class="container-fluid" id="creatorcontainer">

        <div id="options">
            <h5 class="text-center">OPTIONS</h5>
            <select v-model="dakpannen" @@change="veranderprijs">
                    <option>Rood</option>
                    <option>Zwart</option>
                  </select>
                  <span>Selected: @{{ dakpannen }}</span>
        </div>

        <div id="house">
            <h5 class="text-center">HOUSE</h5>

        </div>

        <div id="price">
            <h5 class="text-center">PRICE</h5>
            @{{ kosten }}
        </div>

    </div>

    <script type="text/javascript" src="{{ URL::asset('VueJS/options.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('VueJS/price.js') }}"></script>

@endsection
