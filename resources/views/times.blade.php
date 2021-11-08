@extends('layouts.app')

@section('content')

    <h1 class="text-center">Times</h1> <hr>

    <div class="col-8 m-auto">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Wordl Ranking</th>
                <th scope="col">Weeks in top30</th>
                <th scope="col">Twitter</th>
                <th scope="col">Snstagram</th>
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

                </tr>
                @endforeach

            </tbody>
          </table>
    </div>

@endsection
