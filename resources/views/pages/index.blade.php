@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1 class="display-4">{{$title}}</h1>
        <p class="lead">Moja prva prava laravel stranica, enjoy.</p>
        <hr class="my-4">
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
          <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
        </p>
    </div>
@endsection