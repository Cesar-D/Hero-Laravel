@extends('layouts.app')
@section('content')
    <div class="row">
        <h1>Sistema de batalla</h1>
    </div>
    <div class="row text-center text-white mt-2">
        <div class="col-5 bg-primary">
            <h2>HERO: {{$heroName}}</h2>
        </div>
        <div class="col-2 bg-warning">
            <h2>VS</h2>
        </div>
        <div class="col-5 bg-danger">
            <h2>ENEMY: {{$enemyName}}</h2>
        </div>
    </div>
    <div class="row">
        <div class="col text-center text-white mt-2 bg-info">
            <h2>Eventos de batalla</h2>
        </div>
    </div>
    <div class="mt-3">
        @foreach ($events as $ev)
            <div class="alert @if ($ev["winner"] =="hero") alert-success @else alert-danger @endif" role="alert">
                {{$ev["text"]}}
            </div>
        @endforeach
    </div>    
@endsection