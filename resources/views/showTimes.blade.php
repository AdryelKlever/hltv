@extends('layouts.app')

@section('content')

    <h1 class="text-center">Visualizar</h1>

    <div class="col-12 m-auto">
        Name: {{$time -> name}} <br>
        Twitter: {{$time -> twitter}} <br>
        Instagram: {{$time -> instagram}} <br>
        Wordl Ranking: {{$time -> wordlranking}} <br>
        Weeks in top30 for core: {{$time -> weekstop30}} <br>
    </div>

@endsection
