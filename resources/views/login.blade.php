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
            <form>
                <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mailadres">
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Wachtwoord">
                <small id="emailHelp" class="form-text text-muted">Nog geen account? <a href="/register">Registreer.</a></small>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>

@endsection
