@extends('layouts.app')
@section('content')
    <div class="row">
        <h1>Sistema de batalla</h1>
    </div>
    <div class="row text-center text-white mt-2">
        <div class="col-5 bg-primary">
            <h2>HERO</h2>
        </div>
        <div class="col-2 bg-warning">
            <h2>VS</h2>
        </div>
        <div class="col-5 bg-danger">
            <h2>ENEMY</h2>
        </div>
    </div>
    <div class="row">
        <div class="col text-center text-white mt-2 bg-info">
            <h2>Eventos de batalla</h2>
        </div>
    </div>
    <div class="mt-3">
        <div class="alert alert-success" role="alert">
            Hero hace un ataque de 15 a enemigo.
        </div>
        <div class="alert alert-danger" role="alert">
            Enemigo daña a hero con 10 puntos.
        </div>

    </div>

    
@endsection