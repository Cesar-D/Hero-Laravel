@extends('layouts.app')
@section('content')
        <h1>Crear nuevo enemigo </h1>
        <form action="{{route('enemy.store')}}" method="post">
            @include('admin.enemys.form')
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
@endsection