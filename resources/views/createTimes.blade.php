@extends('layouts.app')

@section('content')
    <h1 class="text-center">Cadastrar</h1>

    <div class="col-12 m-auto">
        <form name="formCadTime" id="FormCadTime" method="post" action="{{url("times")}}">
            @csrf
            <input class="form-control" type="text" name="name" id="name" placeholder="Nome do Time"> <br>
            <input class="form-control" type="text" name="twitter" id="twitter" placeholder="Twitter"> <br>
            <input class="form-control" type="text" name="instagram" id="instagram" placeholder="Instagram"> <br>
            <input class="form-control" type="text" name="wordlranking" id="wordlranking" placeholder="Wordl Ranking"> <br>
            <input class="form-control" type="text" name="weekstop30" id="weekstop30" placeholder="Weeks Top 30"> <br>
            <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
    </div>

@endsection
