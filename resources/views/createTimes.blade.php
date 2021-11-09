@extends('layouts.app')

@section('content')
    <h1 class="text-center">@if(isset($time))Editar @else Cadastrar @endif</h1>

    <div class="col-12 m-auto">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(isset($time))
            <form name="formEditTime" id="FormEditTime" method="post" enctype="multipart/form-data" action="{{url("times/$time->id")}}">
                @method('PUT')
        @else
            <form name="formCadTime" id="FormCadTime" method="post" action="{{url("times")}}">
        @endif
                @csrf
                <input class="form-control" type="text" name="name" id="name" placeholder="Nome do Time" value="{{$time->name ?? ''}}" require> <br>
                <input class="form-control" type="text" name="twitter" id="twitter" placeholder="Twitter" value="{{$time->twitter ?? ''}}" require> <br>
                <input class="form-control" type="text" name="instagram" id="instagram" placeholder="Instagram" value="{{$time->instagram ?? ''}}" require> <br>
                <input class="form-control" type="text" name="wordlranking" id="wordlranking" placeholder="Wordl Ranking" value="{{$time->wordlranking ?? ''}}" require> <br>
                <input class="form-control" type="text" name="weekstop30" id="weekstop30" placeholder="Weeks Top 30" value="{{$time->weekstop30 ?? ''}}" require> <br>
                <input class="btn btn-primary" type="submit" value="@if(isset($time))Editar @else Cadastrar @endif">
            </form>
    </div>

@endsection
