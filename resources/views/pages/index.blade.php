@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Hello, Movie!</h1>
    <ul>
        @foreach ($movies as $movie)
        <li>
                <strong>Regista:</strong> {{ $movie->regista }}
                <br>
                <strong>Film:</strong> {{ $movie->film }}
        </li>
        @endforeach
    </ul>
@endsection
