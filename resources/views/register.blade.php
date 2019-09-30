@extends('templates.layout')

@section('css')

    <link rel="stylesheet" href="{{ asset('css/register.css') }}">

@endsection

@section('title', 'Register')

@section('content')

    <div class="container-fluid" id="mainblock">
        <div class="container" id="push">

        </div>
        <div class="container" id="registerform">
            <form action="" method="post">
                @csrf
                <div class="form-group">
                <label for="name">Naam</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="name" placeholder="Bijv. Ivo Jongmans">
                </div>
                <div class="form-group">
                <label for="email">Emailadres</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="email" placeholder="Emailadres">
                </div>
                <div class="form-group">
                <label for="password">Wachtwoord</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Wachtwoord">
                </div>
                <div class="form-group">
                <label for="repeatpassword">Herhaal wachtwoord</label>
                <input type="password" class="form-control" id="repeatpassword" name="passwordrepeat" placeholder="Herhaal wachtwoord">
                <small class="form-text text-muted"><a href="/login">Terug naar login</a></small>
                </div>
                <button type="submit" class="btn btn-primary">Registreer</button>
            </form>
        </div>
    </div>

@endsection
