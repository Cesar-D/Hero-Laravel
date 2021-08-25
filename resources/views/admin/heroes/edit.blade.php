@extends('layouts.app')
@section('content')
        <h1>Editar heroe - {{$heroes->name}}</h1>
        <form action="{{route('heroes.update',['id'=>$heroes->id])}}" method="post">
            @method('PUT')
            @include('admin.heroes.form')
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
@endsection