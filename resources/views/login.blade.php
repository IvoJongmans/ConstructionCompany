@extends('templates.layout')

@section('css')

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

@endsection

@section('title', 'Login')

@section('content')

    <div class="container-fluid" id="mainblock">
        <div class="container" id="push">

        </div>
        <div class="container" id="loginform">
            <form action="/login" method="post">
            @csrf
                <div class="form-group">
                <label for="email">E-mailadres</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Bijv. huisje@mail.com">
                </div>
                <div class="form-group">
                <label for="password">Wachtwoord</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Wachtwoord">
                <small class="form-text text-muted">Nog geen account? <a href="/register">Registreer.</a></small>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>

@endsection
