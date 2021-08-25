@extends('layouts.app')
@section('content')
        <h1>Editar enemigo - {{$enemy->name}}</h1>
        <form action="{{route('enemy.update',['id'=>$enemy->id])}}" method="post">
            @method('PUT')
            @include('admin.enemys.form')
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
@endsection