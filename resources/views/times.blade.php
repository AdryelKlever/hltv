@extends('layouts.app')

@section('content')

    <h1 class="text-center">Times</h1> <hr>

    <div class="text-center">
        <a href="{{url("times/create")}}">
            <button class="btn btn-success mt-3 mb-4">Cadastrar</button>
        </a>
    </div>

    <div class="col-12 m-auto">
        @csrf
        <table class="table text-center">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Wordl Ranking</th>
                <th scope="col">Weeks in top30</th>
                <th scope="col">Twitter</th>
                <th scope="col">Instragram</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($time as $times)

                <tr>
                    <th scope="row">{{$times -> id}}</th>
                    <td>{{$times -> name}}</td>
                    <td>{{$times -> wordlranking}}</td>
                    <td>{{$times -> weekstop30}}</td>
                    <td>{{$times -> twitter}}</td>
                    <td>{{$times -> instagram}}</td>
                    <td>
                        <a href="{{url("times/$times->id")}}">
                            <button class="btn btn-dark">Visualizar</button>
                        </a>
                        <a href="{{url("times/$times->id/edit")}}">
                            <button class="btn btn-primary">Editar</button>
                        </a>
                        <a class="js-del" href="{{url("times/$times->id")}}">
                            <button class="btn btn-danger">Deletar</button>
                        </a>
                    </td>
                </tr>
                @endforeach

            </tbody>
          </table>
    </div>

@endsection
